<?php
	require_once 'autoload.php';

	$movies = DB::getAllMovies();

	if ($_POST) {
		$actorToSave = new Actor;

		$actorToSave->setNombre($_POST['first_name']);
		$actorToSave->setRating($_POST['rating']);
		$actorToSave->setApellido($_POST['last_name']);

		$saved = DB::saveActor($actorToSave);
	}

	$pageTitle = 'Crear actor';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Agregar Actor</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control"   name="first_name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Rating:</label>
									<input type="text" class="form-control" placeholder="Ej: 8.5" name="rating">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Apellido:</label>
									<input type="text" class="form-control"  name="last_name">
								</div>
							</div>

							<div class="col-6">
								<div class="form-group">
									<label>Pelicula favorita del actor:</label>
									<select class="form-control" name="genre_id">
										<option value="">pelicula</option>
										<?php foreach ($movies as $movie): ?>
											<option value="<?php echo $movie->getId() ?>"><?php echo $movie->getTitle() ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary">GUARDAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Actor agregado con éxito!' : '¡No se pudo agregar al actor!' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>
