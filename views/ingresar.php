@plantilla('reactPlantilla')

@bloque('titulo')
Registrar
@fin

@bloque('cabecera')
<script src="ingresar.js?<?php echo uniqid() ?>"></script>
@fin

@bloque('cuerpo')
<div id="ingresar"></div>
@fin
