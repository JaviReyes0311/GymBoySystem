<?php
// session_start(); // Iniciar sesión para usar variables de sesión

// // Verificar si se han enviado datos del formulario
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Obtener datos del formulario
//     $usuario = $_POST["usuario"];
//     $password = $_POST["password"];

//     // Conexión a la base de datos
//     $servername = "localhost";
//     $username = "root"; // Nombre de usuario predeterminado de XAMPP
//     $password_db = ""; // Contraseña predeterminada de XAMPP (en blanco)
//     $database = "ControlUsuarios";

//     $conn = new mysqli($servername, $username, $password_db, $database);

//     // Verificar conexión
//     if ($conn->connect_error) {
//         die("Conexión fallida: " . $conn->connect_error);
//     }

//     // Consulta SQL para verificar el usuario y la contraseña
//     $sql = "SELECT id_Admin, nombre FROM Administradores WHERE nombre='$usuario' AND Contrasena='$password'"; // Corregido el nombre de columna
//     $result = $conn->query($sql);

//     // Verificar si se encontró un usuario con los datos proporcionados
//     if ($result->num_rows > 0) {
//         // Usuario autenticado correctamente
//         $row = $result->fetch_assoc();
//         $_SESSION["id_admin"] = $row["id_Admin"]; // Almacenar el ID de administrador en una variable de sesión
//         $_SESSION["nombre_admin"] = $row["nombre"]; // Opcional: almacenar el nombre del administrador en una variable de sesión
//         // Redirigir al usuario a la página Principal.html
//         header("Location: ../../vista/htmls/Principal.html");
//         exit(); // Asegurar que el script se detenga después de redirigir
//     } else {
//         // Usuario no encontrado o contraseña incorrecta
//         echo '<script>alert("Usuario o contraseña incorrectos, intente nuevamente");
//         window.location = "../../vista/htmls/Index.html";</script>';
//     }

//     $conn->close();
// }
?> 
