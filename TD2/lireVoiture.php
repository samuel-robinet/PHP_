<?php
require_once "Model.php";
$rep = Model::$pdo->query("SELECT * FROM voiture"); // 
 //va chercher les infos de la requete
//$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ)
while($tab_obj = $rep->fetch()){
	echo $tab_obj['immatriculation']." ".$tab_obj['couleur']." ".$tab_obj['marque'].'<br> ';;
}

//$tab_obj=$tab_obj[0]->AUTO_INCREMENT-1;
/*
foreach ($tab_obj[0] as $key => $useless){
    print "<th>$key</th>";

$resultat = $mysqli->query($rep);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['immatriculation'].' '.$ligne['couleur'].' '.$ligne['marque'].'<br> ';
			
		}
		$mysqli->close(); */

?>