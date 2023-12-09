<!-- Pagina para ver la lista de productos y gestionar cada uno-->
<?php
include("./utilidad/conexion.php");
$conexion = conectar_bd();
$query = "SELECT nombre_producto, fabricante, id_producto FROM producto;";
$resultado = mysqli_query($conexion, $query);
mysqli_close($conexion);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleP.css">
    <link rel="stylesheet" type="text/css" href="./static/styles/styles.css">
    <link rel="stylesheet" href="./static/styles/bootstrap.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <title>Productos</title>
</head>
<body>
<!--IMPORTAR ECHARTS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.3/echarts.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #010315;">
        <div class="container-fluid">
            <a class="navbar-brand m-0 p-0" href="#">
                <img src="./images/logocompleto.png" alt="" width="150px">
            </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              </li>
            </ul>

            <form class="d-flex mx-auto">
                <input class="form-control busqueda me-15" type="search" placeholder="¿Qué acción quieres realizar?" aria-label="Search">
                <button class="btn btn-danger boton_buscar" type="submit">Buscar</button>
            </form>


            <button id="btnRegistro" type="button" class="btn mi-boton-custom me-5">Iniciar sesión</button>

            <a class="navbar-brand" href="#">
                <img src="./images/compra.png" alt="" width="35" height="35" class="d-inline-block align-text-top carrito">
              </a>

          </div>

      

        </div>
</nav>
<!-- cuerpo -->
    <div class="head">
    <label><h1>Lista de Productos</h1></label>
    <!-- Este es el boton para volver a la pagina de administracion-->
    <label><a href="../principal_admin/index.html" class="href-boton">Volver</a>
    <!-- Este es el boton para ir a la pagina para agregar un nuevo producto-->
    <a href="nuevo_producto.php" class="href-boton">Agregar nuevo</a></label>
</div>
    <ul>
        <!-- Genera la lista de productos y sus respectivos botones para ver la informacion completa, modificarlos o borrarlos-->
        <?php
        while($registro = mysqli_fetch_assoc($resultado))
        {
            ##Info (nombre y fabricante)
            echo "<li class='producto'><label><h1>".$registro["nombre_producto"]." (".$registro["fabricante"].") </h1></label>";
            ##Boton de ver
            echo "<a href='ver_producto.php?productoid=".$registro['id_producto']."'class='href-boton'>Ver Mas</a>";
            ##Boton de modificar
            echo "<a href='modificar_producto.php?productoid=".$registro['id_producto']."'class='href-boton'>Modificar</a>";
            ##Boton de eliminar
            echo "<a href='./utilidad/eliminar_producto.php?productoid=".$registro['id_producto']."'class='href-boton'>Eliminar</a></li>";
        }
        ?>
    </ul>
    <div class="footer-basic">
      <footer>
          <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Services</a></li>
              <li class="list-inline-item"><a href="#">About</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
          </ul>
          <p class="copyright">Musich & Merch © 2018</p>
      </footer>
    </div>
    <script src="./static/scripts/bootstrap.js"></script>
    <script src="./static/scripts/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>