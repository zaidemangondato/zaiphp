<?php  
/**
 *  For your System Functions such as C.R.U.D Manipulations
 *	C.R.U.D (Create, Read, Update, Delete)
 */
require_once 'config/sysconfig.php';

class systemfunctions 
{
	public static function getdbconnection(){
		$server = sysconfig::$servername;
		$user = sysconfig::$username;
		$pass = sysconfig::$password;
		$db = sysconfig::$database;
		$pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	// Always add " $pdo = systemfunctions::getdbconnection(); " on your PHP functions if you have Database driven functions
	public static function myFunction(){
		try{
			$pdo = systemfunctions::getdbconnection();
			echo "Successfully Connected,<br>Database Name: ".sysconfig::$database;
			return $pdo;

		}catch(PDOException $e){
			echo "<span style='color: red;'>System ERROR: </span>".$e->getMessage();
		}
		
	}
	
}
?>