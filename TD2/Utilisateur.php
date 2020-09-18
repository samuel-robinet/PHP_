<?php
class Utilisateur {
   
  private $login;
  private $nom;
  private $prenom;
      
  // un getter      
  public function get($nom_attribut) {
       return $this->$nom_attribut;  
  }
     
  // un setter 
  public function set($nom_attribut, $valeur) {
       $this->$nom_attribut = $valeur;  
  }
      
  // un constructeur
  public function __construct($l = NULL, $n = NULL, $p = NULL) {
  if (!is_null($l) && !is_null($n) && !is_null($p)) {
    $this->login = $l;
    $this->nom = $n;
    $this->prenom = $p;
    }
  }

  public static function getAllUtilisateur() { 
      try {
       $sql = "SELECT * from utilisateur";
      } catch (PDOException $e) {
        if (Conf::getDebug()) {
          echo $e->getMessage(); // affiche un message d'erreur
        } else {
          echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';}
        die();
        }

      $rep = Model::$pdo->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS, 'utilisateur');
      return $rep->fetchAll(); 
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

