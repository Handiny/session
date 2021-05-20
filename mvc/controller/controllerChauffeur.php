<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelDemande_chauffeur.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];

	
	
switch ($action) {
   	
	case "create":
		$pagetitle = "Enregistrer un demande de chauffeur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
        case "created":
            if (isset($_REQUEST['nom_prenom']) && isset($_REQUEST['email']) && isset($_REQUEST['tel']) && isset($_REQUEST['adresse_codepostal']) && isset($_REQUEST['duree_service']) && isset($_REQUEST['date_prise_charge']) && isset($_REQUEST['demande'])){
                $id_chauffeur=NULL;
                $nom_prenom= $_REQUEST["nom_prenom"];
                $email = $_REQUEST["email"];
                $tel = $_REQUEST["tel"];
                $adresse_codepostal = $_REQUEST["adresse_codepostal"];
                $duree_service = $_REQUEST["duree_service"];
                $date_prise_charge = $_REQUEST["date_prise_charge"];
                $demande = $_REQUEST["demande"];
              
                
                $recherche = ModelDemande_chauffeur::select($id_chauffeur);
                if($recherche==null){
                    $u = new ModelDemande_chauffeur($nom_prenom, $email, $tel,$adresse_codepostal,$duree_service,$date_prise_charge,$demande);	
                    $tab = array(
                    "id_chauffeur" => NULL,
                    "nom_prenom" => $nom_prenom,
                    "email" => $email,
                    "tel" => $tel,
                    "adresse_codepostal" => $adresse_codepostal,
                    "duree_service" => $duree_service,
                    "date_prise_charge" => $date_prise_charge,
                    "demande" => $demande,
                    );				
                    $u->insert($tab);
                    $pagetitle = "demande Enregistrée";
                    ?>
                    <script type="text/javascript">
                       alert('Demande enregistrée avec succés!');
                    </script>
                    <?php
                    header('Location:index.php?controller=chauffeur&action=create');
                    
                    require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	

		
	
}
?>

