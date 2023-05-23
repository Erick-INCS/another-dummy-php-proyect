
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


	<a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
		<!-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt=""> -->
		<h3>Iniciar sesión</h3>
	</a>

	<?php include('parts/html_alerts.php'); ?>

	<!-- <p class="text-center">Your Social Campaigns</p> -->
	<form action="../includes/validar.php" method="post">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Correo</label>
			<input name="usuario" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="Correo electrónico" required>
		</div>
		<div class="mb-4">
			<label for="exampleInputPassword1" class="form-label">Contraseña</label>
			<input name="clave" type="password" class="form-control" id="exampleInputPassword1" required>
		</div>
		<div class="d-flex align-items-center justify-content-between mb-4">
			<a class="text-primary fw-bold" href="recuperarClave.php">¿Olvidaste tu contraseña?</a>
		</div>
		<button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Iniciar sesión</button>
	</form>

<?php include('parts/login_body_tail.php'); ?>