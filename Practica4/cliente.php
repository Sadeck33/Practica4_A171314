<?php
    require_once "nusoap.php";
    $cliente = new nusoap_client("http://localhost/Practica4/server.php");

    $error = $cliente->GetError();
    if ($error){
        echo "<h2>Hubo un Error</h2><pre>" .$error ."</pre>";
    }
    $result = $cliente->call("GetAnimales",array("datos" => "Animal"));
    if ($cliente->fault) {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $cliente->GetError();
        if ($error){
            echo "<h2>Error</h2><pre>" .$error ."</pre>";
        }
        else {
            echo "<h2>Animales</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
?>