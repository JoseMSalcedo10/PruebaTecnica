<?php

    session_start();
    
    
    include_once 'controllers/mainController.php';
    // include_once 'config/basededatos.php';

    $mainController = new mainController();

    if (!isset($_GET['ruta'])) {
        
        $mainController->index();
        // $mainController->cargarSesion();

    }else {

        $url = $_GET['ruta'];

        if($url == "salir"){
            $mainController->salir();
        }else{
        $mainController->Redirect($url);
        }
    }
   
    
?>