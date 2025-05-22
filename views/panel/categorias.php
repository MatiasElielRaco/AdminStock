<main class="panel">
  <h2 class="panel__heading">Crear Categoría</h2>
  <p class="panel__texto">Agregá nuevas categorías y gestioná las existentes</p>

    <?php 
      require_once __DIR__ . "/../templates/alertas.php";
    ?>

  <form class="formulario formulario__productos">
    <div class="formulario__campo">
      <label for="categoria" class="formulario__label">Nombre de la Categoría</label>
      <input type="text" class="formulario__input" name="categoria" id="categoria" placeholder="Ej: Electrónica">
    </div>
    <button type="button" id="boton-categoria" class="formulario__submit">Guardar Categoria</button>
  </form>

  <section class="categorias">
    <h3 class="categorias__heading">Categorías existentes</h3>
    <div class="categorias__lista">
      <!-- Estas categorías vendrán del backend -->
       <?php if ($categorias) { ?>
        <?php foreach ($categorias as $categoria) : ?>
          <div class="categoria">
            <span class="categoria__nombre"><?php echo $categoria->categoria; ?></span>
              <input type="hidden" name="id" value="<?php echo $categoria->id; ?>">
              <button class="categoria__eliminar" type="submit">Eliminar</button>
          </div>
        <?php endforeach; ?>
      <?php } else {  ?>
            <h3 class="categoria__vacio">No has creado ninguna categoria aún</h3>
        <?php } ?>
    </div>
  </section>
</main>
