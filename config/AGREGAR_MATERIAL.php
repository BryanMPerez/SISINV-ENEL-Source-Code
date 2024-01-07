<?php
include_once('CONEXION.php');

$codigo_Material=$_POST['codigoMaterial_conex'];
$id_Material=$_POST['idMaterial_conex'];


echo "los datos son los siguientes: <br>";
echo "$codigo_Material,$id_Material";


$conectar=conn(); //ejecuta las conecciones a la b.d.
$sql="INSERT INTO agregarmaterial(codigoMaterial, codigoMaterial) 
VALUES ('$codigo_Material', '$id_Material')";
$resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>


