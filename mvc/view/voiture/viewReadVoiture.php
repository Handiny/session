<?php
	$immatriculation=$u->getImmatriculation();
	echo '<p>immatriculation : '.$immatriculation;
	echo '<br/>Marque : '.$u->getMarque().' - Modele : '.$u->getModele().'</p>';
	echo '<div class= updt><a href="index.php?controller=voiture&action=update&immatriculation='.$immatriculation.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=voiture&action=delete&immatriculation='.$immatriculation.'">
	 Supprimer </a></div> ';
?>