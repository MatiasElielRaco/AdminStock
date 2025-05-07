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
    <div class="dashboard__tabla">
      <h2>Productos</h2>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Stock</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Laptop</td>
            <td>Electrónica</td>
            <td>300</td>
            <td>$1000</td>
          </tr>
          <tr>
            <td>Smartphone</td>
            <td>Electrónica</td>
            <td>20</td>
            <td>$800</td>
          </tr>
          <tr>
            <td>Desk Chair</td>
            <td>Muebles</td>
            <td>450</td>
            <td>$150</td>
          </tr>
          <tr>
            <td>Coffee Table</td>
            <td>Electrónica</td>
            <td>0</td>
            <td>$300</td>
          </tr>
        </tbody>
      </table>
    </div>

</main>