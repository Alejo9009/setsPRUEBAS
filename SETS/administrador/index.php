<?php
require 'conexion.php';
//guardar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $torre = $_POST['torre'];
    $apartamento = $_POST['apartamento'];
    $anuncio = $_POST['anuncio'];

    $sql = "INSERT INTO anuncio (nombre, torre, apartamento, anuncio) VALUES (:nombre, :torre, :apartamento, :anuncio)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nombre' => $nombre, 'torre' => $torre, 'apartamento' => $apartamento, 'anuncio' => $anuncio]);

    echo "Registro creado con éxito!";
}

//mostrar
$sql = "SELECT * FROM anuncio";
$stmt = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Anuncios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Gestión de Anuncios</h1>
    
    <form action="" method="post">
        <h2>Añadir Anuncios</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="torre">Torre:</label>
        <input type="text" id="torre" name="torre" required>
        <label for="apartamento">Apartamento:</label>
        <input type="text" id="apartamento" name="apartamento" required>
        <label for="anuncio">Anuncio:</label>
        <textarea id="anuncio" name="anuncio" required></textarea>
        <button type="submit" name="add_message">Añadir Anuncio</button>
    </form>

    <h2>Anuncios</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Torre</th>
                <th>Apartamento</th>
                <th>anuncio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($row['torre']); ?></td>
                    <td><?php echo htmlspecialchars($row['apartamento']); ?></td>
                    <td><?php echo htmlspecialchars($row['anuncio']); ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="borrar.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
