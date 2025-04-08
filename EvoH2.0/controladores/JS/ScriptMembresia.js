'use strict';

window.addEventListener('load', function () {
    

    var BotonPrincipal = document.querySelector('#botonPrincipal');
    BotonPrincipal.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/Principal.html";
    });

    var botonUsuarioNuevo = document.querySelector('#botonUsuNuevo');
    botonUsuarioNuevo.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/IngresarUsuario.html";
    });

    var BotonUsuariosExis = document.querySelector('#usuariosExistentes');
    BotonUsuariosExis.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/UsuariosExistentes.html";
    });

    var botonbloc = document.querySelector('#botonBloqueo');
    botonbloc.addEventListener('click', function () {
        alert("Se activará pantalla de bloqueo");
        window.location.href = "../../vista/htmls/Index.html";
    });

    var BotonEntradas = document.querySelector('#EntradasRegistradas');
    BotonEntradas.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/RegistroEntradas.html";
    });
});
