<?php
require_once "Model.php";
$rep = $bdd->query('SELECT * FROM voiture'); // $rep=Model::$pdo->query($sql);
//$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
//$tab_obj=$tab_obj[0]->AUTO_INCREMENT-1;
/*
foreach ($tab_obj[0] as $key => $useless){
    print "<th>$key</th>";*/

$resultat = $mysqli->query($rep);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['immatriculation'].' '.$ligne['couleur'].' '.$ligne['marque'].'<br> ';
			
		}
		$mysqli->close(); 

?>