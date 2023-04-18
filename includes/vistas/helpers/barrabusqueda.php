<?php

function buildFormularioBusqueda($itemname='')
{
    return <<<EOS
    <form method="get" action="procesarBusqueda.php">
        <label for="busqueda">Buscar item:</label>
        <input type="text" id="busqueda" name="busqueda">
        <button type="submit">Buscar</button>
    </form>
   
    EOS;
}