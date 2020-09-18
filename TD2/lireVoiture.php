<?php
require_once "Model.php";
require_once "Voiture.php";

$rep = Model::$pdo->query("SELECT * FROM voiture"); 
/*
//$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ) //va chercher les infos de la requete
while($tab_obj = $rep->fetch()){
	echo $tab_obj['immatriculation']." ".$tab_obj['couleur']." ".$tab_obj['marque'].'<br> ';;
}
*/

$rep->setFetchMode(PDO::FETCH_CLASS, 'voiture');
//$tab_voit = $rep->fetchAll();
while($tab_voit = $rep->fetchAll()){
	$tab_voit->afficher();
}



?>