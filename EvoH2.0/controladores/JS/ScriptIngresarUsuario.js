'use strict';

window.addEventListener('load', function () {
    var botonInicio = document.querySelector("#botonPrincipal");
    botonInicio.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/Principal.html";
    });

    var botonMembresia = document.querySelector("#botonMembresia");
    botonMembresia.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/IngresarMembresia.html";
    });

    var BotonBLoqueo = document.querySelector('#botonBloqueo');
    BotonBLoqueo.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/Index.html";
    });

    var botonbloc = document.querySelector('#botonBloqueo');
    botonbloc.addEventListener('click', function () {
        alert("se activará pantalla de bloqueo");
        window.location.href = "../../vista/htmls/Index.html";
    });

    var BotonUsuariosExis = document.querySelector('#usuariosExistentes');
    BotonUsuariosExis.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/UsuariosExistentes.html";
    });

    var BotonEntradas = document.querySelector('#EntradasRegistradas');
    BotonEntradas.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/RegistroEntradas.html";
    });
});
