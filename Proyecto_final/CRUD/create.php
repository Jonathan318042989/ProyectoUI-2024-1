<?php

require_once "db.php";

if (
    isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
    isset($_POST["apellido_p"]) && !empty($_POST["apellido_p"]) &&
    isset($_POST["apellido_m"]) && !empty($_POST["apellido_m"]) &&
    isset($_POST["correo"]) && !empty($_POST["correo"]) &&
    isset($_POST["telefono"]) && !empty($_POST["telefono"]) 
) {

    $nombre = $_POST["nombre"];
    $apellido_p = $_POST["apellido_p"];
    $apellido_m = $_POST["apellido_m"];
    $correo = $_POST["correo"];
    $tel = $_POST["telefono"];
    $telefono = (string)$tel;


    $sql = "INSERT INTO Empleado(nombre, apellido_p, apellido_m, correo, telefono) values (?,?,?,?,?)";

    if ($statement = mysqli_prepare($conexion, $sql)) {

        mysqli_stmt_bind_param($statement, "sssss", $nombre, $apellido_p, $apellido_m, $correo, $telefono);

        if (mysqli_stmt_execute($statement)) {
            header("location: index.php");
            exit();
        } else {
            echo "Error al actualizar";
        }
        mysqli_stmt_close($statement);
    }

    mysqli_close($conexion);
}
?>
    <?php include('includes/header.php'); ?>
<div class="container p-4">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 >Agregar empleado</h3>
                </div>
                <div class="modal-body">
                    <form action="create.php" method="post">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" id="apellido_p" name="apellido_p" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Apellido Materno</label>
                            <input type="text" id="apellido_m" name="apellido_m" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" id="correo" name="correo" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number" id="telefono" name="telefono" class="form-control">

                        </div>
                        <br><br>

                        <input type="submit" class="btn btn-primario" value="Agregar">
                        <a href="index.php" class="btn btn-cancelar">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>