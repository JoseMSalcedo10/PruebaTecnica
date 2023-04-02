<?php


class Conexion{

	static public function GetConexion(){
		$link = new PDO("mysql:host=localhost;dbname=prueba_tecnica",
			            "root",
			            "");
		$link->exec("set names utf8");

		return $link;
	}
}