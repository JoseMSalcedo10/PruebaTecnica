<?php

require_once '../models/userModel.php';

class UserController{
    public static function loginUsuario($user, $pass){
        
        //validar si el usuario existe
        $obj = new userModel;
        $val = $obj::validarUser($user);

        if($val != "No existe"){
            $pass = crypt($_POST["pass"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            if($pass === $val['usu_pass']){
                session_start();
                $_SESSION['login'] = 'OK';
                $_SESSION['user'] = $val['usu_user'];
                $_SESSION['nombre'] = $val['usu_nombre'];

                header("Refresh:0; url=index.php");
            }else{
                return "error pass";
            }
        }else{
            echo "error user";
        }

        
    }
}


$funcion = $_POST['funcion'];
if ($funcion == 'loginUsuario') {
    UserController::loginUsuario($_POST['user'], $_POST['pass']);
}
// if ($funcion == 'obtenerAyudaVenta') {
//     $id = $_POST['id'];
//     AyudaVentasController::obtenerAyudaVenta($id);
// }
// if ($funcion == 'editarAyudaVenta') {
//     AyudaVentasController::editarAyudaVenta($_POST, $_FILES);
// }
// if ($funcion == 'editarSarlaftGeneric1') {
//     AyudaVentasController::editarSarlaftGeneric1($_FILES);
// }
// if ($funcion == 'editarSarlaftGeneric2') {
//     AyudaVentasController::editarSarlaftGeneric2($_FILES);
// }

// $pass = crypt($_POST["pass"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


// if($pass == '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2'){
// echo $pass;
// }else{
//     echo "error";
// }


?>