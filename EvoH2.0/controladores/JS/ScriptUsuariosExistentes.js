'use strict';

window.addEventListener('load', function () {

    // Llamada a la función para cargar los usuarios existentes al cargar la página
    cargarUsuarios();
    

    function cargarUsuarios() {
        // Limpiar la tabla antes de cargar nuevos datos
        document.getElementById("cuerpoTabla").innerHTML = "";

        // Realizar la solicitud HTTP para obtener los datos de los usuarios
        fetch("http://localhost/EvoH2.0/controladores/phps/obtener_usuarios.php")
        .then(response => {
            // Imprimir la respuesta del servidor en la consola
            console.log("Respuesta del servidor:", response);
            return response.json();
        })
            .then(data => {
                // Iterar sobre los datos obtenidos y agregarlos a la tabla
                data.forEach(usuario => {
                    console.log(usuario)
                    // Crear una nueva fila en la tabla
                    const row = document.createElement("tr");

                    // Llenar la fila con los datos del usuario
                    row.innerHTML = `
                        <td>${usuario.numCliente}</td>
                        <td>${usuario.nombre}</td>
                        <td>${usuario.apellido}</td>
                        <td>${usuario.numTelefono}</td>
                        <td>${usuario.ContactoEmergencia}</td>
                        <td>${usuario.fecha_Registro}</td>
                        <td>${usuario.notas}</td>
                        <td>${usuario.id_TipoCliente}</td>
                        <td>${usuario.id_Admin}</td>
                        
                    `;

                    // Agregar la fila a la tabla
                    document.getElementById("cuerpoTabla").appendChild(row);
                });
            })
            .catch(error => console.error("Error al obtener usuarios:", error));
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

    var IngUsuario = document.querySelector('#botonUsuNuevo');
    IngUsuario.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/IngresarUsuario.html";
    });

    var BotonEntradas = document.querySelector('#EntradasRegistradas');

    BotonEntradas.addEventListener('click', function () {
        window.location.href = "../../vista/htmls/RegistroEntradas.html";
    });


});
