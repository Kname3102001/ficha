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
		<?php
require_once "conexion.php";
$sql = "SELECT COUNT(*) total FROM usuario";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>		
    <div class="container">
  <h2>Contador 1</h2>
  <p class="text-white-50 bg-dark"><?php echo 'Número de total de pacientes registrados: ' . $fila['total'];?></p>
</div>
    </body>
</html>	
<?php
require_once "conexion.php";

$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=1";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<div class="container">
    <h2>Contador 2</h2>
    
    <p class="bg-info text-white"><?php echo 'Número de total de pacientes en cita general: ' . $fila['total'];?></p>


<br>
<br>
<?php
require_once "conexion.php";
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=2";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<p class="bg-info text-white"><?php echo 'Número de total de pacientes en cita odontologica: ' . $fila['total'];?></p>
 
<br>
<br>
<?php
require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=3";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<p class="bg-info text-white"><?php echo'Número de total de pacientes en cita prioritaria: ' . $fila['total'];?></p>
<br>
<br>
<?php
require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=4";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<p class="bg-info text-white"><?php echo'Número de total de pacientes en cita triage I: ' . $fila['total'];?></p>

<br>
<br>
<?php
require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=5";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<p class="bg-info text-white"><?php echo'Número de total de pacientes en cita triage II: ' . $fila['total'];?></p>

<br>
<br>
<?php
require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=6";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<p class="bg-info text-white"><?php echo'Número de total de pacientes en cita triage III: ' . $fila['total'];?></p>
<br>
<br>
<?php
require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=7";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<p class="bg-info text-white"><?php echo'Número de total de pacientes en cita triage IIIB: ' . $fila['total'];?></p>
<br>
<br>
<?php
require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=8";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
?>
<p class="bg-info text-white"><?php echo'Número de total de pacientes en cita triage IV: ' . $fila['total'];?></p>

<?php
require_once "conexion.php";

$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=1";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);

$x=$fila['total'];
$totx=$x*3000;
?>
<div class="container">
    <h2>Contador 3</h2>
<p class="bg-warning text-white"><?php echo'Número de total de pagos en general: ' . $x;?></p>
<p class="bg-warning text-white"><?php echo'Total pagado en general: ' . $totx;?></p>
<br>
<?php
    require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=2";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
$s=$fila['total'];
$tots=$s*5000;
?>
<p class="bg-warning text-white"><?php echo'Número de total de pagos en odontologia: ' . $s;?></p>
<p class="bg-warning text-white"><?php echo'Total pagado en odontologia: ' . $tots;?></p>
<br>
<?php
require_once 'conexion.php';
$sql = "SELECT COUNT(*) total FROM usuario WHERE id_cita=3";
$result = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($result);
$b=$fila['total'];
$totb=$b*15000;
?>
<p class="bg-warning text-white"><?php echo'Número de total de pagos en prioritaria: ' . $b;?></p>
<p class="bg-warning text-white"><?php echo'Total pagado en prioritaria: ' . $totb;?></p>

<?php
	$fin=$totx+$tots+$totb;
	$sum=$x+$s+$b;
	$prom=$fin/$sum;
?>
<br>
<br>
<h3>TOTAL</h3>
<br>
<br>
<p class="bg-warning text-white"><?php echo'el total de copago por parte de los servicios medicos es de:'.$fin;?></p>
<br>
<br>
<h3>PROMEDIO</h3>
<br>
<br>
<p class="bg-warning text-white"><?php echo'el promedio de copago por parte de los servicios medicos y los pacientes es de:'.$prom;?></p>

	
