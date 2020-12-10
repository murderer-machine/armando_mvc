@plantilla('reactplantilla')

@bloque('titulo')
Ejemplo 1 React
@fin

@bloque('cabecera')
<script src="general.js?<?php echo uniqid() ?>"></script>
@fin

@bloque('cuerpo')
hola soy vista de php de react
<div id="general"></div>
@fin
