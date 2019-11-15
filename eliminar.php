<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Mostrar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="col-md-8">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>nombre</th>
					<th>apellido</th>
					<th>direccion</th>
                    <th>telefono</th>
                    <th>documento</th>
                    <th>nombre doc</th>
                    <th>apellido doc</th>
                    <th>cita</th>
					<th>acciones</th>
					<th></th>
				</tr>
			</thead>
	
				<tbody>
					<?php
					require_once "conexion.php";
					$query = "SELECT u.id, u.nombre, u.apellido, u.direccion, u.telefono, u.documento,m.id_doc, m.nombre_m, m.apellido_m, c.nom_cita from usuario u, medicos m, cita c where u.id_cita=m.id_cita And u.id_cita=c.id_cita";
					$result_tasks = mysqli_query($mysqli, $query);
					while($row = mysqli_fetch_assoc($result_tasks)){?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellido']; ?></td>
						<td><?php echo $row['direccion']; ?></td>
						<td><?php echo $row['telefono']; ?></td>
                        <td><?php echo $row['documento']; ?></td>
                        <td><?php echo $row['nombre_m']; ?></td>
                        <td><?php echo $row['apellido_m']; ?></td>
                        <td><?php echo $row['nom_cita']; ?></td>
<td>
						<a href="eliminar.php?documento=<?php echo $row['documento']?>" class="btn btn-danger">Eliminar</a>
						<a href="actualizar.php?documento=<?php echo $row['documento']?>" class="btn btn-success">Actualizar</a>
					</td>
					</tr>
					<?php } ?>
				</tbody>
		 </table>
		</div>	
		<a href="cont1.php" class="btn btn-success">contador 1</a>
		
</body>
</html>		