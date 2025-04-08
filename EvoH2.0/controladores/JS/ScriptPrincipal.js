'use strict';

window.addEventListener('load', function () {
   

    var BotonEntradas = document.querySelector('#EntradasRegistradas');
    BotonEntradas.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/RegistroEntradas.html";
    });

    var botonbloc = document.querySelector('#botonBloqueo');
    botonbloc.addEventListener('click', function () {
        alert("Se activará pantalla de bloqueo");
        window.location.href = "../../vista/htmls/Index.html";
    });

    var botonMembresia = document.querySelector('#botonMembresia');
    botonMembresia.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/IngresarMembresia.html";
    });

    var botonIngresarUsuario = document.querySelector('#botonUsuNuevo');
    botonIngresarUsuario.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/IngresarUsuario.html";
    });

    var BotonUsuariosExis = document.querySelector('#usuariosExistentes');
    BotonUsuariosExis.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/UsuariosExistentes.html";
    });

    document.getElementById("botonEntrada").addEventListener("click", function () {
        var fechaHoraActual = new Date();

        var fecha = fechaHoraActual.toLocaleDateString();
        var hora = fechaHoraActual.toLocaleTimeString();
        var fechaHoraVariable = fechaHoraActual.toLocaleString();

        RecibirUsuario(fechaHoraVariable);
    });

    function RecibirUsuario(fechaHoraVariable) {
        var registro = fechaHoraVariable;
        var usuario = document.getElementById("InputEntrada").value;
        var UsuarioEntero = parseInt(usuario);

        console.log("Número de usuario: " + UsuarioEntero + "   Entró el: " + registro);
    }
});
