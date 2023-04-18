<?php
require_once 'includes/config.php';
require_once 'includes/vistas/helpers/forms/form_post.php';


$tituloPagina = 'Nuevo Post';
$htmlFormLogin = buildFormularioPost();
$contenidoPrincipal=<<<EOS
<h1>Añadir un nuevo Post</h1>
$htmlFormLogin

EOS;

require 'includes/vistas/comun/layout.php';
