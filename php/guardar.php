<?php
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

$servername = "localhost";
$database = "id14617009_form1";
$username = "id14617009_educomer";
$password = "]~WIR83R3g|O5bYf";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

	
$sql = "INSERT INTO datos_p(n1, n2, n3, n4, gen, dat, eda, telef, emai, btp, inst, pub, qub) VALUES ('$no1','$no2','$no3','$no4','$gene1','$fech','$ed','$telf','$corre','$btpp','$inst','$pub11','$qub11')";
?>