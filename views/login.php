@plantilla('reactplantilla')

@bloque('titulo')
Ejemplo  Login
@fin

@bloque('cabecera')
<script src="login.js?<?php echo uniqid() ?>"></script>
@fin

@bloque('cuerpo')
<div id="login"></div>
@fin
