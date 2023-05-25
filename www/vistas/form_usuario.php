
<div class="mb-3 col-6">
	<label for="nombreUsuario" class="form-label">Nombre</label>
	<input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario'] ?>">
	<input type="text" name="nombreUsuario" class="form-control" id="nombreUsuario" value="<?=$row['nombreUsuario']?>" required>
</div>

<div class="mb-3 col-6">
	<label for="cargo" class="form-label">Cargo</label>
	<select id="cargo" class="form-select" name="cargo" aria-label="Selecciona el tipo de usuario." required>
	<option <?php if (!isset($row['cargo'])) echo 'selected'?> value="">-</option>
	<option <?php if ($row['cargo']=='Administrador') echo 'selected'?>>Administrador</option>
	<option <?php if ($row['cargo']=='Pasante') echo 'selected'?> >Pasante</option>
	<option <?php if ($row['cargo']=='Médico') echo 'selected'?> >Médico</option>
	</select>
</div>

<div class="mb-3 col-6">
	<label for="correo" class="form-label">Correo</label>
	<input type="email" name="correo" class="form-control" value="<?=$row['correo']?>" id="correo" required>
</div>