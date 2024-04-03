<?php
require_once "lib/nusoap.php";
$cliente =new nusoap_client("http://localhost/PRACTICA4PEEC/Server.php");

$error = $cliente->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}
$result = $cliente->call("getpaises", array("datos" => "Paises"));
if ($cliente->fault) { //chekeamos uan falla al momento de llamar al metodo
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else { //No hay error al llamar el metodo
    $error = $cliente->geterror();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>Paises</h2><pre>";
        echo $result;
        echo "</pre>";
    }

}
?>