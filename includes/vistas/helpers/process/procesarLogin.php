<?php

require_once '../forms/form_login.php';
require_once '../../../../includes/config.php';
require_once '../usuarios.php';
require_once RAIZ_APP."/vistas/helpers/autorizacion.php";



$tituloPagina = 'Login';

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = $_POST["password"] ?? null;
print(RUTA_APP);
$esValido = $username && $password && ($usuario = Usuario::login($username, $password));
if (!$esValido) {
	$htmlFormLogin = buildFormularioLogin($username, $password);
	$contenidoPrincipal=<<<EOS
		<h1>Error</h1>
		<p>El usuario o contraseña no son válidos.</p>
		$htmlFormLogin
	EOS;
	
	require_once RAIZ_APP."/vistas/comun/layout.php";

	
	exit();
}

$_SESSION['idUsuario'] = $usuario->idusuario;

$_SESSION['roles'] = $usuario->isAdmin;

$_SESSION['nombre'] = $usuario->NombreApellido;


$contenidoPrincipal=<<<EOS
	<h1>Bienvenido ${_SESSION['nombre']}</h1>
	<p>Usa el menú de la izquierda para navegar.</p>
EOS;

require_once RAIZ_APP."/vistas/comun/layout.php";

