<?php

require_once ("Model.php"); 

class ModelDemande_chauffeur extends Model{

  private $id_chauffeur;
  private $nom_prenom;
  private $email;
  private $tel;
  private $adresse_codepostal;
  private $duree_service;
  private $date_prise_charge;
  private $demande;
  protected static $table = 'demande_chauffeur';
  protected static $primary = 'id_chauffeur';
   
  /* Constructeur 
  public function __construct($id_contact = NULL, $nom_prenom = NULL, $email = NULL, $message = NULL) {
    if (!is_null($id_contact) && !is_null($nom_prenom) && !is_null($email)) && !is_null($message)) {
      $this->id_contact = $id_contact;
      $this->nom_prenom = $nom_prenom;
      $this->email = $email;
      $this->message = $message;
     }
  } 
  */
 public function getId_chauffeur() {
       return $this->id_chauffeur;  
  }
 public function getNom_prenom() {
       return $this->nom_prenom;  
  }
  public function getEmail() {
    return $this->email;  
}
  public function getTel() {
       return $this->tel;  
  }
  public function getDemande() {
    return $this->demande;  
}
public function getAdresse_codepostal() {
    return $this->adresse_codepostal;  
}
public function getDuree_service() {
    return $this->duree_service;  
}
public function getDate_prise_charge() {
    return $this->duree_service;  
}

 
 
}
?>