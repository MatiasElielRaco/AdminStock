<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebcamp</p>

    <?php 
        require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form action="/registro" class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu Nombre"
                value="<?php echo $usuario->nombre; ?>"
                id="nombre"
                name="nombre"
            />
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu Apellido"
                value="<?php echo $usuario->apellido; ?>"
                id="apellido"
                name="apellido"
            />
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                value="<?php echo $usuario->email; ?>"
                id="email"
                name="email"
            />
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Tu Contraseña"
                id="password"
                name="password"
            />
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Repetir Contraseña"
                id="password2"
                name="password2"
            />
        </div>
            <input 
                type="submit" 
                class="formulario__submit"
                value="Crear Cuenta"
            />
    </form>
        <div class="acciones">
            <a class="acciones__enlace" href="/login">¿Tenés cuenta? Iniciar Sesión</a>
            <a class="acciones__enlace" href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>
</main>
