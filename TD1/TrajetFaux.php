<?php
class Trajet {
   
  private $id;
  private $pointArriver;
  private $pointDepart;
  private $dateArriver;
  private $dateDepart;
  private $nbplaces;
  private $prix;
  private $conducteur_login;
      
  // un getter      
  public function getid() {
       return $this->id;  
  }

  public function getpointArriver() {
       return $this->pointArriver;  
  }

  public function getpointDepart() {
       return $this->pointDepart;  
  } 

  public function getdateArriver() {
       return $this->dateArriver;  
  } 

  public function getdateDepart() {
       return $this->pointDepart;  
  }

  public function getnbplaces() {
       return $this->nbplaces;  
  } 

  public function getprix() {
       return $this->prix;  
  } 

  public function getconducteur_login() {
       return $this->conducteur_login;  
  } 

     
  // un setter 
  public function setid($id2) {
       $this->id = $id2;  
  }

  public function setpointArriver($pointArriver2) {
       $this->pointArriver = $pointArriver2;   
  }

  public function getpointDepart($pointDepart2) {
       $this->pointDepart = $pointDepart2; 
  } 

  public function getdateArriver($dateArriver2) {
       $this->dateArriver = $dateArriver2; 
  } 

  public function getdateDepart($dateDepart2) {
       $this->dateDepart = $dateDepart2; 
  }

  public function getnbplaces($nbplaces2) {
       $this->nbplaces = $nbplaces2; 
  }

  public function getprix($prix2) {
       $this->prix = $prix2; 
  } 
  
  public function getconducteur_login($conducteur_login2) {
       $this->conducteur_login = $conducteur_login2;   
  } 
      
  // un constructeur
  public function __construct($id, $pa, $pd, $da,$dd,$nbp,$p,$c)  {
   $this->id = $i;
   $this->pointArriver = $pa;
   $this->pointDepart = $pd;
   $this->dateArriver = $da;
   $this->dateDepart = $dd;
   $this->nbplaces = $nbp;
   $this->prix = $p;
   $this->conducteur_login = $c;
  } 
           
  // une methode d'affichage.
  public function afficher() {
      echo $this->login;
      echo "<br>";
      echo $this->nom;
      echo "<br>";
      echo $this->prenom;

  }
}
?>

