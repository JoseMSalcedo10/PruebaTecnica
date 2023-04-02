<?php

//llamar los demas controladores para usar sus datos
class mainController
{
    //variables para obtener los datos de los demas archivos


    //constructor para asignar datos a las variables anteriores
    public function __construct()
    {
        if(!isset($_SESSION['login'])){

            include 'views/login.php';

            die();
        }
    }

    //Función para enviar a la vista principal
    public function index()
    {
        if(isset($_SESSION['login'])){
            require_once 'partials/cabecera.php';
            include 'views/inicio.php';
            $url = "inicio";
        }else{
            include 'views/login.php';
        }

        $this->cargarfooter($url);
        
    }

    public function cargarfooter($url)
    {
        if(isset($_SESSION['login'])){
            include 'partials/footer.php';
        echo '<script src="assets/Js/'.$url.'.js"></script>';
        }
    }

    public function inicio()
    {
        if(isset($_SESSION['login'])){
            include '../views/inicio.php';
        }
    }

    //Función para cargar la pagina
    public function Redirect($action)
    {

        require_once 'partials/cabecera.php';

        include 'views/'.$action.'.php';

        $this->cargarfooter($action);
    }
    public function salir()
    {
        session_destroy();

        include 'views/login.php';
    }

    //Función para saber a donde se dirige el usuario
    public function direcHome()
    {
        $nombrePagina = 'formularioPrestamo';
       //Condición para saber hacía donde quiere ir el usuario 
       if (!isset($a)) {
        switch ($nombrePagina) {
            case 'formularioPrestamo':
                $url = "prestamos/formularioPrestamo.php";
                break;
            }
        include_once 'view/home.php';
        return $url;
        }
    }
}