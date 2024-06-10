<?php 

namespace Model;
require '../vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;


class ContactoModel{
    protected $nombre;
    protected $correo;
    protected $mensaje;
    public function __construct($nombre,$correo,$mensaje){
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
    }    

    public function enviarCorreo(){
        $dotenv = Dotenv::createImmutable(__DIR__ .'/..');
        $dotenv->load();

        $phpmailer = new PHPMailer();

        try {
            // Configurar protocolo SMTP
            $phpmailer->isSMTP();
            $phpmailer->Host = $_ENV['SMTP_HOST'];
            $phpmailer->SMTPAuth = true;
            $phpmailer->Username = $_ENV['SMTP_USERNAME'];
            $phpmailer->Password = $_ENV['SMTP_PASSWORD'];
            $phpmailer->SMTPSecure = 'tls'; 
            $phpmailer->Port = 587;
            
            // Configurar el contenido del email
            $phpmailer->setFrom('contacto@brayandev.com', 'BrayanDev.com');
            $phpmailer->addAddress('contacto@brayandev.com', 'BrayanDev.com');
            $phpmailer->Subject = 'Nuevo mensaje de '. $this->nombre.' en portafolio';
            $phpmailer->isHTML(true);
            $phpmailer->CharSet = 'UTF-8';

            // Definir contenido
            $contenido =  '
            <html>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
            <style>
            body{
                    font-family: "Roboto", sans-serif;   
                    margin: 0;  
                    color: #424242;  
                }
                .contenedor{
                    margin: 0 auto;
                    background-color: #e3f5fc;
                    width: 100%;
                    max-width: 800px;
                    height: auto;
                    padding: 20px;
                }
                h1{
                    padding: 20px;
                    text-align: center;
                    text-decoration: none;
                    color: #0095c5;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                }
                h2{
                    text-align: center;
                    margin-top: 0;
                }
                .logo__dev{
                    color: orange;
                }
                .logo__nombre{
                    color:white;
                }
                .mensaje{
                    padding: 20px;
                    background-color: white;
                    min-height: 400px;
                }
            </style>
            <body>
                <div class="contenedor">
                    <h1>&lt;/<span class="logo__nombre">Brayan</span><span class="logo__dev">Dev</span>></h1>
                    <div class="mensaje">
                        <h2>Nuevo Mensaje</h2> 
                        <h3>Nombre: '.$this->nombre.'</h3>
                        <h3>Correo: '.$this->correo.'</h3>
                        <p>'.$this->mensaje.'</p>
                    </div>
                </div>
            </body>
            </html>';   

            $phpmailer->Body = $contenido;
            $phpmailer->AltBody = 'Nuevo mensaje en el portafolio. De '. $this->nombre.' Contenido: '. $this->mensaje;

            // Enviar email
            if ($phpmailer->send()) {
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            //echo "El mensaje no se pudo enviar. Error de PHPMailer: {$phpmailer->ErrorInfo}";
            return false;
        }
    }
}