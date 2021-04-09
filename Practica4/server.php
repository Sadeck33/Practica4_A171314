<?php
    require_once "nusoap.php";
    function GetAnimales ($datos){
        if ($datos == "Animal"){
            return Join(",", array (
                "Leon",
                "Tigre",
                "Cocodrilo",
                "Perro"
            ));
        }
        else {
            return "No hay animales :/";
        }
    }
    $server = new soap_server();
    $server->register("GetAnimales");
    if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>