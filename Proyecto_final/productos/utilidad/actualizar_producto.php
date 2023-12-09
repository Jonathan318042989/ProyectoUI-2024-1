<?php
## Esta pagina se encarga únicamente del query para actualizar el producto. No necesita nada mas.
include("conexion.php");

if(empty($_POST["id_producto"]) || empty($_POST["nombre_producto"]) || empty($_POST["fabricante"])||empty($_POST["categoria"])||empty($_POST["descripcion"])||empty($_POST["inventario"])||empty($_POST["precio"]))
{
    header("Location:../lista_productos.php");
    return;
}
$conexion = conectar_bd();
$query = "UPDATE producto SET fabricante = '".$_POST['fabricante']."
',nombre_producto = '".$_POST['nombre_producto']."',
categoria = '".$_POST['categoria']."',
descripcion = '".$_POST['descripcion']."',
inventario = ".$_POST['inventario'].",
precio = ".$_POST['precio']." 
WHERE id_producto = ".$_POST["id_producto"].";";
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