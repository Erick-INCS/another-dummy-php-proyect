<?php
	session_start();
	$user_id = $_SESSION['usuario'];
	include('../conexion.php');
	$conn = conectar();

    $consultaUsuarios="SELECT idUsuario, nombreUsuario, cargo, correo, recibe_alertas FROM  usuarios";
    $queryUsuarios = mysqli_query($conn, $consultaUsuarios);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">

		<a href="agregar_usuario.php" class="btn btn-primary">
			Nuevo usuario
		</a>
		<br>
		<br>

		<?php
			if (isset($_GET['err'])) {?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<?=$_GET['err']?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php } ?>

	<table id="tbl_usuarios" class="table table-striped table-bordered">
		<thead>
			<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Correo</th>
			<th></th>
			</tr>
		</thead>

		<tbody>
			<?php while($filasUsuarios = mysqli_fetch_array($queryUsuarios)) { ?>
				<tr>
					<td><?php echo $filasUsuarios['idUsuario']?></td>
					<td><?php echo $filasUsuarios['nombreUsuario']?></td>
					<td><?php echo $filasUsuarios['cargo']?></td>
					<td><?php echo $filasUsuarios['correo']?></td>
					<?php
						if(0==0){
						?>
					<td><a href="editar_usuario.php?idUsuario=<?php echo $filasUsuarios['idUsuario'] ?>" class="btn btn-sm btn-primary">Editar</a></td>
					<?php
					}
					else {
					?>
						<td></td>
						<td></td>
					<?php
					}
					?>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</div>


<script type="text/javascript">
	$(document).ready( function () {
	$('#tbl_usuarios').DataTable();
	});

</script>
