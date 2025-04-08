<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurar la conexión a la base de datos
    $servername = "localhost"; // Cambia esto si tu servidor de base de datos está en otro lugar
    $username = "root";
    $password = "";
    $dbname = "ControlUsuarios";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión ha fallado: " . $conn->connect_error);
    }

    // Recoger datos del formulario
    $numCliente = $_POST['NumCliente'];
    $idAdmin = $_POST['idAdmin'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaTermino = $_POST['FechaTermino'];
    $estado = $_POST['estado'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO membresia (fecha_Inicio, fecha_Termino, estado, num_Cliente, id_Admin)
            VALUES ('$fechaInicio', '$fechaTermino', '$estado','$numCliente', '$idAdmin')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Membresia registrada Exitosamente");
        window.location = "../../vista/htmls/IngresarMembresia.html";</script>';
    } else {
        echo '<script>alert("ERROR al registrar su membresia, verifique nuevamente los datos");
        window.location = "../../vista/htmls/IngresarMembresia.html";</script>';
        echo "Error: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
