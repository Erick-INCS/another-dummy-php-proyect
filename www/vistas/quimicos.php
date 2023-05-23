<?php
    session_start();
    $user_id = $_SESSION['usuario'];
    include('../conexion.php');
    $conn = conectar();

    $consultaClinicas="
    SELECT
      *
	FROM
		quimicos_perecederos
	;
    ";

    $cantidadClinicas = mysqli_query($conn, $consultaClinicas);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">

            <!-- <h5 class="card-title fw-semibold mb-4">Quimicos perecederos</h5> -->
			<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Agregar reactivo
			</button> -->
			<a href="agregar_reactivo.php" class="btn btn-primary">
				Agregar reactivo
			</a>
			<br>
			<br>

			<table id="tbl_quimicos" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Cantidad</th>
						<th>Presentacion</th>
						<th>Condición</th>
						<th>Laboratorio</th>
						<th>Ubicación</th>
						<th>Fecha de caducidad</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						while($rows = mysqli_fetch_array($cantidadClinicas)) {
							$dt =strtotime($rows['fecha_caducidad']);
							$months_nm = (3600 * 24 * 30);
							$months = abs(($dt / $months_nm) - (strtotime("now") / $months_nm));
							$m_color = '';
							if ($months <= 3.0) {
								$m_color = 'text-danger';
							}
					?>
						<tr>
							<td><?=$rows['id']?></td> <!-- No. -->
							<td><?=$rows['nombre']?></td> <!-- nombre -->
							<td><?php echo $rows['marca']?></td> <!-- marca -->
							<td><?php echo $rows['cantidad']?></td> <!-- cantidad -->
							<td><?php echo $rows['presentacion']?></td> <!-- presentacion -->
							<td><?php echo $rows['condicion']?></td> <!-- condicion -->
							<td><?php echo $rows['laboratorio']?></td> <!-- lab -->
							<td><?php echo $rows['ubicacion']?></td> <!-- ubicacion -->
							<td class="<?=$m_color?>"><?php echo date("d/m/Y", $dt)?></td> <!-- Caducidad -->
							<td>
								<a href="editar_quimico.php?id=<?php echo $rows['id']?>" class="btn btn-sm btn-primary">Editar</a>
							</td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
        </div>
    </div>
</div>




<script type="text/javascript">
	$(document).ready( function () {
        $.fn.dataTable.moment( 'DD/MM/YYYY' );
        $('#tbl_quimicos').DataTable({
            scrollX: true,
            // order: [[8, 'asc']],
		});
	});

</script>
