<?php 
    if (!$_SERVER['REQUEST_METHOD'] === 'GET') {
        header('location:/');
    }
    if(!isset($_GET['ok'])){
        header('location:/');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio de Brayan">
    <meta name="keywords" content="HTML, CSS, JavaScript, Desarrollador Web, PHP">
    <meta name="author" content="Brayan Dev">
    <title>Brayan Dev</title>
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="icon" type="image/x-icon" href="build/img/bicon.ico">
</head>
<body class="fondo-mensaje">
    <div class="mensaje">
        
        <?php 
            if($_GET['ok']==='ok'){
                echo '<img src="build/img/ok.svg" alt="Logo Ok">';
                echo '<h1>¡Mensaje Enviado!</h1>';
                echo '<p>Tu mensaje se ha enviado correctamente</p>';
            }else{
                echo '<img src="build/img/error.svg" alt="Logo Ok">';
                echo '<h1>¡Error!</h1>';    
                echo '<p>Ha ocurrido un error al enviar tu mensaje</p>';
            }
        ?>
        <form action="/">
            <input class="btnOk" type="submit" value="Continuar" />
        </form>
    </div>
</body>
</html>