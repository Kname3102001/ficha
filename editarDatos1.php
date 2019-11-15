<?php
require_once "conexion.php";
if (isset($_POST['actualizar'])) {
$documento = $_GET['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$query = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', direccion = '$direccion', telefono = '$telefono' WHERE documento=$documento";
mysqli_query($mysqli, $query);

header('Location: seleccionar.php');
}
?>