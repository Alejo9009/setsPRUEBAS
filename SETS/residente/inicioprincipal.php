<?php
include_once "conexion.php";
// Verificar que la conexión está establecida
if (!$base_de_datos) {
    exit('Error en la conexión a la base de datos.');
}

// Consulta para obtener anuncios
$sql = "SELECT * FROM anuncio";
$result = $base_de_datos->query($sql);

if ($result->rowCount() > 0) {
    // Mostrar datos de cada anuncio
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $isEvent = strpos($row["titulo"], "Evento") !== false;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>residente Page</title>
    <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/principal.css">
</head>

<body>
    <header>
        <div class="topbar">
            <div class="menu-left">
                <img src="img/resi.png" alt="Admin" class="admin-img">
                <a href="#" class="menu-button">Residente</a>
                <div class="dropdown-menu">
                    <a href="Perfil.html">Editar datos</a>
                    <a href="#">Reportar problema</a>
                    <a href="index.html">Cerrar sesión</a>
                </div>
                <a href="notificaciones.html">
                    <img src="img/notificacion.png" alt="Notificaciones" class="notification">
                </a>
            </div>
            <div class="menu-right">
                <div class="chat">
                    <a class="menu-button"></a>
                    <img src="img/hablando.png" alt="Chat" class="chat-button" id="chatToggle">
                    <a href="#" class="menu-button"></a>

                    <img src="img/C.png" alt="Chat" class="chat-button">
                    <div class="chat-menu">
                        <div class="search-container">
                            <input type="text" placeholder="Buscar" class="search-bar" onkeyup="filterChat()">
                        </div>
                        <br>
                        <div class="chat-links">
                            <a href="#" class="chat-item" onclick="openChat('ADMINISTRADOR')">ADMINISTRADOR</a>
                            <a href="#" class="chat-item" onclick="openChat('GUARDA DE SEGURIDAD')">GUARDA DE SEGURIDAD</a>
                            <a href="#" class="chat-item" onclick="openChat('Chat Comunal')">Chat Comunal</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br><br>
    <main>
        <div id="chatContainer" class="chat-container">
            <div class="chat-header">
                <span id="chatHeader">Chat</span>
                <button class="close-btn" onclick="closeChat()">×</button>
            </div>
            <div class="chat-messages" id="chatMessages">
            </div>
            <div class="chat-input">
                <input type="text" id="chatInput" placeholder="Escribe tu mensaje...">
                <button onclick="sendMessage()">Enviar</button>
            </div>
        </div>
        </header>
        <br><br>
        <main>

            <div class="container">

                <section class="icons">

                    <div class="icon">
                        <a href="parqueaderocarro.html" class="link-button">
                            <img src="img/coche.png" alt="Parqueadero" class="medium-img">
                            <button class="add-announcement">Parqueadero</button>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="zonas_comunes.php" class="link-button">
                            <img src="img/campo.png" alt="Zonas Comunes" class="medium-img">
                            <button class="add-announcement">Zonas Comunes</button>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="manualconvivencia.html" class="link-button">
                            <img src="img/instrucciones.png" alt="Manual de convivencia" class="medium-img">
                            <button class="add-announcement">Manual de convivencia</button>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="citas.html" class="link-button">
                            <img src="img/citas.png" alt="Citas con amd" class="medium-img">
                            <button class="add-announcement">Citas con amd</button>
                        </a>
                    </div>

                </section>

                <br>
                <br><br>

                <main>
                    <div class="container">
                        <section class="announcements">
                            <center>
                                <h2>Anuncios</h2>
                            </center>
                            <div class="search-container">
                                <input type="text" placeholder="Buscar Anuncio">
                                <img src="img/lupa.png" alt="Buscar" class="search-icon">
                            </div>

                            <?php
                            // Asegúrate de que $base_de_datos esté disponible y sea una instancia válida de PDO
                            $sql = "SELECT * FROM anuncio";
                            $result = $base_de_datos->query($sql);

                            if ($result->rowCount() > 0) {
                                // Mostrar datos de cada anuncio
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    $isEvent = strpos($row["titulo"], "Evento") !== false;
                            ?>

                                    <div class="announcement">
                                    <img src="<?= htmlspecialchars($row['img_anuncio']); ?>" alt="Imagen del video" style="width:100%; max-width:100px;">  <p>Anuncio: <?php echo htmlspecialchars($row["titulo"]); ?><br>
                                            <?php echo htmlspecialchars($row["descripcionAnuncio"]); ?><br>
                                            Fecha de Publicación: <?php echo htmlspecialchars($row["fechaPublicacion"]); ?><br>
                                            Hora de Publicación: <?php echo htmlspecialchars($row["horaPublicacion"]); ?><br>
                                        </p>
                                        <div class="icon">
                                            <a href="actualizaranuncio.php?idAnuncio=<?php echo urlencode($row['idAnuncio']); ?>" class="link-button">
                                                <button class="add-announcement">Actualizar</button>
                                            </a>
                                        </div>
                                        <?php if ($isEvent) { ?>
                                            <div class="icon">
                                                <a href="eventosregistro.php?idAnuncio=<?php echo urlencode($row['idAnuncio']); ?>" class="link-button">
                                                    <button class="add-announcement">Registrarse</button>
                                                </a>
                                            </div>
                                        <?php } ?>
                                        <div class="button-margin"></div>
                                        <form action="eliminaranuncio.php" method="POST" onsubmit="return confirm('¿Está seguro de que desea eliminar este anuncio?');">
                                            <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($row['titulo']); ?>">
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>

                            <?php
                                }
                            } else {
                                echo "No hay anuncios disponibles.";
                            }

                            // Cerrar conexión
                            $base_de_datos = null;
                            ?>
                            <div class="icon">
                                <a href="añadiranuncio.html" class="link-button">
                                    <button class="add-announcement">Añadir Anuncio</button>
                                </a>
                            </div>
                        </section>
                    </div>

                    <script>
                        function confirmDelete(id) {
                            if (confirm("¿Está seguro de que desea eliminar este anuncio?")) {
                                window.location.href = 'eliminaranuncio.php?id=' + id;
                            }
                        }
                    </script>
                    <script>
                        function filterEvents() {
                            const searchInput = document.getElementById('searchInput').value.toLowerCase();
                            const events = document.getElementsByClassName('event');

                            Array.from(events).forEach(function(event) {
                                const eventText = event.innerText.toLowerCase();

                                if (eventText.includes(searchInput)) {
                                    event.style.display = '';
                                } else {
                                    event.style.display = 'none';
                                }
                            });
                        }
                    </script>
                    <script>
                        const searchAnnouncementInput = document.getElementById('searchAnnouncementInput');
                        const announcements = document.querySelectorAll('.announcement');

                        searchAnnouncementInput.addEventListener('input', function() {
                            const filter = searchAnnouncementInput.value.toLowerCase();

                            announcements.forEach(function(announcement) {
                                const text = announcement.textContent.toLowerCase();
                                if (text.includes(filter)) {
                                    announcement.style.display = 'block';
                                } else {
                                    announcement.style.display = 'none';
                                }
                            });
                        });
                    </script>

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