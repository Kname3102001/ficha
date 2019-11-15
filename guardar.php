<!DOCTYPE html>
	<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Formulario de Registro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
      <script language="JavaScript" type="text/javascript">
alert("Bienvenido ¿desea entrar?");
</script>
<table>
	<tr>
		<div class="col-md-8">
		<table class="table table-bordered">
			<thead>
		<tr>
		<th>1. "cita general"</th> 
		<th>2. "cita odontologica"</th>   
		<th>3. "cita prioritaria"</th>
		<th>EMERGENCIA</th>
		<th>4. "triage1"</th>      
	    <th>5. "triage2"</th>
	 	<th>6. "triage3"</th>      
		<th>7. "triage3B"</th>     
		<th>8. "triage4"</th>
		<th></th>
				</tr>
			</thead>
	
	</tr>
</table>


	<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Registro de usuarios</h2>
			<form action="guardarDatos.php" method="post">
				<div class="form-group">
					<input type="number" class="form-control" name="id" placeholder="id del usuario">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre del usuario">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="apellido" placeholder="Apellido del usuario">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="direccion" placeholder="Direccion del usuario">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="telefono" placeholder="Telefono del usuario">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="documento" placeholder="Documento del usuario">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="id_cita" placeholder="Id seleccionada">
				</div>
                            </div>
				<div class="form-group">
					<input type="number" class="form-control" name="id_doc" placeholder="Id seleccionada">
				</div>
				<button type="submit" name="registrar" class="btn btn-warning">Registrar</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>