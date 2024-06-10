<?php 
namespace MVC;

class Router{
    public function redireccionar(){
        $urlActual = $this->obtenerUrl();
        switch ($urlActual) {
            case '/index':
                include 'views/home.php';
                break;
            case '/':
                include 'views/home.php';
                break;
            case '/enviar-formulario':
                include 'controllers/ContactoController.php';
                break;
            case '/mensaje':
                include 'views/message.php';
                break;    
            default:
                header('location:/');
        }
    }
    protected function obtenerUrl(){
        // Obtener la URL actual, priorizando REQUEST_URI
        if (isset($_SERVER['REQUEST_URI'])) {
            $urlActual = $_SERVER['REQUEST_URI'];
            $urlActual = strtok($urlActual, '?');  // Esto elimina los parámetros de consulta
        } else if (isset($_SERVER['PATH_INFO'])) {
            $urlActual = $_SERVER['PATH_INFO'];
        } else {
            $urlActual = '/';
        }
        return $urlActual;
    }
}