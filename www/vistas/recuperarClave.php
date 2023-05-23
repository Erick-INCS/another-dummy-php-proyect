
<?php
// redireccionar ---------------------
session_start();
if(isset($_SESSION['usuario'])) {
	header("Location: ../vistas/inicio.php");
}

include('../globals.php');
// --------------------- redireccionar
?>

<?php include('parts/login_body_head.php'); ?>

<a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
	<h3>Recuperar clave</h3>
</a>

<?php include('parts/html_alerts.php'); ?>

<form action="../includes/recuperarClave.php" method="post">
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Correo</label>
		<input name="usuario" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="Correo electrónico" required>
	</div>

	<button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Enviar clave</button>
</form>

<?php include('parts/login_body_tail.php'); ?>
