<?php
require_once "Model.php";
 $rep =  PDO::query('SELECT * FROM voiture');

$res = $db->query('SELECT * FROM voiture');
PDO Model::$pdo
?>