<?php

// Realiza la conexión a la base de datos y otras configuraciones necesarias
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos está en otro lugar
$username = "root";
$password = "";
$dbname = "ControlUsuarios";

// Establecer conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Consulta SQL para obtener todos los datos del registro de entradas
$sql = "SELECT registroentradas.*, usuarios.numCliente, usuarios.nombre 
        FROM registroentradas 
        INNER JOIN membresia ON registroentradas.id_Membresia = membresia.id_Membresia
        INNER JOIN usuarios ON membresia.num_Cliente = usuarios.numCliente";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Array para almacenar los usuarios
    $entrada = array();

    // Iterar sobre los resultados y almacenarlos en el array
    while ($row = $result->fetch_assoc()) {
        $entrada[] = $row;
       
    }

    // Devolver los usuarios en formato JSON
    echo json_encode($entrada);
} else {
    // Si no hay resultados, devolver un array vacío en formato JSON
    echo json_encode(array());
    
}

// Cerrar conexión
$conn->close();
?>
