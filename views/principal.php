@plantilla('web')

@bloque('titulo')
principal
@fin

@bloque('cabecera')
<script src="assets/principal.js?<?php echo uniqid() ?>"></script>
@fin

@bloque('cuerpo')
<div id="principal"></div>
@fin