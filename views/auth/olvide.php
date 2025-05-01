<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recuperar Contraseña</p>

        <?php 
            require_once __DIR__ . "/../templates/alertas.php";
        ?>

    <form action="/olvide" class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            />
        </div>
            <input 
                type="submit" 
                class="formulario__submit"
                value="Enviar Instrucciones"
            />
    </form>
        <div class="acciones">
            <a class="acciones__enlace" href="/login">¿Tenés cuenta? Iniciar Sesión</a>
            <a class="acciones__enlace" href="/registro">¿No tenes cuenta? Creála</a>
        </div>
</main>