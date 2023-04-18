<?php
require_once 'includes/config.php';
require_once 'includes/vistas/helpers/autorizacion.php';

$tituloPagina = 'Posts';

if (!estaLogado()) {
	Utils::paginaError(403, $tituloPagina, 'Usuario no conectado!', 'Debes iniciar sesión para ver el contenido.');
}
else{

    $conn = BD::getInstance()->getConexion();
    $query = sprintf("SELECT * FROM post p");
    $posts = $conn->query($query);
    if($posts){
        $contenidoPrincipal="";
        foreach($posts as $post){
            //ideal hacer un buildquery o algo
            $queryUser = sprintf("SELECT * FROM usuario u WHERE u.idusuario=%d",$post['idPropietario']);
            $user = $conn->query($queryUser);
            $user = $user->fetch_assoc();

            $queryItem = sprintf("SELECT * FROM items i WHERE i.id=%d",$post['idItem']);
            $item = $conn->query($queryItem);
            $item = $item->fetch_assoc();

            //meter link al post clase nueva?
            //<a href="post_detail.php?id=echo $post['idPost']">$item[Nombre]</a>
            // <p>Item: $item[Nombre]</p>
            
            if($item['Image']=="img/"){//no tiene image
                $item['Image']="img/no_image.png";
            }
            $post_detail_dir=RUTA_APP.'/includes/vistas/helpers/process/post_detail.php';
            $SinglePost=<<<EOS
            <a href="$post_detail_dir?id=$post[idPost]">$item[Nombre]</a></br>
            <img src="$item[Image]" alt="$item[Nombre]" style="width:500px;height:500px;">
            <p>Categorias Interesadas: $post[Categoria]</p>
            EOS;
            //concatenar contenido
            //Ruta de la image :img/imagen_prueba.png
            $contenidoPrincipal=$contenidoPrincipal.$SinglePost;


        }
    }

}


require 'includes/vistas/comun/layout.php';
