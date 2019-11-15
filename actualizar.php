<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar datos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once "conexion.php";
if (isset($_GET['documento'])) {
$documento = $_GET['documento'];
$query = "SELECT * FROM usuario WHERE documento=$documento";
$result = mysqli_query($mysqli, $query);
if (mysqli_num_rows($result) == 1) 
{
$row = mysqli_fetch_array($result);
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$direccion = $row['direccion'];
$telefono = $row['telefono'];
}
}
?>

<div class="container p-4">
<div class="row">
<div class="col-md-4 mx-auto">
<div class="card card-body">
<p>Actualizar los datos usuarios</p>
<form action="editarDatos1.php?documento=<?php echo $_GET['documento']; ?>" method="POST">

<div class="form-group">
<div class="form-group">
<input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>">
</div>
<div class="form-group">
<div class="form-group">
<input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>">
</div>
<div class="form-group">
<input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>">
</div>
<div class="form-group">
<input name="telefono" type="number" class="form-control" value="<?php echo $telefono; ?>">
</div>

<button class="btn btn-danger" name="actualizar">Actualizar</button>	
</form>
</div>
</div>
</div>
</div>
</body>
</html>