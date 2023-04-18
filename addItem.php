<?php
require_once 'includes/config.php';
require_once 'includes/vistas/helpers/forms/form_item.php';


$tituloPagina = 'Nuevo Item';
$htmlFormLogin = buildFormularioItem();
$contenidoPrincipal=<<<EOS
<h1>Añadir un nuevo Item</h1>
$htmlFormLogin

EOS;

require 'includes/vistas/comun/layout.php';
