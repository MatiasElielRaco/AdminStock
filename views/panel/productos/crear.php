<main class="panel">
  <h2 class="panel__heading">Crear Producto</h2>
  <p class="panel__texto">Agregá un nuevo producto al inventario</p>
    <?php 
        include_once __DIR__ . "/../../templates/alertas.php";
    ?>
        <form class="formulario formulario__productos" action="/dashboard/productos/crear" method="POST">

            <?php include_once __DIR__ . "/formulario.php"; ?>

            <input type="submit" value="Crear Producto" class="formulario__submit">

        </form>
</main>