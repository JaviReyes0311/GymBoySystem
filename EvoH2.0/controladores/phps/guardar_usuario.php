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

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
//$numero_usuario = $_POST['numero_usuario'];
$telefono = $_POST['telefono'];
$contacto_emergencia = $_POST['contacto_emergencia'];
$fecha_registro = $_POST['fecha_registro'];
$tipo_cliente = $_POST['tipo_cliente'];

$idAdmin = $_POST['id_Admin'];
$notas = $_POST['notas'];
// Preparar la consulta SQL para insertar datos en la tabla usuarios
$sql = "INSERT INTO Usuarios(nombre,apellido, numTelefono , ContactoEmergencia , fecha_Registro ,notas, id_TipoCliente, id_Admin)
        VALUES ('$nombre', '$apellido', '$telefono', '$contacto_emergencia', '$fecha_registro','$notas', '$tipo_cliente', '$idAdmin')";
if ($conn->query($sql) === TRUE) {
    // Obtener el último ID insertado (autoincrementable)
    $numCliente = $conn->insert_id; 

    echo '<script>
        alert("Usuario Registrado Exitosamente: ' . $nombre . ', Con numero: ' . $numCliente . '");
        window.location = "../../vista/htmls/IngresarUsuario.html";
    </script>';
}else {
    echo '<script>alert("Error al registrar el usuario, verifique sus datos nuevamente");
    window.location = "../../vista/htmls/Principal.html";</script>'; $conn->error;
}

// Cerrar conexión
$conn->close();
?>
