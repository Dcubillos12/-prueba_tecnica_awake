<?php 

class Conexion{

	static public function conectar(){
		
		/*
		
		#PDO("NOMBER DEL SERVIDOR", "NOMBRE DE LA DB","USUARIO","CONTRSEÑA")
		 */

		$link = new PDO("mysql:host=localhost;dbname=database-2",
			"root",
			"");
		$link->exec("set names utf8");
		return $link;
	}
}

?>