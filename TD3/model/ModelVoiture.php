<?php
require_once "Model.php";
class ModelVoiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }

  public function getCouleur() {
       return $this->couleur;  
  }

  public function getImmatriculation() {
       return $this->immatriculation;  
  } 

     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function setCouleur($couleur2) {
       $this->couleur = $couleur2;
  }

  public function setImmatriculation($immatriculation2) {
       if(strlen($immatriculation2)==8){
        $this->immatriculation = $immatriculation2;
        }
  }
      
  // un constructeur
  /*
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } */

  public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
    }
  }

  public static function getAllVoitures() { 
      try {
       $sql = "SELECT * from voiture";
      } catch (PDOException $e) {
        if (Conf::getDebug()) {
          echo $e->getMessage(); // affiche un message d'erreur
        } else {
          echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';}
        die();
        }

      $rep = Model::$pdo->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
      return $rep->fetchAll(); 
  }

  public static function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
        );

    // On donne les valeurs et on exécute la requête   
    $req_prep->execute($values);

    // On récupère les résultats comme précédemmerequire_once "Model.php";require_once "Model.php";nt
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
        return false;
    return $tab_voit[0];
  }

   public static function save($immatriculation,$marque,$couleur){
            try {
                $sql = Model::$pdo->prepare("INSERT INTO voiture (immatriculation,marque,couleur) VALUES (:immatriculation,:marque,:couleur)");

            } catch (PDOException $e) {
                echo $e->getMessage(); // affiche un message d'erreur
                die();
            }
            $sql->execute(array('immatriculation' => $immatriculation,
            'marque' => $marque,
            'couleur' => $couleur));
          
  }



/*
  // une methode d'affichage.
  public function afficher() {
      echo $this->marque;
      echo "<br>";
      echo $this->couleur;
      echo "<br>";
      echo $this->immatriculation;

  }*/
}

?>

