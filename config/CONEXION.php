<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "db-inv-enel";

$conexion = mysqli_connect($host,$usuario,$password,$bd);

if($conexion){
    echo "Se ha Conectado Correctamente";
}else{
    echo "No se pudo conectar :(";
}
    
?>