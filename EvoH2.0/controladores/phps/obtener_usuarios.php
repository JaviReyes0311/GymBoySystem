<?php
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

// Preparar la consulta SQL para obtener todos los usuarios
$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Array para almacenar los usuarios
    $usuario = array();

    // Iterar sobre los resultados y almacenarlos en el array
    while ($row = $result->fetch_assoc()) {
        $usuario[] = $row;
       
    }

    // Devolver los usuarios en formato JSON
    echo json_encode($usuario);
} else {
    // Si no hay resultados, devolver un array vacío en formato JSON
    echo json_encode(array());
    
}


// Cerrar conexión
$conn->close();
?>
