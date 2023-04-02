<?php
require_once '../config/bd.php';

class userModel{

    public static function validarUser($user){

        $stmt = Conexion::GetConexion()->prepare("SELECT * FROM usuarios WHERE usu_user = :usu_user");
        $stmt->bindParam(":usu_user", $user, PDO::PARAM_STR);
		$stmt->execute();

        $count = $stmt->rowCount();

        if($count >= 1) {
            return $stmt -> fetch(PDO::FETCH_ASSOC);
        }else{
            return "No existe";
        }


    }
}
?>