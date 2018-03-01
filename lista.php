<?php
include('conexion.php');
$consulta = 'select * from usuarios';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table>
<tr><th>Nombres</th><th>Apellido paterno</th><th>Apellido materno</th><th>Correo</th><th colspan="2">Accion</th></tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['nombres']}</td>";
    $tabla.="<td>{$registro['app']}</td>";
    $tabla.="<td>{$registro['apm']}</td>";
    $tabla.="<td>{$registro['correo']}</td>";
    $tabla.="<td><a href=borrar.php?id={$registro['id']}>Borrar</a></td>";
    $tabla.="<td><a href=editar.php?id={$registro['id']}>Editar</a></td>";
    $tabla.='</tr>';
}
$tabla.='</table>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>lista</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Lista de usuarios</div>
        <div class="contenido">
        <div class="tabla">
        <?php echo $tabla; ?>
        <p>
        <a href="registrar.php">Registrar</a>
        </p>
        </div>

        </div>
    </div>
</body>
</html>