<?php
    session_start();
    $user_id = $_SESSION['usuario'];
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">

            <h5 class="card-title fw-semibold mb-4">Agregar quimico perecedero</h5>
			<br>

			<form action="../includes/insertar_quimico.php" method="post" class="row w-100 mt-3">
				<?php include('form_quimico.php'); ?>	
				<div class="col-12">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="inicio.php" class="btn btn-secondary">Cancelar</a>
				</div>
			</form>

        </div>
    </div>
</div>