<main class="main">
    <div class="main__contenedor">
        <div <?php echo aos_animacion(); ?> class="main__contenido">
            <h2 class="main__contenido--titulo">Administra tu inventario <br> de forma ágil y segura</h2>
            <p class="main__contenido--texto">Accede al sistema para controlar el inventario <br> de tu negocio</p>
            <a href="/registro" class="main__contenido--boton">Registrate</a>
        </div>
    
        <picture>
            <source srcset="build/img/stock.avif" type="image/avif">
            <source srcset="build/img/stock.webp" type="image/webp">
            <img <?php echo aos_animacion(); ?> loading="lazy" width="100" height="100" src="build/img/stock.png" alt="Dashboard AdminStock">
        </picture>
    </div>
</main>

<section class="somos">
  <h2 class="somos__heading">¿Qué es AdminStock?</h2>
  <p class="somos__texto">
      AdminStock es una aplicación web diseñada para simplificar y optimizar la gestión de inventario de pequeños y medianos negocios. Nuestro objetivo es 
      brindarte desde un panel de control moderno y fácil de usar una herramienta intuitiva, segura y eficiente que te permita llevar el control de tus productos en tiempo real.
  </p>
</section>

<section class="modulos contenedor">
  <h2 class="modulos__titulo">Características</h2>
  <div class="modulos__grid">
    <div class="modulo" <?php echo aos_animacion(); ?>>
      <div class="modulo__icono">
        <img src="build/img/cart.svg" alt="Icono productos" />
      </div>
      <h3 class="modulo__nombre">Productos</h3>
      <p class="modulo__descripcion">Gestionar tus artículos</p>
    </div>

    <div  class="modulo" <?php echo aos_animacion(); ?>>
      <div class="modulo__icono">
        <img src="build/img/categorias.svg" alt="Icono categorías" />
      </div>
      <h3 class="modulo__nombre">Categorías</h3>
      <p class="modulo__descripcion">Organiza tu inventario</p>
    </div>

    <div  class="modulo" <?php echo aos_animacion(); ?>>
      <div class="modulo__icono">
        <img src="build/img/user.svg" alt="Icono usuarios" />
      </div>
      <h3 class="modulo__nombre">Usuarios</h3>
      <p class="modulo__descripcion">Administrarás los accesos</p>
    </div>

    <div  class="modulo" <?php echo aos_animacion(); ?>>
      <div class="modulo__icono">
        <img src="build/img/signal.svg" alt="Icono reportes" />
      </div>
      <h3 class="modulo__nombre">Reportes</h3>
      <p class="modulo__descripcion">Genera informes detallados</p>
    </div>
  </div>
</section>
