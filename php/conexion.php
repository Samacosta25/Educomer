<?php
	$con=mysql_connect('localhost','id14617009_root','M$l>/Y(\8zYeK86k') or die("<h2>No se encuentra el servidor</h2>");
	if ($con) {
		echo "No se pudo conectar con el servidor";
	}else{
		$base=mysql_select_db('id14617009_form1');
		if (!$base) {
		echo "NO se encontro la base de datos";
		}
	}
	$no1=$POST['1'];
	$no2=$POST['2'];
	$no3=$POST['3'];
	$no4=$POST['4'];
	$gene1=$POST['gene'];
	$fech=$POST['fecha'];
	$ed=$POST['edad'];
	$telf=$POST['tele'];
	$corre=$POST['correo'];
	$btpp=$POST['btp1'];
	$inst=$POST['instituto'];
	$pub11=$POST['pub1'];
	$qub11=$POST['qub1'];
	$sql=mysql_query("INSERT INTO datos_p VALUES('$no1', '$no2', '$no3', '$no4', '$gene1', '$fech', '$ed', '$telf', '$corre', '$btpp', '$inst', '$pub11', '$qub11')",$con) or die("<h2>Error Guardando los datos</h2>");
	if ($sql) {
		echo "Hubo algún error";
	}else{
		echo "Datos guardados correctamente";
	}
?>
