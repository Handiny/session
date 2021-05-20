<?php
//$controller = "voiture";
require_once ("{$ROOT}{$DS}model{$DS}ModelVoiture.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des voitures";
        $view = "readAll";
       	$tab_u = ModelVoiture::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['immatriculation'])){
			$immatriculation = $_REQUEST['immatriculation'];
			$u = ModelVoiture::select($immatriculation);
				if($u!=null){
					$pagetitle = "Details de la voiture";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['immatriculation'])){
			$ncin = $_REQUEST['immatriculation'];
			$del = ModelVoiture::select($immatriculation);
			if($del!=null){
			$del->delete($immatriculation);
			header('Location: index.php?controller=voiture&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer une voiture";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['immatriculation']) && isset($_REQUEST['marque']) && isset($_REQUEST['modele']) && isset($_REQUEST['annee']) && isset($_REQUEST['boitevitesse']) && isset($_REQUEST['kilometrage'])  && isset($_REQUEST['puissance_fiscale']) && isset($_REQUEST['carburant']) && isset($_REQUEST['description'])){
			$immatriculation = $_REQUEST["immatriculation"];
			$marque = $_REQUEST["marque"];
			$modele = $_REQUEST["modele"];
			$annee = $_REQUEST["annee"]; 
			$boitevitesse = $_REQUEST["boitevitesse"];
			$kilometrage = $_REQUEST["kilometrage"];
			$puissance_fiscale = $_REQUEST["puissance_fiscale"];
			$carburant = $_REQUEST["carburant"];
			$description = $_REQUEST["description"];
            //$prop = $_REQUEST["prop"];
			
			$recherche = ModelVoiture::select($immatriculation);
			if($recherche==null){
				$u = new ModelVoiture($immatriculation, $marque, $modele, $annee, $boitevitesse, $kilometrage, $puissance_fiscale, $carburant, $description);	
				$tab = array(
				"immatriculation" => $immatriculation,
				"marque" => $marque,
				"modele" => $modele,
				"annee" => $annee,
				"boitevitesse" => $boitevitesse,
				"kilometrage" => $kilometrage,
				"puissance_fiscale" => $puissance_fiscale,
				"carburant" => $carburant,
				"description" => $description
                //"proprietaire_ncin" => 
				);				
				$u->insert($tab);
				$pagetitle = "Voiture Enregistrée";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['immatriculation'])){
			$immatriculation = $_REQUEST['immatriculation'];
			$up = ModelVoiture::select($immatriculation);
			if($up!=null){
				$pagetitle = "Modifier la voiture ";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['immatriculation']) && isset($_REQUEST['marque']) && isset($_REQUEST['modele']) && isset($_REQUEST['annee']) && isset($_REQUEST['boitevitesse']) && isset($_REQUEST['kilometrage'])  && isset($_REQUEST['puissance_fiscale']) && isset($_REQUEST['carburant']) && isset($_REQUEST['description'])){
			$oldnimm = $_REQUEST['immatriculation'];
			$tab = array(
				"immatriculation" => $immatriculation,
				"marque" => $marque,
				"modele" => $modele,
				"annee" => $annee,
				"boitevitesse" => $boitevitesse,
				"kilometrage" => $kilometrage,
				"puissance_fiscale" => $puissance_fiscale,
				"carburant" => $carburant,
				"description" => $description
                //"proprietaire_ncin" => 
				);
			$o = ModelVoiture::select($oldnimm);
			if($o!=null){
				$u = $o->update($tab, $oldnimm);		
				$pagetitle = "Voiture modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}

?>
