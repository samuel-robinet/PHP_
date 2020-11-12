<?php

require_once File::build_path(array("model", "Model.php"));

class ModelVoiture extends Model {

    private $marque;
    private $couleur;
    private $immatriculation;
    protected static $object = 'voiture';
    protected static $primary = 'immatriculation';

    // Getter générique
    public function get($nom_attribut) {
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    // Setter générique
    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }

    // un getter      
    public function getMarque() {
        return $this->marque;
    }

    // un setter 
    public function setMarque($marque2) {
        $this->marque = $marque2;
    }

    // un getter      
    public function getImmatriculation() {
        return $this->immatriculation;
    }

    // un setter 
    public function setImmatriculation($immatriculation2) {
        $this->immatriculation = $immatriculation2;
    }

    // un getter      
    public function getCouleur() {
        return $this->couleur;
    }

    // un setter 
    public function setCouleur($couleur2) {
        $this->couleur = $couleur2;
    }

    // un constructeur
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }

//    // une methode d'affichage.
//    public function afficher() {
//        echo "<p> Voiture {$this->immatriculation} de marque {$this->marque} (Couleur {$this->couleur})  </p>";
//    }
//    public static function getAllVoitures() {
//        try {
//            $pdo = Model::$pdo;
//            $sql = "SELECT * from voiture";
//            $rep = $pdo->query($sql);
//            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
//            return $rep->fetchAll();
//        } catch (PDOException $e) {
//            if (Conf::getDebug()) {
//                echo $e->getMessage(); // affiche un message d'erreur
//            } else {
//                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
//            }
//            die();
//        }
//    }
//    public static function getVoitureByImmat($immat) {
//        try {
//            $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
//            // Préparation de la requête
//            $req_prep = Model::$pdo->prepare($sql);
//
//            $values = array(
//                "nom_tag" => $immat,
//                    //nomdutag => valeur, ...
//            );
//            // On donne les valeurs et on exécute la requête	 
//            $req_prep->execute($values);
//
//            // On récupère les résultats comme précédemment
//            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
//            $tab_voit = $req_prep->fetchAll();
//            // Attention, si il n'y a pas de résultats, on renvoie false
//            if (empty($tab_voit))
//                return false;
//            return $tab_voit[0];
//        } catch (PDOException $e) {
//            if (Conf::getDebug()) {
//                echo $e->getMessage(); // affiche un message d'erreur
//            } else {
//                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
//            }
//            die();
//        }
////    }
//
//    public function save() {
//        try {
//            $sql = "INSERT INTO voiture (immatriculation, marque, couleur) VALUES (:immat, :marque, :couleur)";
//            // Préparation de la requête
//            $req_prep = Model::$pdo->prepare($sql);
//
//            $values = array(
//                "immat" => $this->immatriculation,
//                "marque" => $this->marque,
//                "couleur" => $this->couleur,
//            );
//            // On donne les valeurs et on exécute la requête	 
//            return $req_prep->execute($values);
//        } catch (PDOException $e) {
//            if (Conf::getDebug()) {
//                if ($e->errorInfo[1] == 1062) {
//                    // Duplicate entry
//                    return false;
//                }
//                echo $e->getMessage(); // affiche un message d'erreur
//            } else {
//                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
//            }
//            die();
//        }
//    }

//    public static function deleteByImmat($immat) {
//        try {
//            $sql = "DELETE FROM voiture WHERE immatriculation=:immat;";
//            // Préparation de la requête
//            $req_prep = Model::$pdo->prepare($sql);
//
//            $values = array(
//                "immat" => $immat
//            );
//            // On donne les valeurs et on exécute la requête	 
//            return $req_prep->execute($values);
//        } catch (PDOException $e) {
//            if (Conf::getDebug()) {
//                echo $e->getMessage(); // affiche un message d'erreur
//            } else {
//                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
//            }
//            die();
//        }
////    }
//
//    public static function update($data) {
//        try {
//            $sql = "UPDATE voiture SET marque=:marque, couleur=:couleur WHERE immatriculation=:immat";
//            // Préparation de la requête
//            $req_prep = Model::$pdo->prepare($sql);
//
//            // On donne les valeurs et on exécute la requête	 
//            return $req_prep->execute($data);
//        } catch (PDOException $e) {
//            if (Conf::getDebug()) {
//                echo $e->getMessage(); // affiche un message d'erreur
//            } else {
//                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
//            }
//            die();
//        }
//    }
}

?>