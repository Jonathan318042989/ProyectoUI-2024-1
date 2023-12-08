<?php

include("db.php");

if(isset($_GET['id_empleado'])) {
  $id = $_GET['id_empleado'];
  $query = "DELETE FROM Empleado WHERE id_empleado = $id";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Empleado eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
