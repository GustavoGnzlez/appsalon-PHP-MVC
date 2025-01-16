<div class="boton-atras">
    <a href="/servicios" class="atras">
        <i class="uil uil-arrow-left"></i>
        Regresar a Servicios
    </a>
</div>

<h1 class="nombre-pagina">Nuevo Servicio</h1>
<p class="descripcion-pagina">Llena todos los campos para añadir un nuevo servicio</p>
<?php
// include_once __DIR__ . '/../templates/barraNav.php'; 
include_once __DIR__ . '/../templates/alertas.php';
?>
<form action="/servicios/crear" method="post" class="formulario">

    <?php
    include_once __DIR__ . '/formulario.php';
    ?>

    <input type="submit" value="Actualizar Servicio" class="boton">
</form>