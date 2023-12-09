<?php
## Esta pagina se encarga unicamente del query para eliminar un producto. No es necesario cambiarlo.
include("conexion.php");

if(empty($_GET["productoid"]))
{
    header("Location:../lista_productos.php");
    return;
}
$conexion = conectar_bd();
$query = "DELETE FROM producto WHERE id_producto = ".$_GET['productoid'].";";
$exito = mysqli_query($conexion, $query);

if($exito)
{
    header("Location:../lista_productos.php");
}
else
{
    header("Location:../lista_productos.php");
}
?>