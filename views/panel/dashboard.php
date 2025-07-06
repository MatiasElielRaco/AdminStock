<main class="dashboard">

    <h1 class="dashboard__heading"><?php echo $titulo; ?></h1>
    
    <!-- Cards -->
    <div class="dashboard__stats">
      <div class="dashboard__stats--stat">
        <h3><?php echo $total; ?></h3>
        <p>Productos</p>
      </div>
      <div class="dashboard__stats--stat">
        <h3><?php echo $disponible; ?></h3>
        <p>En stock</p>
      </div>
      <div class="dashboard__stats--stat dashboard__stats--stat-alert">
        <h3><?php echo $sin; ?></h3>
        <p>Sin stock</p>
      </div>
      <div class="dashboard__stats--stat dashboard__stats--stat-warning">
        <h3><?php echo $bajo; ?></h3>
        <p>Por agotarse</p>
      </div>
    </div>
    
    <!-- Tabla -->
    <div class="tabla">
      <h2 class="tabla__heading">Productos</h2>
      <div class="tabla__contenedor">
        <input class="tabla__busqueda" id="busqueda" type="text" placeholder="Buscar..." value="<?php echo $_GET['buscar'] ?? ''; ?>">
        <div class="tabla__filtros">
            <div class="tabla__filtros--filtro">
              <select class="tabla__filtros--filtro-select" id="filtroCategoria">
                  <option value="">Todas las categorías</option>
                  <?php foreach($categorias as $categoria): ?>
                      <option value="<?php echo $categoria->categoria; ?>" 
                          <?php echo (($_GET['categoria'] ?? '') === $categoria->categoria) ? 'selected' : ''; ?>>
                          <?php echo $categoria->categoria; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
            </div>
            <div class="tabla__filtros--filtro">
              <select id="filtroStock" class="tabla__filtros--filtro-select">
                  <option value="" <?php echo empty($_GET['stock']) ? 'selected' : ''; ?>>Todo</option>
                  <option value="sin" <?php echo ($_GET['stock'] ?? '') === 'sin' ? 'selected' : ''; ?>>Sin stock</option>
                  <option value="bajo" <?php echo ($_GET['stock'] ?? '') === 'bajo' ? 'selected' : ''; ?>>Por agotarse</option>
                  <option value="disponible" <?php echo ($_GET['stock'] ?? '') === 'disponible' ? 'selected' : ''; ?>>En stock</option>
              </select>
            </div>
            <div class="tabla__filtros--filtro">
              <input class="tabla__filtros--filtro-input" type="number" id="precioMin" placeholder="Precio mínimo" value="<?php echo $_GET['min'] ?? ''; ?>">
              <input class="tabla__filtros--filtro-input" type="number" id="precioMax" placeholder="Precio máximo" value="<?php echo $_GET['max'] ?? ''; ?>">
            </div>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Categoría</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($productos as $producto) : ?>
            <tr
                data-nombre="<?php echo strtolower($producto->nombre); ?>"
                data-categoria="<?php echo strtolower($producto->categoria); ?>"
                data-stock="<?php echo intval($producto->cantidad); ?>"
                data-precio="<?php echo intval($producto->precio); ?>"
            >
              <td>
                <?php echo($producto->nombre); ?>
              </td>
              <td>
                <?php echo($producto->categoria); ?>
              </td>
              <td>
                <?php echo($producto->cantidad); ?>
              </td>
              <td>
                <strong>$</strong><?php echo intval($producto->precio); ?>
              </td>
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
            <?php echo $paginacion ?>
</main>