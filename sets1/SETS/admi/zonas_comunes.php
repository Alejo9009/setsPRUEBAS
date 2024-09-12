<?php
include_once "conexion.php"; // Aquí mantienes tu conexión con PDO

$query = "SELECT TipoZonaid, descripcion, url_videos FROM tipozona";

try {
    $statement = $base_de_datos->prepare($query);
    $statement->execute();
    $zonas_comunes = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error al ejecutar la consulta: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETS - zonas_comunes</title>
    <link rel="stylesheet" href="css/zonas_comunes.css">
    <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="topbar">
                <div class="menu-left">
                    <div class="admin-container">
                        <img src="img/ajustes.png" alt="Admin" class="admin-img">
                        <a class="menu-button">Admin</a>
                        <ul class="dropdown-menu">
                            <a href="Perfil.html">Editar datos</a>
                            <a href="#">Reportar problema</a>
                            <a href="index.html">Cerrar sesión</a>
                        </ul>
                    </div>
                    <a href="notificaciones.html">
                        <img src="img/notificacion.png" alt="Notificaciones" class="notification">
                    </a>
                </div>
                <div class="menu-right">
                    <div class="chat">
                        <img src="img/hablando.png" alt="Chat" class="chat-button" id="chatToggle">
                        <img src="img/C.png" alt="Chat" class="chat-button">
                        <div class="chat-menu">
                            <div class="search-container">
                                <input type="text" placeholder="Buscar" class="search-bar" onkeyup="filterChat()">
                            </div>
                            <br>
                            <ul class="chat-links">
                                <a href="#" class="chat-item" onclick="openChat('ADMINISTRADOR')">ADMINISTRADOR</a>
                                <a href="#" class="chat-item" onclick="openChat('GUARDA DE SEGURIDAD')">GUARDA DE SEGURIDAD</a>
                                <a href="#" class="chat-item" onclick="openChat('Chat Comunal')">Chat Comunal</a>
                                <a href="#" class="chat-item" onclick="openChat('Residente')">Residente</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <h1 class="title">Zonas Comunes</h1>
            <div class="zones-container">
                <?php if (!empty($zonas_comunes)): ?>
                    <?php foreach ($zonas_comunes as $zona): ?>
                        <article class="zone">
                            <button class="bt5">
                                <center>
                                    <h3><?= htmlspecialchars($zona['TipoZonaid']); ?></h3>
                                </center>
                            </button>
                            <video src="<?= htmlspecialchars($zona['url_videos']); ?>" autoplay loop muted></video>
                            <h2><?= htmlspecialchars($zona['descripcion']); ?></h2>
                            <a href="solicitarzona.php" class="bt2">
                                <h3>Ver horario disponible</h3>
                            </a><br>
                            <a class="btn btn-success" href="actualizarzona.php?TipoZonaid=<?= $zona['TipoZonaid'] ?>">
                                <center>
                                    <h3>Editar</h3>
                                </center>
                            </a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal<?= $zona['TipoZonaid'] ?>">
                                Eliminar
                            </button>
                        </article>

                        <!-- Modal de confirmación de eliminación -->
                        <div class="modal fade" id="confirmModal<?= $zona['TipoZonaid'] ?>" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel<?= $zona['TipoZonaid'] ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmModalLabel<?= $zona['TipoZonaid'] ?>">Confirmar Eliminación</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estás seguro de que deseas eliminar esta zona común?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <form method="POST" action="eliminarzona.php">
                                            <input type="hidden" name="TipoZonaid" value="<?= $zona['TipoZonaid'] ?>">
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <a href="inicioprincipal.php" class="btnsmall-btn">Volver</a>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script type="text/javascript" src="JAVA/main.js"></script>
    <script>
        document.querySelector('.admin-img').addEventListener('click', function() {
            document.querySelector('.dropdown-menu').classList.toggle('show');
        });

        document.querySelector('.chat-button').addEventListener('click', function() {
            document.querySelector('.chat-menu').classList.toggle('show');
        });

        function filterChat() {
            const searchInput = document.querySelector('.search-bar').value.toLowerCase();
            const chatItems = document.querySelectorAll('.chat-item');
            chatItems.forEach(item => {
                if (item.textContent.toLowerCase().includes(searchInput)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

    <script>
        function openChat(chatName) {
            const chatContainer = document.getElementById('chatContainer');
            const chatHeader = document.getElementById('chatHeader');
            chatHeader.textContent = chatName;
            chatContainer.classList.add('show');
        }

        function closeChat() {
            const chatContainer = document.getElementById('chatContainer');
            chatContainer.classList.remove('show');
        }

        function sendMessage() {
            const messageInput = document.getElementById('chatInput');
            const messageText = messageInput.value.trim();
            if (messageText) {
                const chatMessages = document.getElementById('chatMessages');
                const messageElement = document.createElement('p');
                messageElement.textContent = messageText;
                chatMessages.appendChild(messageElement);
                messageInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        }

        function filterChat() {
            const searchInput = document.querySelector('.search-bar').value.toLowerCase();
            const chatItems = document.querySelectorAll('.chat-item');
            chatItems.forEach(item => {
                if (item.textContent.toLowerCase().includes(searchInput)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>