<main class="dashboard">

    <h1 class="dashboard__heading"><?php echo $titulo; ?></h1>
    
    <!-- Cards -->
    <div class="dashboard__stats">
      <div class="dashboard__stats--stat">
        <h3>150</h3>
        <p>Productos</p>
      </div>
      <div class="dashboard__stats--stat">
        <h3>24,300</h3>
        <p>En stock</p>
      </div>
      <div class="dashboard__stats--stat dashboard__stats--stat-alert">
        <h3>5</h3>
        <p>Sin stock</p>
      </div>
      <div class="dashboard__stats--stat dashboard__stats--stat-warning">
        <h3>8</h3>
        <p>Por agotarse</p>
      </div>
    </div>
    
    <!-- Tabla -->
    <div class="tabla">
      <h2>Productos</h2>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Stock</th>
            <th>Precio</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($productos as $producto) : ?>
            <tr>
              <td><?php echo($producto->nombre); ?></td>
              <td><?php echo($producto->categoria); ?></td>
              <td><?php echo($producto->cantidad); ?></td>
              <td>$<?php echo intval($producto->precio); ?></td>
              <td class="tabla__acciones">
                <a class="tabla__accion tabla__accion--editar" href="/dashboard/productos/editar?id=<?php echo($producto->id)?>">Editar</a>
                <form method="POST" action="/dashboard/productos/eliminar">
                    <input type="hidden" name="id" value="<?php echo($producto->id); ?>">
                    <button class="tabla__accion tabla__accion--eliminar" type="submit">Eliminar</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

</main>