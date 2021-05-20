<?php
/* boucle d’affichage */
foreach ($tab_u as $u){
	?>
	<div class="col">
				  <div class="card w-80 border-success mb-3">
				  <?php echo "<img src='assets/Images/".$u->image_voiture." ' class=' card-img-top' alt='Image indispo'>";?>
					<div class="card-body">
					  <h5 class="card-title"><i class="fas fa-car-side"><?php echo $u->marque." ".$u->modele ?></h5>
					  <p class="card-text"><?php echo $u->description ?></p>
					  <a href="" class="btn btn-success">Voir plus</a>
					</div>
				  </div>
				</div>
	<?php
	}
	// fin foreach
?>
