<?php
// Mensajes de error ---------------------
	$login_error = $_GET['err'];
	$login_msg = $_GET['msg'];
	if (isset($login_error)) { ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<?=$login_error?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php
	}

	if (isset($login_msg)) { ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<?=$login_msg?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php
	}
// --------------------- Mensajes de error
?>