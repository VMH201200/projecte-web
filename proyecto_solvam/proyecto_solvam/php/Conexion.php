<?php

$conexion = new mysqli("localhost", "vicentemagraner","n0n4ryg4m3","psicologia_vmh");
if ($conexion->connect_error){
    die('No se ha podido conectar');
}else{
    echo "Conectada";
}
?>