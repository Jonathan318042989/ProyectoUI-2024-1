<?php
function write_to_console($data) {

  $console = 'console.log(' . json_encode($data) . ');';
  $console = sprintf('<script>%s</script>', $console);
  echo $console;
 }

require_once "db.php";
$nombre = '';
$apellido_p = '';
$apellido_m = '';
$correo = '';
$telefono = '';
$id = '';

if  (isset($_GET['id_empleado'])) {
  $id = $_GET['id_empleado'];
  $query = "SELECT * FROM Empleado WHERE id_empleado='$id'";
  $resultado = mysqli_query($conexion, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $nombre = $row['nombre'];
    $apellido_p = $row['apellido_p'];
    $apellido_m = $row['apellido_m'];
    $correo = $row['correo'];
    $telefono = $row['telefono'];
  }
}

if (
    isset($_POST['update'])&&
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

    $intID = (int) $id;
    $sql = "UPDATE Empleado SET nombre='$nombre' WHERE id_empleado = '$intID'";
    if (mysqli_query($conexion, $sql)) {
      header("location: index.php");
            exit();
    }else {
      echo "Error al actualizar";
  }

    mysqli_close($conexion);
}
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id_empleado']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualiza el nombre">
        </div>
        <div class="form-group">
          <input name="apellido_p" type="text" class="form-control" value="<?php echo $apellido_p; ?>" placeholder="Actualiza el apellido paterno">
        </div>
        <div class="form-group">
          <input name="apellido_m" type="text" class="form-control" value="<?php echo $apellido_m; ?>" placeholder="Actualiza el apellido materno">
        </div>
        <div class="form-group">
          <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" placeholder="Actualiza el correo">
        </div>
        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualiza el telefono">
        </div>
        <button class="btn-success" name="update">Actualiza</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
