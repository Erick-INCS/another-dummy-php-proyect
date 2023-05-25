<?php
    session_start();
    $user_id = $_SESSION['usuario'];
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">

            <h5 class="card-title fw-semibold mb-4">Agregar usuario</h5>
			<br>

			<form action="../includes/insertar_usuario.php" method="post" class="row w-100 mt-3">
				<?php include('form_usuario.php'); ?>	
				<div class="col-12">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
				</div>
			</form>

        </div>
    </div>
</div>