<?php
	require_once 'autoload.php';

	$actores = DB::getActores();

	$pageTitle = 'Listado de películas';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<table class="table table-striped">
						<thead class="thead-dark">
			    			<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Rating</th>
								<th scope="col">Pelicula favorita</th>
			    			</tr>
			  			</thead>
			  			<tbody>
							<?php foreach ($actores as $actor): ?>
								<tr>
									<th scope="row"><?php echo $actor->getNombre(); ?></th>
									<td><?php echo $actor->getApellido(); ?></td>
									<td><?php echo $actor->getRating(); ?></td>
									<td><?php echo $actor->getNombrePeliculaFavorita(); ?></td>
								</tr>
							<?php endforeach; ?>
			  			</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
