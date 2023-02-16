<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/CSS/diseño.css" rel="stylesheet">
        <script src="/JS/animacion.js"></script>
    </head>
    <body>
        <section class="registro">
            <h4>Formulario</h4>
            <h5 class="subtitulos">Nombre</h5>
            <input class="datos" type="text" name="nombre" id="" placeholder="Ingresa tu nombre completo" required pattern="^[a-zA-Z]+$">
            <h5 class="subtitulos">Correo</h5>
            <input class="datos" type="email" name="correo" id="" placeholder="Ingresa tu correo" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
            <h5 class="subtitulos">Número</h5>
            <input class="datos" type="number" name="numero" id="numero" placeholder="Número a mostrar" value="<?php echo rand(99999,1000000) ?>" disabled>
            <input class="boton" type="submit" value="Registrar">
        </section>
        <script src="/JS/index.js"></script>
    </body>
</html>