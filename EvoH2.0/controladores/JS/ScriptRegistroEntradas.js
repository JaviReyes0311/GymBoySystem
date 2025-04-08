
'use strict'

window.addEventListener('load',function(){



    cargarRegistroEntradas();

    function cargarRegistroEntradas() {
        document.getElementById("cuerpoTablaRegistroEntradas").innerHTML = "";
        fetch("http://localhost/EvoH2.0/controladores/phps/obtener_registro_entradas.php")
            .then(response => {
                // Imprimir la respuesta del servidor en la consola
                console.log("Respuesta del servidor:", response);
                return response.json();
            })
            .then(data => {
                data.forEach(entrada => {
                    console.log(entrada);
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${entrada.id_Entrada}</td>
                        <td>${entrada.fechaYhoraEntrada}</td>
                        <td>${entrada.id_Membresia}</td>
                        <td>${entrada.numCliente}</td>
                        <td>${entrada.nombre}</td>
                        <!-- Otros datos aquí -->
                    `;
                    document.getElementById("cuerpoTablaRegistroEntradas").appendChild(row);
                });
            })
            .catch(error => console.error("Error al obtener el registro de entradas:", error));
    }


    var BotonUsuariosExis = document.querySelector('#usuariosExistentes');

    BotonUsuariosExis.addEventListener('click', function () {

        window.location.href = "../../vista/htmls/UsuariosExistentes.html";

    });

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

    var IngUsuario= document.querySelector('#botonUsuNuevo');
    IngUsuario.addEventListener('click',function(){



window.location.href="../../vista/htmls/IngresarUsuario.html";



    });
    var BotonEntradas = document.querySelector('#EntradasRegistradas');

BotonEntradas.addEventListener('click',function(){

window.location.href="../../vista/htmls/RegistroEntradas.html"


});




})