<?php
require_once 'ControllerVoiture.php';
//require_once 'File.php';
//ControllerVoiture::readAll(); // Appel de la méthode statique $action de ControllerVoiture


// On recupère l'action passée dans l'URL
$action = $_GET['action']; //http://webinfo.iutmontp.univ-montp2.fr/~robinets/PHP/TD3/controller/routeur.php?action=readAll
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 
?>
