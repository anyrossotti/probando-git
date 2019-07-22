<?php require_once "RegistroFunciones.php" ?>
<?php require_once "listadoProductos.php"; ?>

<?php require_once "_navbar.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title> Detalle del Producto</title>
	</head>
	<body>
	<!-- Productos -->
	<div class="container" style="margin-top:30px; color: RGB(46, 139, 87);">
		<?php $idEnGet = $_GET['id'];

			if ( $idEnGet <= count($productos) ) {
				$productoEncontrado = $productos[$idEnGet - 1];
			} else {
				echo "Producto NO encontrado";
			}
		?>
		<div>
			<img src="img/<?= $productoEncontrado["imagen"] ?>" alt="" style="width: 50%;">
		</div>
		<h2> <?= $productoEncontrado["nombre"] ?> </h2>
<div class="descripcion">
	<p> <?= $productoEncontrado["descripcion"] ?> </p>
</div>
	</div>

</body>
</html>
