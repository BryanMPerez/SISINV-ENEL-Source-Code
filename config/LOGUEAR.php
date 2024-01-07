<?php
require 'CONEXION.php';
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar from usuarios_sistemainventarios where userinvUsuario = '$usuario' and userinvPassword = '$password' ";
$consulta = mysqli_query($conexion,$q);
$arrary = mysqli_fetch_array($consulta);

if($arrary['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../principal.php");

}else{
    echo "DATOS INCORRECTOS";
}

?>