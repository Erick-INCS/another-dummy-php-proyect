<?php
    include('../conexion.php');
    $user_id = $_SESSION['usuario'];
    $conn = conectar();
    $id=$_GET['idUsuario'];

    $consultaClinicas="
	SELECT
        *
    FROM
		usuarios
    WHERE
		idUsuario = '$id'
    ;
    ";

    $data = mysqli_query($conn, $consultaClinicas);
	$row = mysqli_fetch_array($data);
	?>

<div class="container-fluid">
	<div class="card">
        <div class="card-body">
			
			<h5 class="card-title fw-semibold mb-4">Editar usuario</h5>
			<br>
			
			<form action="../includes/actualizar_usuario.php" method="post" class="row w-100 mt-3">
				<?php include('form_usuario.php'); ?>	
				<div class="col-12">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<a href="inicio.php" class="btn btn-secondary">Cancelar</a>
					<a href="../includes/eliminar_usuario.php?idUsuario=<?=$row['idUsuario']?>" class="btn btn-danger">Eliminar</a>
				</div>
			</form>
			
        </div>
    </div>
</div>
