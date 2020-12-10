<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@bloque('titulo')</title>
        @bloque('cabecera')
    </head>
    <body>
        @bloque('cuerpo')
    </body>
    <script src="vendor.js?<?php echo uniqid()?>"></script>
</html>