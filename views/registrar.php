@plantilla('reactPlantilla')

@bloque('titulo')
Registrar
@fin

@bloque('cabecera')
<script src="assets/registrar.js?<?php echo uniqid() ?>"></script>
@fin

@bloque('cuerpo')
<div id="registrar"></div>
@fin
