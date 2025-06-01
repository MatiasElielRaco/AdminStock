<main class="panel">
  <h2 class="panel__heading">Editar Producto</h2>
  <p class="panel__texto">Actualiza el producto del inventario</p>
    <?php 
        include_once __DIR__ . "/../../templates/alertas.php";
    ?>
        <form class="formulario formulario__productos" action="" method="POST">

            <?php include_once __DIR__ . "/formulario.php"; ?>

            <input type="submit" value="Guardar Cambios" class="formulario__submit">

        </form>
</main>