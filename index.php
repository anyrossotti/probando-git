<?php include_once "RegistroFunciones.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta <charset="utf-8">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/perfil_usuario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lienis Desing</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
      <!-- cabecera -->
    <header class="cabecera">

<?php require_once '_navbar.php'; ?>

</header>

<!-- carousel -->

<div class="container-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
<a href="https://www.losandes.com.ar/article/consejos-para-combinar-maquillaje-y-ropa-con-exito" target="_blank"><img src="img\slide1.jpg" alt="Maquillaje y accesorios" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="http://comocombinar.com/como-combinar-la-ropa-y-los-accesorios-consejos-y-trucos-para-combinar-mejor/" target="_blank"><img src="img\slide2.jpg" alt="Algunos consejos" style="width:100%;"></a>
      </div>

      <div class="item">
  <a href="https://genial.guru/inspiracion-mujer/10-reglas-claves-a-la-hora-de-elegir-accesorios-313510/" target="_blank"><img src="img\slide3.jpg" alt="Reglas claves para elegir accesorios" style="width:100%;"></a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- productos -->
<div class="tendencias">
  <h2>TENDENCIAS 2019</h2>
</div>
</section >
<div class="products-container">
    <div class="lista-productos">
      <div class="unProducto">
        <img src="img/img_1353.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1354.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1355.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1356.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1362.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
    </div>
  </div>

<?php require_once "_footer.php" ?>

</div>
</div>
</div>
  </body>
</html>



<?php if ( !isLogged() ): ?>
 <nav class="nav-login">
            <ul>
                <li><a href="registro.php"><b>Registro</b></a></li>
                <li><a href="login.php"><b>Login</b></a></li>
            </ul>
          </nav>
          <div class="main-nav">
          <nav>
            <ul>
              <!--<li><a href="perfil_usuario.php"><b>Quienes Somos</b></a></li>-->
              <div class="dropdown"> <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><b>Productos</b>
              </button>
          <div class="dropdown-menu" aria-labelledby="dropNavBar">
          <ul>
                <li><a href="productos.php" class="dropdown-item"><option value="ani">Anillos</a></option></li>
                <li><a href="productos.php" class="dropdown-item"><option value="coll">Collares</a></option></li>
                <li><a href="productos.php" class="dropdown-item"><option value="pul">Pulseras</a></option></li>
                <li><a href="productos.php" class="dropdown-item"><option value="zar">Zarcillos</a></option></li>
                <li><a href="productos.php" class="dropdown-item"><option value="mini">Minibags</a></option></li>
                <li><a href="productos.php" class="dropdown-item"><option value="masc">Para Ellos</a></option></li>
              </ul>
            </div>
               <li><a href="PregFrecuentesF.php"><b>Preguntas Frecuentes</b></a></li>
              </ul>
          </nav></div>

<?php endif; ?>
