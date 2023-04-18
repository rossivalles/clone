<?php
// establecer conexión a la base de datos

require_once 'includes/config.php';


$tituloPagina = 'procesarBusqueda';


$conn = new mysqli(BD_HOST,BD_USER,BD_PASS,BD_NAME);
    if ($conn->connect_error){
        die("La conexión ha fallado" . $conn->connect_error);
    }

// obtener el término de búsqueda ingresado en el formulario
$termino = isset($_GET["busqueda"]) ? trim($_GET["busqueda"]) : "";

// buscar los items que contengan el término ingresado
if (!empty($termino)) {
    $query = "SELECT * FROM items WHERE Nombre LIKE ? OR Descripcion LIKE ?";
    $statement = $conn->prepare($query);
    $termino = "%".$termino."%";
    $statement->bind_param("ss", $termino, $termino);
    $statement->execute();
    $items = $statement->get_result()->fetch_all(MYSQLI_ASSOC);

  
    if (!empty($items)) {
        $contenidoPrincipal = <<<EOS
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
        EOS;
    
        foreach ($items as $item) {
            $contenidoPrincipal .= <<<EOS
                <tr>
                    <td>{$item["id"]}</td>
                    <td>{$item["Nombre"]}</td>
                    <td>{$item["Descripcion"]}</td>
                </tr>
            EOS;
        }
    
        $contenidoPrincipal .= <<<EOS
                </tbody>
            </table>
        EOS;
    } else {
        $contenidoPrincipal = "<p>No se encontraron items.</p>";
    }
    

    require 'includes/vistas/comun/layout.php';

} 
else {
    $items = [];
    $contenidoPrincipal = "<p>No se encontraron items.</p>";
    require 'includes/vistas/comun/layout.php';
}


?>






