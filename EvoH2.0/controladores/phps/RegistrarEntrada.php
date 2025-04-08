<?php
session_start(); // Iniciar sesión para usar variables de sesión

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar el número de cliente ingresado
    $numero_cliente = $_POST["NumCliente"];

    // Conexión a la base de datos
    $servername = "localhost"; // Cambia esto si tu servidor de base de datos está en otro lugar
    $username = "root";
    $password = "";
    $dbname = "ControlUsuarios";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para verificar si el usuario con ese número de cliente existe y tiene una membresía vigente
    $sql = "SELECT u.numCliente AS num_cliente, m.id_membresia AS id_membresia FROM usuarios u INNER JOIN membresia m ON u.numCliente = m.num_Cliente WHERE u.numCliente = $numero_cliente AND m.estado = 1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El usuario y su membresía vigente existen, proceder a registrar la entrada
        $row = $result->fetch_assoc();
        $id_membresia = $row["id_membresia"];
        
        // Obtener el ID del administrador desde la variable de sesión
        $id_admin = $_SESSION["id_admin"];

        // Obtener la fecha y hora actual del servidor
        $fecha_hora_actual = date("Y-m-d H:i:s");
        
        // Insertar los datos en la tabla registroentradas
        $sql_insert = "INSERT INTO registroentradas (fechaYhoraEntrada, id_Membresia, id_Admin) VALUES (NOW(), $id_membresia, $id_admin)";
        
        if ($conn->query($sql_insert) === TRUE) {
            echo '<script>alert("Entrada registrada Exitosamente, puede acceder");
            window.location = "../../vista/htmls/Principal.html";</script>';
        } else {
            echo '<script>alert("Error al registrar la entrada; verifique sus datos nuevamente");
            window.location = "../../vista/htmls/Principal.html";</script>'; $conn->error;
        }
    } else {
        // El usuario no existe o su membresía no está vigente
        echo '<script>alert("El usuario ingresado no existe o su membresia no se encuentra vigente");
            window.location = "../../vista/htmls/Principal.html";</script>';
    }

    // Cerrar conexión
    $conn->close();
}
?>
