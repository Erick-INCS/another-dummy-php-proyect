<?php
    session_start();
    $user_id = $_SESSION['usuario'];
    include('../conexion.php');
    $conn = conectar();

    $consultaClinicas="
    SELECT
      *
	FROM
		historial
	;
    ";

    $cantidadClinicas = mysqli_query($conn, $consultaClinicas);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">

			<table id="tbl_quimicos" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No. quimico</th>
						<th>Fecha modificación</th>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Cantidad</th>
						<th>Presentacion</th>
						<th>Condición</th>
						<th>Laboratorio</th>
						<th>Ubicación</th>
						<th>Fecha de caducidad</th>
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
							<td><?=$rows['id_quimico']?></td> <!-- No. quimico -->
							<td><?=$rows['tiempo']?></td> <!-- Fecha modificación -->
							<td><?=$rows['nombre']?></td> <!-- nombre -->
							<td><?php echo $rows['marca']?></td> <!-- marca -->
							<td><?php echo $rows['cantidad']?></td> <!-- cantidad -->
							<td><?php echo $rows['presentacion']?></td> <!-- presentacion -->
							<td><?php echo $rows['condicion']?></td> <!-- condicion -->
							<td><?php echo $rows['laboratorio']?></td> <!-- lab -->
							<td><?php echo $rows['ubicacion']?></td> <!-- ubicacion -->
							<td><?php
								if ($dt) {
									echo date("d/m/Y", $dt);
								}
							?></td> <!-- Caducidad -->
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
        // $.fn.dataTable.moment( 'DD/MM/YYYY' );
        $.fn.dataTable.moment( 'YYYY-MM-DD hh:mm:ss' );
        $('#tbl_quimicos').DataTable({
            scrollX: true,
            order: [[1, 'desc']],
		});
	});

</script>
