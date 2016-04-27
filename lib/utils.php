<?php

function funAviso($de_mensagem=null,$cd_tipo=null){
	echo "<div id='ms_aviso' >";	
	if(trim($cd_tipo)=="vm")
	{
		echo "<div id='aviso' class='alert alert-block alert-error aviso' style='display:block'>";
			echo "<button type='button' class='close' data-dismiss='alert' onclick='f_fechar_aviso()'>X</button>";
			echo "<p>".$de_mensagem."</p>";
		echo "</div>";
	}else if(trim($cd_tipo)=="am")
	{
		echo "<div id='aviso' class='alert alert-block aviso' style='display:block'>";
			echo "<button type='button' class='close' data-dismiss='alert' onclick='f_fechar_aviso()'>X</button>";
			echo "<p>".$de_mensagem."</p>";
		echo "</div>";
	}else if(trim($cd_tipo)=="vd")
	{
		echo "<div id='aviso' class='alert alert-block alert-success aviso' style='display:block'>";
			echo "<button type='button' class='close' data-dismiss='alert' onclick='f_fechar_aviso()'>X</button>";
			echo "<p>".$de_mensagem."</p>";
		echo "</div>";
	}
	else if(trim($cd_tipo)=="az")
	{
		echo "<div id='aviso' class='alert alert-block alert-info aviso' style='display:block'>";
			echo "<button type='button' class='close' data-dismiss='alert' onclick='f_fechar_aviso()'>X</button>";
			echo "<p>".$de_mensagem."</p>";
		echo "</div>";
	}
	echo "</div>";	
	echo "<script type='text/javascript'>";
	echo " setTimeout(function(){";
	echo "	document.getElementById('aviso').style.display='none';";
	echo " },4000);";
	echo "</script>";
}