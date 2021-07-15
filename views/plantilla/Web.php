<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@bloque('titulo')</title>
        <link rel="stylesheet" href="assets/general.css?<?php echo uniqid() ?>"/>
        @bloque('cabecera')
    </head>
    <body>
        @bloque('cuerpo')
    </body>
    <script src="assets/general.js?<?php echo uniqid()?>"></script>
    <script src="assets/vendor.js?<?php echo uniqid() ?>"></script>
</html>