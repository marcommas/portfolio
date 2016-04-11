var renderer, scene, camera, porcentagem;
var videoScene, videoCam;

	function augmentedReality(canvas, debugCanvas, container, mainVideo, 
			url, 
    		positionX,
			positionY,
			positionZ,
			scaleX,
			scaleY,
			scaleZ,
			rotationX,
			rotationY,
			rotationZ ){  
		
		var container, stats;
		var dae;

		detectorWebGl();


		var loader = new THREE.ColladaLoader();

		//url É A VARIAVEL PASSADA POR PARÂMETRO QUE CONTÉM O ARQUIVO COLLADA
		loader.load(url, 
			function  (collada){
				document.getElementById("mostraLoader").style.display = "none";
				dae = collada.scene;
				init();

			}, 
			function ( xhr ) {
				document.getElementById("mostraLoader").style.display = "block";
	
				porcentagem = (xhr.loaded / xhr.total * 100);
				document.getElementById("porcentagem").innerHTML = parseFloat(porcentagem.toFixed(2)) + '%' ;

			}	

		);

		function init(){

	    	threshold = 103;
	    	DEBUG = true;

			getUserMedia(mainVideo);

			//criando a câmera
			if(window.innerWidth < 767){
				camera = new THREE.PerspectiveCamera( 0, window.width / window.height, 1, 10000);
	        }else{
	        	camera = new THREE.PerspectiveCamera( 0, window.width / window.height, 1, 10000);
	        }

	        //criando o renderizador e aidcionando no DOM
			renderer = new THREE.WebGLRenderer({antialias: true});

			//Tamanho da camera aonde aparece a RA
			if(window.innerWidth < 767){
	            renderer.setSize(320, 240);
	        }else{
	            renderer.setSize(640, 480);
	        } 
			renderer.sortObjects = false;


			container.appendChild(renderer.domElement);


	        //criando a cena
			scene = new THREE.Scene();

			// Cria uma camera e uma objeto marcador root para a Three.js scene.
	     	scene.add(camera);

		    var light = new THREE.DirectionalLight( 0xffeedd  );
			light.position.set(  10, 1, 10 ).normalize();
			scene.add( light );
			
			//MOSTRA O ESTADO FPS
			/*stats = new Stats();
			stats.domElement.style.position = 'absolute';
			stats.domElement.style.top = '0px';
			$container.appendChild(stats.domElement);*/
			
			
			// Criar um objeto de imagem RGB para a leitura 2D do canvas
			// JSARToolKit uses objetos rastreadores para ler dados da imagem
			// É necessário setar canvas.changed = true em cada frame
			var raster = new NyARRgbRaster_Canvas2D(canvas);

			// FLARParam é utilizada pelo FLARToolKit para definir os parâmetros da câmara .
			//Aqui criamos um FLARParam para imagens com 320x240 pixels 
			var param = new FLARParam(320,240);

			//O FLARMultiIdMarkerDetector é o detector em tempo real do marcador
			// Ele detecta múltiplos ID markers. ID markers são marcadores especiais que codificam um número 
			var detector = new FLARMultiIdMarkerDetector(param, 120);

			// Para rastreamento conjunto de vídeo, setar continue mode para true. 
			// Em continue mode, o detector rastreia marcadores em vários frames.
			detector.setContinueMode(true);


			var markerRoots = {};

			//glMatrix matrizes são matrizes planas .
	        var tmp = new Float32Array(16);

			// Precisamos que a camera do Three,js  use o FLARParam matrix.
		    param.copyCameraMatrix(tmp, 10, 10000);
		    camera.projectionMatrix.setFromArray(tmp);
		    //camera.updateProjectionMatrix();
			
		    //NOTE: Precisa criar <canvas> para a  texture, não <video>, caso contrário irá retornar 1-frame lag
			// Para mostrar o video, primeiro cria a texture para isto
			var videoTex  = new THREE.Texture(canvas);
			var geometry  = new THREE.PlaneGeometry(2, 2, 0);
			var material  = new THREE.MeshBasicMaterial({
				map   : videoTex,
				depthTest : false,
				depthWrite  : false
			});
			var plane = new THREE.Mesh(geometry, material );

			// Cria a camera e a scene para o video plane e
			// add a camera e o video plane na scene.
			videoScene  = new THREE.Scene();
			videoCam  = new THREE.Camera();
			videoScene.add(plane);
			videoScene.add(videoCam);


			// Cria um objeto NyARTransMatResult para obter as matrizes de marker translation .
			var resultMat = new NyARTransMatResult();

			var num=0;
			var times = [];
			var markers = {};
			var emptyFloatArray = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];



			//Em cada frame faça o seguinte
	        setInterval(function()
	        {
	        	//Detecção dos marcadores
	            //Desenha a imagem no canvas do objeto de varredura (raster)
	            canvas.getContext('2d').drawImage(mainVideo,0,0 ,canvas.width, canvas.height);

	            //Avisa o objeto de varredura (raster) que o canvas mudou.
	            //Execute o detector no objeto de varredura
	            canvas.changed = true;

	            // Utiliza  marker detection com o objeto detector no objeto raster.
	            // O parametro threshold determina o valor do threshold que foi iniciado no começo do codigo
	            // ela transforma o frame de videm em uma imagem em preto e branco de 1 bit
	            //
	            //NOTE: O CANVAS PRECISA SER O MESMO TAMANHO DO RASTREADOR
	            //CASO CONTRÁRIO TRARÁ UM "Uncaught #<Object>" ERROR
	            //O detector retorna o número de marcadores localizados na imagem.
	            var markerCount = detector.detectMarkerLite(raster, threshold);



	            // Atualiza o video texture.
	            videoTex.needsUpdate = true;

	            //A última etapa é iterar os marcadores detectados e 
	            // obter suas matrizes de transformação. 
	            //Use as matrizes de transformação para colocar os objetos 3D sobre os marcadores.

	            // Vá até os marcadores detectados e obter as suas identificações e matrizes de transformação .
	            for (var idx = 0; idx < markerCount; idx++) {
	            	
	               // Obtem os dados do ID marker para o marcador atual (current marker).
	               // ID markers são tipo especial de marcadores que codificam um número.
	               // Os bytes para o número estão nos dados do ID marker
	               var id = detector.getIdMarkerData(idx);

	               // Le os bytes do pacote id (id packet)
	               var currId = -1;
	               // Este código trata apenas números de 32 bits ou mais curtos.
	               if (id.packetLength <= 4) {
	                  currId = 0;
	                  for (var i = 0; i < id.packetLength; i++) {
	                     currId = (currId << 8) | id.getPacketData(i);
	                  }
	               }

	               //Se este é um novo id, começa a segui-lo
	               if (markers[currId] == null) {
	                  markers[currId] = {};
	               }

	               // Pega a matriz de transformação (transformation matrix) para o marcador detectado (detected marker)
	               detector.getTransformMatrix(idx, resultMat);
	               markers[currId].age = 0;

	               // Copie o resultado da matriz (resultMat) dentro do objeto marcador rastreador.
	               markers[currId].transform = Object.asCopy(resultMat);
	            }

	            for (var i in markers) {
	               var r = markers[i];
	               if (r.age > 1) {
	                  delete markers[i];
	                  //SE PERDER O FOCO TIRA POR TANTO TEMPO mostrando na tela, 
	                  setInterval(function()
	                  {
	                     scene.remove(r.model); 
	                  }, 100);
	               }
	               r.age++;
	            }

	         

	            for (var i in markers) {
	            	markers[i].model = new THREE.Object3D();

	            	markers[i].model.matrixAutoUpdate = false;

	   				dae.position.set(positionX, positionY, positionZ);
					dae.scale.set(scaleX, scaleY, scaleZ);
					dae.rotation.set(rotationX, rotationY, rotationZ);


					markers[i].model.add(dae);
					//COLOCAR O RELOGIO NA TELA
					scene.add( markers[i].model);

				
				   // Copia o marcador de matriz (marker matrix) para o tmp matriz.
	               copyMarkerMatrix(markers[i].transform, tmp);
	               //Copia a matriz marcador (marker matrix) ao longo de seu objeto raiz marcador .
	               markers[i].model.matrix.setFromArray(tmp);

	               markers[i].model.matrixWorldNeedsUpdate = true;
	               
	            }

	            //RENDERIZA
	            animate();
	            

	        }, 15);


			window.addEventListener( 'resize', onWindowResize, false );
		}
	}

		
	function MyError(message) {
		alert(message);
		document.getElementById("mostraLoader").style.display = "none";

	}


	function detectorWebGl(){

		if (!Detector.webgl) {
			Detector.addGetWebGLMessage();
			throw new  MyError("Seu navegador parece não suportar WebGL");

		}
		
	}
	


	function getUserMedia(mainVideo){

		var videoSelect = document.querySelector('select#videoSource');

		var getUserMedia = function(t, onsuccess, onerror) {
			if (navigator.getUserMedia) {
			   return navigator.getUserMedia(t, onsuccess, onerror);
			} else if (navigator.webkitGetUserMedia) {
			   return navigator.webkitGetUserMedia(t, onsuccess, onerror);
			} else if (navigator.mozGetUserMedia) {
			   return navigator.mozGetUserMedia(t, onsuccess, onerror);
			} else if (navigator.msGetUserMedia) {
			   return navigator.msGetUserMedia(t, onsuccess, onerror);
			} else {
			   throw new MyError("Nenhuma implementação getUserMedia foi encontrada.");
			}
		};

		function gotSources(sourceInfos) {
		  for (var i = 0; i !== sourceInfos.length; ++i) {
		    var sourceInfo = sourceInfos[i];
		    var option = document.createElement('option');
		    option.value = sourceInfo.id;
			if (sourceInfo.kind === 'video') {
		    	option.text = sourceInfo.label || 'camera ' + (videoSelect.length + 1);
		    	videoSelect.appendChild(option);
		    } else {
		    	console.log('Some other kind of source: ', sourceInfo);
		    }
		  }
		}

		if (typeof MediaStreamTrack === 'undefined' ||
		    typeof MediaStreamTrack.getSources === 'undefined') {
			alert('Este navegador não suporta MediaStreamTrack.\n\nTeste no Google Chrome.');
		} else {
		  MediaStreamTrack.getSources(gotSources);
		}

		function successCallback(stream) {
		    window.stream = stream; 
		    mainVideo.src = window.URL.createObjectURL(stream);
		    mainVideo.play();

		}

		function errorCallback(error) {
			alert("Não foi possível acessar a webcam.");
		}

		function start() {
			if (!!window.stream) {
				mainVideo.src = null;
				window.stream.stop();
			}

			var videoSource = videoSelect.value;
			var constraints = {
				video: {
					optional: [{
						sourceId: videoSource
					}]
				}
			};

			getUserMedia(constraints,successCallback, errorCallback);

		}

		videoSelect.onchange = start;

		start();


	}

	function onWindowResize() {
		window.addEventListener('resize', function(){
		if(window.innerWidth < 767){
               renderer.setSize(320, 240);
            }else{
               renderer.setSize(640, 480);
            } 
		});
	}
			
	function animate() {

		renderer.autoClear = false;
        renderer.clear();
        renderer.render(videoScene, videoCam);
        renderer.render(scene, camera);

	}	


    //Utilizo uma matriz glMatrix de estilo como intermediário .
   //Assim, a primeira etapa é criar uma função para converter uma matriz glMatrix num Three.js Matrix4 .
   THREE.Matrix4.prototype.setFromArray = function(m) {
      return this.set(
         m[0], m[4], m[8], m[12],
         m[1], m[5], m[9], m[13],
         m[2], m[6], m[10], m[14],
         m[3], m[7], m[11], m[15]
      );
   };


     //Este é o código para copiar as matrizes do JSARToolKit sobre as matrizes do glMatrix 
    function copyMarkerMatrix(mat, cm) {
		cm[0] = mat.m00;
		cm[1] = -mat.m10;
		cm[2] = mat.m20;
		cm[3] = 0;
		cm[4] = mat.m01;
		cm[5] = -mat.m11;
		cm[6] = mat.m21;
		cm[7] = 0;
		cm[8] = -mat.m02;
		cm[9] = mat.m12;
		cm[10] = -mat.m22;
		cm[11] = 0;
		cm[12] = mat.m03;
		cm[13] = -mat.m13;
		cm[14] = mat.m23;
		cm[15] = 1;
    }