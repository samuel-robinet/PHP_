<?php
class Trajet {
   
  private $id;
  private $pointArriver;
  private $pointDepart;
  private $dateDepart;
  private $nbplaces;
  private $prix;
  private $conducteur_login;


      
  // un getter      
  public function get($nom_attribut) {
       return $this->$nom_attribut;  
  }
     
  // un setter 
  public function setid($nom_attribut, $valeur) {
       $this->$nom_attribut = $valeur;  
  }

  
  public function __construct($data) {
   $this->id = $data[0] ;
   $this->pointArriver =  $data[1];
   $this->pointDepart =  $data[2];
   $this->dateDepart = $data[3];
   $this->nbplaces =  $data[4];
   $this->prix =  $data[5];
   $this->conducteur_login = $data[6];
  }
  
           
  // une methode d'affichage.
  public function afficher() {
      echo $this->id ;
      echo "<br>";
      echo $this->pointArriver ;
      echo "<br>";
      echo $this->pointDepart ;
      echo "<br>";
      echo $this->dateArriver ;
      echo "<br>";
      echo $this->dateDepart ;
      echo "<br>";
      echo $this->nbplaces;
      echo "<br>";
      echo $this->prix ;
      echo "<br>";
      echo $this->conducteur_login ;

  }
}
?>

