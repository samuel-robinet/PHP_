<?php

require_once File::build_path(array("config","Conf.php"));
//require_once "../config/Conf.php";
class Model{

	 public static $pdo;
 
 	 static public function Init(){
 	 
		try {
			$login=Conf::getLogin();
	 	 	$password=Conf::getPassword();
	 	 	$hostname=Conf::getHostname();
	 	 	$database_name=Conf::getDatabase();

		    // Connexion à la base de données            
			// Le dernier argument sert à ce que toutes les chaines de caractères 
			// en entrée et sortie de MySql soit dans le codage UTF-8
			self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
			                     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			   
			// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		}catch(PDOException $e) {
		    echo $e->getMessage(); 
		    die();
		}
 	 }

 	 
}

Model::Init();

?>