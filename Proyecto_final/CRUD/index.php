<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class=" p-5">
  <div class="row">
  <div >
      <div class="card card-body">
        
        <a href="create.php" class="btn btn-crear botonB ">
                <i>Crear Empleado</i>
              </a>
      </div>
    </div>
    <div >
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
					<?php
					require_once "db.php";
					$sql = "SELECT * FROM Empleado";
					$query = mysqli_query($conexion, $sql);
					while ($row = mysqli_fetch_array($query)) { ?>
						<tr>
							<td><span id="id_empleado"><?php echo $row['id_empleado']; ?></span></td>
							<td><span id="nombre"><?php echo $row['nombre']; ?></span></td>
							<td><span id="apellido_p"><?php echo $row['apellido_p']; ?></span></td>
                            <td><span id="apellido_m"><?php echo $row['apellido_m']; ?></span></td>
                            <td><span id="correo"><?php echo $row['correo']; ?></span></td>
                            <td><span id="telefono"><?php echo $row['telefono']; ?></span></td>
							<td>
								
              <a href="edit.php?id_empleado=<?php echo $row['id_empleado']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?id_empleado=<?php echo $row['id_empleado']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    
  </div>
</main>

<?php include('includes/footer.php'); ?>
