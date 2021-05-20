<?php

require_once ("Model.php"); 
class ModelVoiture extends Model {
  private $immatriculation;
  private $marque;
  private $modele;
  private $annee;
  private $boitevitesse;
  private $kilometrage;
  private $puissance_fiscale;
  private $carburant;
  private $description;
  private $proprietaire_ncin;
  protected static $table = 'voiture';
  protected static $primary = 'immatriculation';
  


  
  public function getImmatriculation() {
       return $this->immatriculation;  
  }
  


  public function getProprietaire_ncin() {
       return $this->proprietaire_ncin;  
  }
  
  
  public function __construct($m = NULL, $c = NULL, $i = NULL, $p = NULL) {
    if (!is_null($m) && !is_null($c) && !is_null($i)) {
      $this->marque = $m;
      $this->modele = $c;
      $this->immatriculation = $i;
	  $this->proprietaire_ncin=$p;
    }
  }    
}
?>
