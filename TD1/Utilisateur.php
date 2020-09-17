<?php
class Utilisateur {
   
  private $login;
  private $nom;
  private $prenom;
      
  // un getter      
  public function getlogin() {
       return $this->login;  
  }

  public function getnom() {
       return $this->nom;  
  }

  public function getprenom() {
       return $this->prenom;  
  } 

     
  // un setter 
  public function setlogin($login2) {
       $this->login = $login2;
  }

  public function setnom($nom2) {
       $this->nom = $nom2;
  }

  public function setImmatriculation($prenom2) {
       $this->prenom = $prenom2;
  }
      
  // un constructeur
  public function __construct($l, $n, $p)  {
   $this->login = $l;
   $this->nom = $n;
   $this->prenom = $p;
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

