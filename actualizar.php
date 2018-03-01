<?php

$nombres = !empty($_POST['c1']) ? $_POST['c1'] : '';
$app = !empty($_POST['c2']) ? $_POST['c2'] : '';
$apm = !empty($_POST['c3']) ? $_POST['c3'] : '';
$correo = !empty($_POST['c4']) ? $_POST['c4'] : '';
$nlinea =  !empty($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($nombres&&$app&&$apm&&$correo){
	include('conexion.php');
	$registro = "UPDATE usuarios set nombres='$nombres',app='$app',apm='$apm',correo='$correo' 
	WHERE id='$nlinea'";
	$resultado = mysqli_query($conexion,$registro);

}
header('Location: lista.php');