<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if($id){
    include('conexion.php');
    $consulta = "delete from usuarios where id=$id";
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo eliminar el registro');
    }
}
header('Location: lista.php');