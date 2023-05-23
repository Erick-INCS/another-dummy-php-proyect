
<?php
// redireccionar ---------------------
session_start();
// if(isset($_SESSION['usuario'])) {
// 	header("Location: ../vistas/inicio.php");
// }

include('../globals.php');
// --------------------- redireccionar
?>

<?php include('parts/login_body_head.php'); ?>

<a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
	<h3>Actualizar clave</h3>
</a>

	<?php include('parts/html_alerts.php'); ?>
	<?php
		$login_msg = $_SESSION['err_upd'];
		if (isset($login_msg)) {
	?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<?=$login_msg?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php
		}
	?>
	<div id="pass_linter_container"></div>
	<form class="login-form" action="../includes/actualizarClave.php" method="post">
		<input name="email" type="hidden" value="<?=$_SESSION['correo']?>"/>
		<input name="pass" type="hidden" value="<?=$_SESSION['pass']?>"/>

		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Nueva contraseña</label>
			<input name="old_key" id="old_key" type="password" placeholder="Nueva clave"  aria-describedby="Nueva clave" class="form-control" required/>
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Repetir contraseña</label>
			<input name="new_key" type="password" placeholder="Repetir nueva clave" class="form-control" aria-describedby="Repetir nueva clave" required/>
		</div>

		<button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Actualizar</button>
	</form>

<?php include('parts/login_body_tail.php'); ?>
<script type="text/javascript" src="../js/pass_validator.js"></script>
