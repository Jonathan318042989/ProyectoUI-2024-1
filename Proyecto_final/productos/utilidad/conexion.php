<?php
## Esta pagina se encarga de la conexion a la base de datos. Otras paginas referencian a esta para la conexion.
function conectar_bd()
{
    #Modificar con los datos necesarios del servidor sql
    $servidor = "localhost";
    $nombrebd = "tienda";
    $usuario = "root";
    $contraseña = "root";

    ## Cambiar 3307 por el puerto que utilice el servidor de sql
    $conexion = new mysqli($servidor, $usuario, $contraseña, $nombrebd, '3307') or die("connection failed");;
    
    return $conexion;
}

?>