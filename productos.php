<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta <charset="utf-8">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/perfil_usuario.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Productos</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
      <!-- cabecera -->
    <header class="cabecera">
      <?php require_once 'RegistroFunciones.php'; ?>
      <?php require_once '_navbar.php'; ?>
</header>

<!-- productos -->
</section >
<div class="products-container">
  <?php require_once "listadoProductos.php"?>
  <?php foreach ($productos as $unProducto) : ?>
  <div class="lista-productos" style="width: 50%;">
    <div class="unProducto">
      <img src="img/<?= $unProducto["imagen"] ?>" class="card-img-top" alt="imagen del producto">
      <div class="card-body">
        <h5 class="card-title"><?= $unProducto["nombre"] ?></h5>
        <a href="detalle-producto.php?id=<?php echo $unProducto["id"]; ?>" class="btn btn-success">Más info...</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

<?php require_once "_footer.php" ?>

</div>
</div>
</div>
  </body>
</html>
