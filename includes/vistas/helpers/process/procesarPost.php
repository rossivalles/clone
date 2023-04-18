<?php
require_once '../../../../includes/config.php';
require_once RAIZ_APP."/vistas/helpers/autorizacion.php";
require_once RAIZ_APP."/vistas/helpers/forms/form_post.php";
$tituloPagina = 'Nuevo Post';

$idItem = $_POST["Productos"] ?? null;
$categoria = $_POST["Categoria"] ?? null;

if (!estaLogado()) {
	Utils::paginaError(403, $tituloPagina, 'Usuario no conectado!', 'Debes iniciar sesión para ver el contenido.');
}
else{ 
    $conn = BD::getInstance()->getConexion();
    $queryItem = sprintf("SELECT * FROM items i WHERE i.id=%d",$idItem);
    $item = $conn->query($queryItem);
    $item = $item->fetch_assoc();

    $queryPost = sprintf("INSERT INTO post (idPropietario,idItem,Categoria) VALUES ($item[idUs], $item[id], '$categoria')");
    if($conn->query($queryPost)){
        $contenidoPrincipal=<<<EOS
        <h1>Se ha registrado un nuevo post</h1>
        EOS;
    }else{
        $contenidoPrincipal=<<<EOS
        <h1>No se ha podido registrar el nuevo post</h1>
        EOS;
    }
    
}

require_once RAIZ_APP."/vistas/comun/layout.php";

