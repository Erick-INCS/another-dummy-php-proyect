<?php
	include('../conexion.php');
	$con=conectar();

	$idUsuario = $_POST['idUsuario'];
	$nombre = $_POST['nombre'];
	$marca = $_POST['marca'];
	$cantidad = $_POST['cantidad'];
	$presentacion = $_POST['presentacion'];
	$condicion = $_POST['condicion'];
	$laboratorio = $_POST['laboratorio'];
	$fecha_caducidad = $_POST['fecha_caducidad'];
	$ubicacion = $_POST['ubicacion'];

	$sql_ = "
	INSERT INTO quimicos_perecederos(
		nombre,
		marca,
		cantidad,
		presentacion,
		condicion,
		laboratorio,
		ubicacion,
		fecha_caducidad
	)
	VALUES(
		'$nombre',
		'$marca',
		'$cantidad',
		'$presentacion',
		'$condicion',
		'$laboratorio',
		'$ubicacion',
		'$fecha_caducidad'
	)
	"; 
	
	$query = mysqli_query($con, $sql_);
	$sql = "SELECT MAX(id) as id FROM quimicos_perecederos"; 
	$query_id = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query_id);
	$id = $row['id'];

$sql_log = "
INSERT INTO historial(
	id_quimico,
	nombre,
	marca,
	cantidad,
	presentacion,
	laboratorio,
	ubicacion,
	fecha_caducidad,
	condicion,
	tiempo
	)
	VALUES (
		'$id',
		'$nombre',
		'$marca',
		'$cantidad',
		'$presentacion',
		'$laboratorio',
		'$ubicacion',
		'$fecha_caducidad',
		'$condicion',
		CURRENT_TIMESTAMP()
	)
";

	$query_logs = mysqli_query($con, $sql_log);

	if($query_logs && $query){
		Header("Location: ../vistas/inicio.php");
	} else {
		echo $sql_log;
	}
?>
