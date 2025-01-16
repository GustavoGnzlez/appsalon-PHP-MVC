<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Escribe tu nuevo password</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>


<?php if ($error) return; ?>

<form class="formulario" method="post">
    <div class="campo">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Password">
    </div>

    <input type="submit" class="boton" value="Guardar Password">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Yatienes cuenta? Iniciar Sesión</a>
    <a href="/olvide">¿Aún no tienes cuenta? Crear una</a>
</div>