<?php

function API($ruta){
    $url = "https://api-sepomex.hckdrk.mx/query/";
    $respuesta = $url . $ruta;
    return $respuesta;
}

$direccion = API("get_estados");
$json = file_get_contents($direccion);
$datos = json_decode($json,true);
print_r($datos);

?>