



<?php
	// requerimos nuestro controlador del sistema
	require_once "RegistroFunciones.php";

	if ( isLogged() ) {
		$user = $_SESSION['userLogged'];
	}     ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/_navbar.css">
		<link rel="stylesheet" href="/css/styles.css">
	</head>
	<body>

	</body>
</html>
<nav class="navbar-ppal">
	<ul>
		<li>
			<!-- Logo -->
			<section class="containerLogo">
				<img src="img/logo-lienis.png" alt="logotipo" class="logo" style="width:80px; height:80px;">
				<section class="slogan">
					<h4>La vie est belle, vivre avec le style Lienis. </h4 style="font-size: 15px; color: RGB(46, 139, 87);">
				</section>
			</section> </li>
		<li><a href="index.php">Inicio</a></li>
		<li class="producto"><a href="#">Productos</a></li>
		<div class="dropdown-menu" aria-labelledby="dropNavBar">
			<a class="dropdown-item" href="productos.php">Pulseras</a>
			<a class="dropdown-item" href="productos.php">Collares</a>
		</div>
		<li class="buscador"><a href="#"> <span><i class="fa fa-search"></i></span>
				<input class="inputs" type="search" id="search" placeholder="Buscar..." / style= "margin-button: 5px;"></a>
		</li> </ul>
</nav>
<nav class = "navbar-login">
	<ul> <li>
			<a href="#" class="carro"><i class="fas fa-shopping-cart"></i></a>
		</li>
		<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="<?= $usuario['imagenFinal']; ?>" width="50" style="border-radius: 50%; background-color: #ffffff">
				</a>
					<div class="dropdown-menu" aria-labelledby="dropNavBar">
					<a class="dropdown-item" href="perfil_usuario.php">Mi perfil</a>
					<a class="dropdown-item" href="logout.php">Salir</a>
				</div>
			</li>  </ul>
</nav>

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
					              <!--<li><a href="quienesSomos.php"><b>Quienes Somos</b></a></li>-->
					              <div class="dropdown"> <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><b>Productos</b>
					              </button>
					          <div class="dropdown-menu" aria-labelledby="dropNavBar">
					          <ul>
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
			</ul>
		</div>
	</div>
	<?php include_once "_logo.php" ?>
	<?php endif; ?>
</nav>
