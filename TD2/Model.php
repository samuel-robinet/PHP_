<?php
require_once "Conf.php";
class Model{

	 public static $pdo;
 
 	 static public function Init(){
 	 	$login=Conf::getLogin();
 	 	$password=Conf::getPassword();
 	 	$hostname=Conf::getHostname();
 	 	$database_name=Conf::getDatabase();

		self::$pdo=new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);
		
 	 }

 	 
}

Model::Init();

?>