<nav class="nav">
    <p>Hola <span><?php echo $nombre ?? ''; ?></span></p>

    <a href="/logout" class="boton">Cerrar Sesión</a>
</nav>

<?php

if (isset($_SESSION['admin'])) { ?>
    <div class="barra-servicios">
        <a href="/admin" class="boton">Ver Citas</a>
        <a href="/servicios" class="boton">Ver Servicios</a>
        <a href="/servicios/crear" class="boton">Nuevo Servicio</a>
    </div>
<?php } ?>