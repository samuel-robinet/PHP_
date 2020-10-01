<?php

 /*
require_once ('../model/ModelVoiture.php'); // chargement du modèle
$tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
require ('../view/voiture/list.php');  //redirige vers la vue */

require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {
    	
    	$v = ModelVoiture::getVoitureByImmat($_GET['immat']);     //appel au modèle pour gerer la BD
    	if(!$v){
    		$error ="Erreur aucune voiture ne correspond à cette immatriculation";
    		require ('../view/voiture/error.php');  //"redirige" vers la vue
    	}else{
    		 require ('../view/voiture/detail.php');  //"redirige" vers la vue
    	}

    }
}
?>
