<?php
	include('../conexion.php');
	$con=conectar();

	$id = $_POST['id'];
	$idUsuario = $_POST['idUsuario'];
	$nombre = $_POST['nombre'];
	$marca = $_POST['marca'];
	$cantidad = $_POST['cantidad'];
	$presentacion = $_POST['presentacion'];
	$condicion = $_POST['condicion'];
	$laboratorio = $_POST['laboratorio'];
	$fecha_caducidad = $_POST['fecha_caducidad'];
	$ubicacion = $_POST['ubicacion'];

	$sql = "
	UPDATE quimicos_perecederos SET
	nombre='$nombre',
	marca='$marca',
	cantidad='$cantidad',
	presentacion='$presentacion',
	condicion='$condicion',
	laboratorio='$laboratorio',
	ubicacion='$ubicacion',
	fecha_caducidad='$fecha_caducidad'
	WHERE id='$id'
	"; 

$query_update = mysqli_query($con, $sql);

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

	if($query_logs&&$query_update){
		Header("Location: ../vistas/inicio.php");
	}
?>
