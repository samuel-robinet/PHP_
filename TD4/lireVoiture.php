<?php
require_once "Model.php";
require_once "ModelVoiture.php";

$rep = Model::$pdo->query("SELECT * FROM voiture"); 
/*
//$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ) //va chercher les infos de la requete
while($tab_obj = $rep->fetch()){
	echo $tab_obj['immatriculation']." ".$tab_obj['couleur']." ".$tab_obj['marque'].'<br> ';;
}
*/

$rep->setFetchMode(PDO::FETCH_CLASS, 'voiture');
//$tab_voit = $rep->fetchAll();
while($tab_voit = $rep->fetch()){
	$tab_voit->afficher();
	echo '<br>';
	echo '<br>';

}

echo '<br>';
echo '<br>';

$donnees = voiture::getAllVoitures();
foreach($donnees as $uneLigne){
    $uneLigne->afficher();
    echo '<br>';
	echo '<br>';

}

$donnees = voiture::getVoitureByImmat('08787975');
$donnees->afficher();

Voiture::Save('78896845','CPGO','gris');
/*
while ($donnees = $reponse->fetch()
{
   // Ton traitement
}
équivaut à 

1
2
3
4
5
$donnees = $reponse->fetchAll();
foreach($donnees as $uneLigne)
{
    // Ton traitement
}
*/

?>