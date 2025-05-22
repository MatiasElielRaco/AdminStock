<main class="panel">
  <h2 class="panel__heading">Crear Producto</h2>
  <p class="panel__texto">Agregá un nuevo producto al inventario</p>

  <form class="formulario formulario__productos" action="/productos/crear" method="POST">
    <div class="formulario__campo">
      <label for="nombre" class="formulario__label">Nombre</label>
      <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Ej: Laptop">
    </div>
    <div class="formulario__campo">
      <label for="categoria" class="formulario__label">Categoría</label>
      <select name="categoria" id="categoria" class="formulario__input">
        <option value="">-- Seleccionar --</option>
        <!-- Opciones cargadas desde backend -->
      </select>
    </div>
    <div class="formulario__campo">
      <label for="stock" class="formulario__label">Stock</label>
      <input type="number" class="formulario__input" name="stock" id="stock" placeholder="Ej: 100">
    </div>
    <div class="formulario__campo">
      <label for="precio" class="formulario__label">Precio</label>
      <input type="number" class="formulario__input" name="precio" id="precio" step="0.01" placeholder="Ej: 1254,60">
    </div>
    <input type="submit" value="Guardar Producto" class="formulario__submit">
  </form>
</main>
