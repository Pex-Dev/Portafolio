<?php 
use Model\ContactoModel;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validarFormulario();
}else{
    header('location:/');
}

function validarFormulario(){
    $ok = true;
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];    
    if(!$nombre){
        $ok = false;    
    }
    if(strlen($nombre)>30){
        $ok = false;    
    }
    if(!$email){
        $ok = false;    
    }
    if(strlen($email)>30){
        $ok = false;
    }
    if(!$mensaje){
        $ok = false;    
    }
    if(strlen($mensaje)>1000){
        $ok = false;    
    }
    if($ok){
        $contacto = new ContactoModel($nombre,$email,$mensaje);
        if($contacto -> enviarCorreo()){
            header('location:/mensaje?ok=ok');
        }else{
            header('location:/mensaje?ok=error');
        }       
    }else{
        header('location:/mensaje?ok=error');
    }
}

function validarCorreo($correo) {
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $correo)) {
        return false;
    }
    return true;
}