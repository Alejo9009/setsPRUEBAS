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
                        <img src="img/resi.png" alt="Admin" class="admin-img">
                        <a href="#" class="menu-button">Residente</a>
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
                                <a href="#" class="chat-item" onclick="openChat('Admi')">Admi</a>
                                <a href="#" class="chat-item" onclick="openChat('Administrador')">Administrador</a>
                                <a href="#" class="chat-item" onclick="openChat('Guarda De Seguridad')">Guarda DE Seguridad</a>
                                <a href="#" class="chat-item" onclick="openChat('Chat Comunal')">Chat Comunal</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="chatContainer" class="chat-container">
            <header class="chat-header">
                <h2 id="chatHeader">Chat</h2>
                <button class="close-btn" onclick="closeChat()">×</button>
            </header>
            <div class="chat-messages" id="chatMessages">
            </div>
            <div class="chat-input">
                <input type="text" id="chatInput" placeholder="Escribe tu mensaje...">
                <button onclick="sendMessage()">Enviar</button>
            </div>
        </section>

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
                                <a class="bt3" href="agendasaloncomunal.php">
                                    <center>
                                        <h3>Solicitar</h3>
                                    </center>
                                </a>
                            </article>


                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <a href="inicioprincipal.html" class="btnsmall-btn">Volver</a>
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