<!-- Pagina para agregar un producto nuevo-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleP.css">
    <link rel="stylesheet" type="text/css" href="./static/styles/styles.css">
    <link rel="stylesheet" href="./static/styles/bootstrap.css"/>
    <title>Agregar</title>
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
    <label><h1>Agregar nuevo producto</h1></label>
    <label><a class="href-boton" href="lista_productos.php">Cancelar</a></label>
</div>
    <div class="caja-producto">
    <form action="./utilidad/agregar_producto.php" method="POST" name="nuevo_prod">
        <ul>
        <li><b>Nombre:      </b><input type="text" name="nombre_producto" placeholder="Nombre del producto"></li>
        <li><b>Fabricante:  </b><input type="text" name="fabricante" placeholder="Fabricante"></li>
        <li><b>Categoria:   </b><input type="text" name="categoria" placeholder="Categoria"></li>
        <li><b>Descripcion: </b><textarea name="descripcion" rows="5">Descripcion del producto.</textarea></li>
        <li><b>Inventario:  </b><input type="number" name="inventario" placeholder="1"></li>
        <li><b>Precio:      </b><input type="number" name="precio" placeholder="0.00"></li>
        <li><input class ="href-boton" type="submit" name="Agregar_producto" value="Agregar Producto"></li>
</ul>
    </form>
</div>
<!-- footer -->
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