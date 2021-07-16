@plantilla('auth')

@bloque('titulo')
principal2
@fin

@bloque('cabecera')
<script src="assets/principal.js?<?php echo uniqid() ?>"></script>
@fin

@bloque('cuerpo')
<div id="principal"></div>
@fin