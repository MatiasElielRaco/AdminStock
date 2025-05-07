<header class="header">
    <div class="header__contenedor">
        <picture>
            <source srcset="build/img/AdminStock.avif" type="image/avif">
            <source srcset="build/img/AdminStock.webp" type="image/webp">
            <img loading="lazy" width="100" height="100" src="build/img/AdminStock.png" alt="Logo AdminStock">
        </picture>

        <nav class="navegacion">
            <a href="/" class="navegacion__enlace">Home</a>
            <?php if(is_auth()) { ?>
                <a href="/dashboard" class="navegacion__enlace">Dashboard</a>
                <form method="POST" action="/logout" class="dashboard__form">
                    <input type="submit" value="Cerrar Sesión" class="navegacion__enlace">
                </form>
            <?php } else { ?>
                <a href="/login" class="navegacion__enlace">Login</a>
            <?php } ?>
        </nav>
    </div>
</header>