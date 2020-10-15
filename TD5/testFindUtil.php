<?php

require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';


$donnees1 = Trajet::findPassagers($_GET["id"]);



//$donnees = Trajet::findPassagers(4);
foreach($donnees1 as $uneLigne){
    $uneLigne-> afficher();
    echo '<br>';
	echo '<br>';

}


?>