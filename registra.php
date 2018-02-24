<?php
$nombres = !empty($_POST['c1']) ? $_POST['c1'] : '';
$app = !empty($_POST['c2']) ? $_POST['c2'] : '';
$apm = !empty($_POST['c3']) ? $_POST['c3'] : '';
$correo = !empty($_POST['c4']) ? $_POST['c4'] : '';

if($nombres&&$app&&$apm&&$correo){
    include('conexion.php');
    $consulta=<<<FIN
    insert into usuarios
    (nombres,app,apm,correo)
    values
    ('$nombres','$app','$apm','$correo')
FIN;
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
    }
}
header('Location: lista.php');