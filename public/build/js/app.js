
document.addEventListener('DOMContentLoaded',()=>{    
    darkMode();
    btnMobile();
    validarFormulario();
    ventanaModal();
    scrollNav();
})

function darkMode(){
    let active = false;//por defecto modo claro
    const body = document.querySelector('body');
    const btn = document.querySelector('.btn-dark');
    const circle = document.createElement('DIV');
    circle.classList.add('circle');
    circle.innerHTML = '<img src="build/img/light.svg" width="20" alt="icon light mode">';

    const modoOscuro = (valor) =>{
        if(valor){
            body.classList.add('darkmode');
            btn.classList.add('active');
            circle.classList.add('active');
            setCookie('darkMode','enabled',30);
        }else{
            body.classList.remove('darkmode');
            btn.classList.remove('active');
            circle.classList.remove('active'); 
            setCookie('darkMode','disabled',30);
        }
    }

    const darkMode = getCookie('darkMode');
    if (darkMode === 'enabled') {
        modoOscuro(true);
        circle.innerHTML = '<img src="build/img/dark.svg" width="12" alt="icon dark mode">';
        active = true;   
    }

    btn.appendChild(circle);
    btn.onclick= ()=>{   
        if(active){//Modo claro       
            modoOscuro(false);
            circle.innerHTML = '<img src="build/img/light.svg" width="20" alt="icon light mode">';   
            active = false;
        }else{//Modo oscuro
            modoOscuro(true);  
            circle.innerHTML = '<img src="build/img/dark.svg" width="12" alt="icon dark mode">';
            active = true;           
        }
    }

    
}

function btnMobile(){
    const menu = document.querySelector('#menu');
    const header = document.querySelector('.header')
    menu.addEventListener('click',() =>{
        header.classList.toggle('expanded');
    })
}

function ventanaModal(){
    const body = document.querySelector('body');
    const proyectos = document.querySelectorAll('.proyecto');
    const modal = document.querySelector('#modal');
    const titulo = document.querySelector('#titulo');
    const descripcion = document.querySelector('#descripcion');
    const caracteristicas = document.querySelector('#caracteristicas');
    const tecnologias = document.querySelector('#tecnologias');
    const github = document.querySelector('#github');
    const vivo = document.querySelector('#vivo');
    const cerrar = document.querySelector('#cerrar');
    const imagen = document.querySelector('#imagen');

    const mostrarModal = (proyecto) =>{
        modal.style.display = 'flex';
        body.classList.add('bloquear');

        titulo.textContent = proyecto.getAttribute('data-titulo');
        descripcion.textContent = proyecto.getAttribute('data-descripcion');
        github.setAttribute("href", proyecto.getAttribute('data-github'));
        vivo.setAttribute("href", proyecto.getAttribute('data-live'));

        //Añadir caracteristicas
        const listaCaracteristicas = proyecto.getAttribute('data-caracteristicas').split('-');
        caracteristicas.innerHTML = listaCaracteristicas.map(element => `<li>${element}</li>`).join('');

        //Añadir tecnologias
        const listaTecnologias = proyecto.getAttribute('data-tecnologias').split('-');
        tecnologias.innerHTML = listaTecnologias.map(element => `<img src="build/img/${element}.svg" alt="Logo ${element}">`).join('');

        imagen.setAttribute("src" ,'build/img/'+proyecto.getAttribute('data-titulo')+'.jpg');
    }

    const cerrarModal = () =>{
        modal.style.display = 'none';
        caracteristicas.innerHTML = '';
        tecnologias.innerHTML = '';
        body.classList.remove('bloquear');
    }

    proyectos.forEach(proyecto => {
        proyecto.addEventListener('click',()=> mostrarModal(proyecto))
    });
    cerrar.addEventListener('click', () => cerrarModal());
}

function validarFormulario(){
    const nombre = document.querySelector('#nombre');
    const email = document.querySelector('#email');
    const mensaje = document.querySelector('#mensaje');
    const errorNombre = document.querySelector('#errorNombre');
    const errorEmail = document.querySelector('#errorEmail');
    const errorMensaje = document.querySelector('#errorMensaje');
    const enviar = document.querySelector('#btnEnviar');

    const validarTodo = () =>{
        let ok = true;
        ok = validarNombre();
        ok = validarEmail();
        ok = validarMensaje();
        return ok;
    }

    const validarNombre = () =>{
        let ok = true;
        if(!nombre.value){
            ok = false;
            mostrarError(errorNombre,'Ingrese un nombre');
        }else{
            if(nombre.value.length>30){
                ok = false;
                mostrarError(errorNombre,'El nombre ingresado es muy largo (Maximo 30 caracteres)');
            }
        }
        if(ok){
            ocultarError(errorNombre);
        }
        return ok;
    }
    const validarEmail = () =>{
        let ok = true;
        if(!email.value){
            ok = false;
            mostrarError(errorEmail,'Ingrese un email');
        }else{
            ok = esEmail();
            if(!ok){
                mostrarError(errorEmail,'Ingrese un email valido');
            }
            if(email.value.length>30){
                ok = false;
                mostrarError(errorEmail,'El email ingresado es muy largo (Maximo 30 caracteres)');
            }
        }
        if(ok){
            ocultarError(errorEmail);
        }
        return ok;
    }
    const validarMensaje = () =>{
        let ok = true;
        if(!mensaje.value){
            ok = false;
            mostrarError(errorMensaje,'Ingrese un mensaje');
        }else{            
            if(mensaje.value.length>1000){
                ok = false;
                mostrarError(errorMensaje,'El mensaje ingresado es muy largo (Maximo 1000 caracteres)');
            }
        }
        if(ok){
            ocultarError(errorMensaje);
        }
        return ok;
    }

    const esEmail = () =>{
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email.value);
    }

    const mostrarError = (contenedor,mensaje) =>{
        contenedor.innerHTML = `<p>${mensaje}</p>`
        contenedor.style.display = 'block';
    }
    const ocultarError = (contenedor) =>{
        contenedor.innerHTML = ''
        contenedor.style.display = 'none';
    }

    //Eventos
    nombre.addEventListener('blur', () =>{
        validarNombre();
    })
    email.addEventListener('blur', () =>{
        validarEmail();
    })
    mensaje.addEventListener('blur', () =>{
        validarMensaje();
    })
    enviar.addEventListener('click', (e) =>{
        const ok = validarTodo();
        if(!ok){
            e.preventDefault(); 
        }
        
    })
}

function scrollNav(){
    const enlaces = document.querySelectorAll('#enlace');
    enlaces.forEach(enlace =>{
        enlace.addEventListener('click', (e)=>{
            e.preventDefault();
            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);
            seccion.scrollIntoView({behavior: "smooth"});
        })
    });
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}