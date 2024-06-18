<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio de Brayan">
    <meta name="keywords" content="HTML, CSS, JavaScript, Desarrollador Web, PHP">
    <meta name="author" content="Brayan Dev">
    <title>Brayan Desarrollador Web</title>
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="build/css/btn-dark.css">
    <link rel="icon" type="image/x-icon" href="build/img/bicon.ico">
</head>
<body>
    <header class="header">   
        <div class="logo">
            <h1>&lt;/<span class="logo__nombre">Brayan</span><span class="logo__dev">Dev</span>></h1>
            <svg class="menu" id="menu" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>    
        </div>    
        <nav class="navegacion">
            <a id="enlace" class="enlace" href="#sobre-mi">Sobre Mi</a>            
            <a id="enlace" class="enlace"href="#habilidades">Habilidades</a>
            <a id="enlace" class="enlace"href="#proyectos">Proyectos</a> 
            <a id="enlace" class="enlace"href="#contacto">Contacto</a>   
            <div class="btn-dark"></div>          
        </nav>    
    </header>
    <main>
        <section id="sobre-mi" class="sobre-mi snap-center">
            <div class="foto">
                <picture>
                    <source srcset="build/img/profile-pic.webp" type="image/webp">
                    <img loading="lazy" width="250" height="250"  src="build/img/profile-pic.png" alt="Imagen de perfil">
                    <div class="fondo"></div>
                </picture>
                </div>            
            <div class="descripcion">
                <div class="texto">
                    <h1>Hola, soy Brayan</h1>
                    <p>Soy un entusiasta desarrollador web con una sed constante de conocimiento. Me emociona aprender y crecer en el mundo del desarrollo web, explorando nuevas tecnologías y creando experiencias interactivas para los usuarios.</p>
                </div>
                <div class="enlaces-iconos">
                    <a href="https://www.linkedin.com/in/brayan-cerda-moya-02730b2b4/">
                        <img src="build/img/linkedin.svg" alt="Icono Linkedin">
                    </a>
                    <a href="https://github.com/PexWeb">
                        <img class="github" src="build/img/GitHub.svg" alt="Icono GitHub">
                    </a>
                </div>
            </div>
        </section>
        <section id="habilidades" class="habilidades bordeIzquierda snap-center">   
            <div class="contenedor">                
                <h2 class="titulo"><span class="span-titulo"><span class="span-etiqueta">&lt;/</span>Habilidades<span class="span-etiqueta">></span></span></h2>
                <p>
                    Tengo experiencia con las siguientes tecnologías:
                </p>
                <div class="habilidades-contenedor">
                    <div class="tecnologia">
                        <img src="build/img/Html.svg" alt="Logo de Html 5">                    
                    </div>
                    <div class="tecnologia">
                        <img src="build/img/Css.svg" alt="Logo de Css 3">
                        
                    </div>
                    <div class="tecnologia">
                        <img src="build/img/JavaScript.svg" alt="Logo de JavaScript">
                    </div>
                    <div class="tecnologia">
                        <img src="build/img/Npm.svg" alt="Logo de Npm">
                        
                    </div>
                    <div class="tecnologia">
                        <img src="build/img/Gulp.svg" alt="Logo de  Gulp">
                                        </div>
                    <div class="tecnologia">
                        <img src="build/img/Sass.svg" alt="Logo de Sass">
                                        </div>
                    <div class="tecnologia">
                        <img src="build/img/PHP.svg" alt="Logo de php">
                                    </div>
                    <div class="tecnologia">
                        <img src="build/img/MySql.svg" alt="Logo de MySql">                    
                    </div>
                    <div class="tecnologia">
                        <img src="build/img/Git.svg" alt="Logo de Git">                    
                    </div>
                    <div class="tecnologia">
                        <img src="build/img/GitHub.svg" alt="Logo de GitHub">                    
                    </div>
                </div>
            </div> 
        </section>
        <section id="proyectos" class="proyectos bordeDerecha snap-center">
            <div class="contenedor">
                <h2 class="titulo"><span class="span-titulo"><span class="span-etiqueta">&lt;/</span>Mis Proyectos<span class="span-etiqueta">></span></span></h2>
                <p>
                    Explora una muestra de los proyectos en los que he trabajado:
                </p>
                <div class="proyectos-contenedor" >
                    <div class="proyecto"
                        data-titulo="Chat Bot"
                        data-descripcion="Este proyecto es un chatbot que permite a los usuarios interactuar con modelos de inteligencia artificial ejecutados localmente utilizando WebGPU y JavaScript. Los modelos se descargan desde una CDN y se ejecutan en el dispositivo del usuario. El rendimiento del chatbot puede variar según las especificaciones del PC del usuario. Se recomienda utilizar un dispositivo con capacidad adecuada de VRAM para una experiencia óptima."
                        data-caracteristicas="Selección de Modelos-Ejecución Local-Aviso de Requerimientos"
                        data-tecnologias="HTML-JavaScript-Sass"                        
                        data-github="https://github.com/Pex-Dev/chat-bot"
                        data-live="https://pex-chatbot.netlify.app/"
                    >
                        <div class="contenido">
                            <picture>
                                <source srcset="build/img/thumbnail-chatbot.webp" type="image/webp">
                                <img loading="lazy"  src="build/img/thumbnail-chatbot.jpg" alt="Aplicación de chat con IA">
                            </picture>
                            <div class="overlay">                                
                                <div class="contenido-overlay">
                                    <h3>Chat Bot</h3>
                                    <p>
                                        Chat con inteligencia artificial
                                    </p>
                                </div>
                            </div>
                        </div>                        
                    </div> 
                    <div class="proyecto"
                        data-titulo="App Clima"
                        data-descripcion="App Clima es una aplicación web que muestra el pronóstico del clima utilizando una API de clima. Los usuarios pueden buscar la ubicación deseada para obtener la información meteorológica actual o permitir que la aplicación detecte automáticamente su ubicación mediante geolocalización. Este proyecto me permitió aprender a integrar y consumir APIs. La aplicación es completamente responsiva y está desarrollada utilizando HTML, JavaScript, PHP, Gulp y Sass."
                        data-caracteristicas="Búsqueda manual de ubicaciones-Detección automática de ubicación por geolocalización-Pronóstico del clima en tiempo real-Diseño responsivo para una mejor experiencia en dispositivos móviles"
                        data-tecnologias="HTML-JavaScript-PHP-Sass-Gulp"                        
                        data-github="https://github.com/PexWeb/App-Clima"
                        data-live="https://app-clima.wuaze.com/"
                    >
                        <div class="contenido">
                            <picture>
                                <source srcset="build/img/thumbnail-clima.webp" type="image/webp">
                                <img loading="lazy"  src="build/img/thumbnail-clima.jpg" alt="Aplicación de clima">
                            </picture>
                            <div class="overlay">                                
                                <div class="contenido-overlay">
                                    <h3>App Clima</h3>
                                    <p>
                                        Una Aplicación sencilla de pronostico del clima
                                    </p>
                                </div>
                            </div>
                        </div>                        
                    </div>    
                    <div class="proyecto"
                        data-titulo="PexHouses"
                        data-descripcion="PexHouses es una aplicación web para la venta de propiedades inmobiliarias (simuladas, sin transacciones reales). Implementa las funcionalidades típicas de un sistema CRUD (Crear, Leer, Actualizar, Eliminar). Durante el desarrollo de este proyecto, aprendí sobre el funcionamiento de las aplicaciones con conexiones a bases de datos, el hash de contraseñas, los inicios de sesión y la subida de archivos. Además, adquirí experiencia en el uso del patrón de arquitectura Modelo-Vista-Controlador (MVC) y el patrón de diseño Active Record."
                        data-caracteristicas="Gestión de propiedades inmobiliarias-Sistema de autenticación y autorización-Subida y gestión de imágenes de propiedades-Interfaz de usuario responsiva"
                        data-tecnologias="HTML-JavaScript-PHP-Sass-Gulp-MySql"                        
                        data-github="https://github.com/PexWeb/pexHouses"
                        data-live="https://pexhouses.wuaze.com/"
                    >
                        <div class="contenido">
                            <picture>
                                <source srcset="build/img/thumbnail-pexhouses.webp" type="image/webp">
                                <img loading="lazy"  src="build/img/thumbnail-pexhouses.jpg" alt="Aplicación de clima">
                            </picture>
                            <div class="overlay">                                
                                <div class="contenido-overlay">
                                    <h3>PexHouses</h3>
                                    <p>
                                        Una Aplicación de venta de bienes raices
                                    </p>
                                </div>
                            </div>
                        </div>                        
                    </div>   
                    <div class="proyecto"
                        data-titulo="Portafolio"
                        data-descripcion="Este portafolio web es un proyecto personal que muestra mis habilidades, proyectos y experiencia en desarrollo web. Lo he creado utilizando HTML, JavaScript, Sass y PHP. A través de este proyecto, he aprendido más sobre diseño con CSS y sobre cómo enviar correos electrónicos utilizando PHP. El portafolio es completamente responsivo y está diseñado para proporcionar una experiencia de usuario atractiva y profesional."
                        data-caracteristicas="Sección de proyectos con descripciones detalladas y enlaces-Formulario de contacto con funcionalidad de envío de correos-Diseño responsivo adaptado a diferentes dispositivos-Animaciones y efectos visuales para mejorar la experiencia del usuario"
                        data-tecnologias="HTML-JavaScript-PHP-Sass-Gulp"                        
                        data-github="https://github.com/PexWeb/Portafolio"
                        data-live="https://brayandev.com/"
                    >
                        <div class="contenido">
                            <picture>
                                <source srcset="build/img/thumbnail-portafolio.webp" type="image/webp">
                                <img loading="lazy"  src="build/img/thumbnail-portafolio.jpg" alt="Aplicación de clima">
                            </picture>
                            <div class="overlay">                                
                                <div class="contenido-overlay">
                                    <h3>Portafolio</h3>
                                    <p>
                                        Este Portafolio
                                    </p>
                                </div>
                            </div>
                        </div>                        
                    </div>    
                                        
                </div>
            </div>            
        </section>   
        <section id="contacto" class="contacto snap-center">
            <div class="contenedor">
                <h2 class="titulo"><span class="span-titulo"><span class="span-etiqueta">&lt;/</span>Contacto<span class="span-etiqueta">></span></span></h2>
                <form action="/enviar-formulario" method="POST">
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                        <div id="errorNombre" class="error">                       
                        </div>
                    </div>
                    <div class="campo">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ingresa tu email">
                        <div id="errorEmail" class="error">
                        </div>
                    </div>
                    <div class="campo">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Ingresa tu mensaje"></textarea>
                        <div id="errorMensaje" class="error">
                        </div>
                    </div>    
                    <input type="submit" value="Enviar" id="btnEnviar" class="btnEnviar">            
                </form>
            </div>          
        </section>
        <div id="modal" class="modal">
            <div class="modal-contenedor">
                <header>
                    <h2 id="titulo"></h2>
                    <svg id="cerrar" class="btnCerrar" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Menu / Close_MD">
                        <path id="Vector" d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </header>          
                <div class="scroll">
                    <div class="contenido">
                        <div class="descripcion">
                            <section>
                                <h3>Descripción:</h3>
                                <p id="descripcion"></p>
                            </section>  
                            <section>
                                <h3>Caracteristicas:</h3>
                                <ul id="caracteristicas">                                                                
                                </ul>
                            </section>              
                            <section>
                                <h3>Tecnologías usadas:</h3>
                                <div class="tecnologias" id="tecnologias"">                                
                                </div>
                            </section>                        
                        </div>
                        <div class="imagen">
                            <img id="imagen" src="" alt="">
                            <section>
                                <h3>Enlaces:</h3>
                                <div class="enlaces">
                                    <a href="#" target="_blank" id="github"><img src="build/img/GitHub.svg" alt="Logo github"><p>GitHub</p></a>
                                    <a href="#" target="_blank" id="vivo"><img src="build/img/conference-live-video-svgrepo-com.svg" alt="Logo en vivo"><p>Ver en vivo</p></a>
                                </div>                               
                            </section>
                            
                        </div>
                    </div>  
                </div>              
            </div>        
        </div>      
    </main>
    <footer>
        <p>BrayanDev <?php echo date("Y"); ?></p>
        <p class="aviso-logos">Los logos y marcas comerciales de terceros utilizados en este sitio son propiedad de sus respectivos dueños. Se utilizan únicamente con fines ilustrativos y para representar las tecnologías o herramientas con las que he trabajado o estoy familiarizado.</p>
    </footer>
    <script src="build/js/app.js"></script>
</body>
</html>