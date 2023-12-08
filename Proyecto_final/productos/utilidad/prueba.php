<?php
## Pagina de prueba para comprobar la conexion al servidor
include("conexion.php");

$conexion_bd = conectar_bd();
echo $conexion_bd;
mysqli_close($conexion_bd);
?>