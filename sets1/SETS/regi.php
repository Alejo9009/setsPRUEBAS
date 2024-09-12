<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sets";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);
$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['numeroDocumento'];
$rol = $_POST['rol'];
$numeroTel = $_POST['numeroTel'];

// Insertar datos en la tabla registro
$sql = "INSERT INTO registro (PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Correo, Usuario, Clave, Id_tipoDocumento, numeroDocumento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssiii", $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $correo, $usuario, $clave, $tipoDocumento, $numeroDocumento);
$stmt->execute();

// Obtener el ID del registro insertado
$idRegistro = $stmt->insert_id;

// Insertar datos en la tabla telefono
$sqlTel = "INSERT INTO telefono (numeroTel, person) VALUES (?, ?)";
$stmtTel = $conn->prepare($sqlTel);
$stmtTel->bind_param("ii", $numeroTel, $idRegistro);
$stmtTel->execute();

$sqlRolReg = "INSERT INTO rol_registro (idROL, idRegistro) VALUES (?, ?)";
$stmtRolReg = $conn->prepare($sqlRolReg);
$stmtRolReg->bind_param("ii", $rol, $idRegistro);
$stmtRolReg->execute();

$sqlRoleDesc = "SELECT Roldescripcion FROM rol WHERE id = ?";
$stmtRoleDesc = $conn->prepare($sqlRoleDesc);
$stmtRoleDesc->bind_param("i", $rol);
$stmtRoleDesc->execute();
$stmtRoleDesc->bind_result($rolDescripcion);
$stmtRoleDesc->fetch();
$stmtRoleDesc->close();

$stmt->close();
$stmtTel->close();
$stmtRolReg->close();
$conn->close();


switch ($rolDescripcion) {
    case 'admi':
        header("Location:  ../SETS/admi/inicioprincipal.php");
        break;
    case 'residente':
        header("Location:  ../SETS/residente/inicioprincipal.php");
        break;
    case 'administrador':
        header("Location: ../SETS/administrador/inicioprincipal.php");
        break;
    case 'Guarda de Seguridad':
        header("Location: ../SETS/seguridad/inicioprincipal.php");
        break;
    default:
        header("Location: default_view.php");
        break;
}

exit();
?>
