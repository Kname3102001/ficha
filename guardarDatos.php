<?php
require_once "conexion.php";
ini_set("display_errors", false);
//$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$documento=$_POST['documento'];
$id_cita=$_POST['id_cita'];
$id_doc=$_POST['id_doc'];

$found=false;
$sql1 = "select * from usuario where documento=\"$_POST[documento]\"";
$querys = $mysqli->query($sql1);
while ($r=$querys->fetch_array()) 
{
	$found=true;
if($found)
{
	print "<script>alert(\"Documento de usuario ya estan registrados.\");window.location='guardar.php';</script>";
}
}

$query="INSERT INTO usuario(nombre,apellido,direccion,telefono,documento,id_cita,id_doc) VALUES('$nombre','$apellido','$direccion','$telefono','$documento','$id_cita','$id_doc')";
if($mysqli->query($query)){
	print "<script>alert(\"Registro exitoso.\");window.location='seleccionar.php';</script>";
} else{
	echo "Ocurrio un error";
}
/*if ($mysqli->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}*/

?>