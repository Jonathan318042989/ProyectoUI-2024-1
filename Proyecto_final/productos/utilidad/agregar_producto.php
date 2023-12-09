<?php
## Esta pagina se encarga unicamente del query para agregar productos nuevos. No necesita nada mas.
include("conexion.php");

if(empty($_POST["nombre_producto"]) || empty($_POST["fabricante"])||empty($_POST["categoria"])||empty($_POST["descripcion"])||empty($_POST["inventario"])||empty($_POST["precio"]))
{
    header("Location:../nuevo_productos.php");
    return;
}
$conexion = conectar_bd();
$query = "INSERT INTO producto(fabricante, nombre_producto, categoria, descripcion, inventario, precio)
            VALUES('".$_POST['fabricante']."','".$_POST['nombre_producto']."','".$_POST['categoria']."','".$_POST['descripcion']."',".$_POST['inventario'].",".$_POST['precio'].");";
$exito = mysqli_query($conexion, $query);

if($exito)
{
    header("Location:../lista_productos.php");
}
else
{
    header("Location:../nuevo_productos.php");
}
?>