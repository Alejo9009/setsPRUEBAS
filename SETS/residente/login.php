<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "sets";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT id_Registro FROM registro WHERE Usuario = ? AND Clave = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $clave);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si existe un usuario con esas credenciales
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $idRegistro = $row['id_Registro'];
    
    // Preparar la consulta para obtener el rol del usuario
    $sql = "SELECT r.Roldescripcion FROM rol_registro rr 
            JOIN rol r ON rr.idROL = r.id 
            WHERE rr.idRegistro = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idRegistro);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rolDescripcion = $row['Roldescripcion'];

        // Iniciar sesión
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $rolDescripcion;

        // Redirigir según el rol del usuario
        switch ($rolDescripcion) {
            case 'residente':
                header("Location: ../residente/inicioprincipal.html");
                break;
          
            default:
                header("Location: /error.html");
                break;
        }
        exit();
    } else {
        // No se encontró rol para el usuario
        echo "Error: No se encontró rol para el usuario.";
    }
} else {
    // Credenciales incorrectas
    echo "Usuario o clave incorrectos.";
}


$stmt->close();
$conn->close();
?>
