<?php
    require_once "lib/nusoap.php";
    function getPaises($datos) {
        if ($datos == "Paises") {
            return join(",", array(
                "Mexico",
                "España",
                "Alemania",
                "Brasil"));
         
        else {
            return "No hay Paises";

        }
        }
     }
    $server = new soap_server();//Creamos Instancia de SOAP
    $server->register("getPaises");//Indica el metodo o funcion a devolver
    if ( !isset( $http_raw_post_data ) ) $http_raw_post_data =file_get_contents( 'php://input');
    $server->service($http_raw_post_data);
?>    