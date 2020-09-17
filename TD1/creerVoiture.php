<?php require_once "Voiture.php";
      

$voiture1 = new Voiture($_POST["immatriculation"],$_POST["marque"],$_POST["couleur"]);

$voiture1->afficher();
?>