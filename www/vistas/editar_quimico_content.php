<?php
    session_start();
    $user_id = $_SESSION['usuario'];
    include('../conexion.php');
    $conn = conectar();
    $id=$_GET['id'];

    $consultaClinicas="
	SELECT
        *
    FROM
		quimicos_perecederos
    WHERE
		id = '$id'
    ;
    ";

    $data = mysqli_query($conn, $consultaClinicas);
	$row = mysqli_fetch_array($data);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">

            <h5 class="card-title fw-semibold mb-4">Editar quimico perecedero</h5>
			<br>

			<form action="../includes/actualizar_quimico.php" method="post" class="row w-100 mt-3">
				<div class="mb-3 col-md-4 col-lg-4">
					<input type="hidden" name="id" value="<?php echo $row['id']?>">
					<input type="hidden" name="idUsuario" value="<?=$user_id?>">
					
					<label for="nombre" class="form-label">Nombre</label>
					<input type="text" name="nombre" class="form-control" id="nombre" value="<?=$row['nombre']?>" required>
				</div>
				<div class="mb-3 col-3">
					<label for="marca" class="form-label">Marca</label>
					<input type="text" name="marca" class="form-control" id="marca" value="<?=$row['marca']?>" required>
				</div>
				<div class="mb-3 col-3">
					<label for="cantidad" class="form-label">Cantidad</label>
					<input type="number" name="cantidad" class="form-control" id="cantidad" value="<?=$row['cantidad']?>" required>
				</div>
				<div class="mb-3 col-3">
					<label for="presentacion" class="form-label">Presentación</label>
						<select id="presentacion" class="form-select" name="presentacion" required>
							<option <?php if (!isset($row['presentacion'])) echo 'selected'?> value="">-</option>
							<option <?php if ($row['presentacion']=='Kg') echo 'selected'?>>Kg</option>
							<option <?php if ($row['presentacion']=='g') echo 'selected'?> >g</option>
						<option <?php if ($row['presentacion']=='mg') echo 'selected'?> >mg</option>
						<option <?php if ($row['presentacion']=='L') echo 'selected'?> >L</option>
						<option <?php if ($row['presentacion']=='ml') echo 'selected'?> >ml</option>
					</select>
				</div>
				<div class="mb-3 col-3">
					<label for="ubicacion" class="form-label">Ubicación</label>
					<input type="text" name="ubicacion" class="form-control" id="ubicacion" value="<?=$row['ubicacion']?>" required>
				</div>
				<div class="mb-3 col-3">
					<label for="condicion" class="form-label">Condición</label>
					<select id="condicion" class="form-select" name="condicion" required>
					<option <?php if (!isset($row['condicion'])) echo 'selected'?> value="">-</option>
					<option <?php if ($row['condicion']=='Nuevo') echo 'selected'?>>Nuevo</option>
					<option <?php if ($row['condicion']=='Usado') echo 'selected'?>>Usado</option>
					</select>
				</div>

				<div class="mb-3 col-3">
					<label for="laboratorio" class="form-label">Laboratorio</label>
					<select id="laboratorio" class="form-select" name="laboratorio" required>
					<option <?php if (!isset($row['laboratorio'])) echo 'selected'?> value="">-</option>
					<option <?php if ($row['laboratorio']==1) echo 'selected'?>>1</option>
					<option <?php if ($row['laboratorio']==2) echo 'selected'?>>2</option>
					<option <?php if ($row['laboratorio']==3) echo 'selected'?>>3</option>
					<option <?php if ($row['laboratorio']==4) echo 'selected'?>>4</option>
					<option <?php if ($row['laboratorio']==5) echo 'selected'?>>5</option>
					<option <?php if ($row['laboratorio']==6) echo 'selected'?>>6</option>
					</select>
				</div>

				<div class="mb-3 col-3">
					<label for="fecha_caducidad" class="form-label">Fecha de caducidad</label>
					<input type="date" name="fecha_caducidad" class="form-control" id="fecha_caducidad" value="<?=$row['fecha_caducidad']?>" required>
				</div>

				<div class="col-12">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<a href="inicio.php" class="btn btn-secondary">Cancelar</a>
					<a href="../includes/eliminar_quimico.php?id=<?=$row['id']?>" class="btn btn-danger">Eliminar</a>
				</div>
			</form>


        </div>
    </div>
</div>