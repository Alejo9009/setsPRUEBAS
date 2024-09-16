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
    <title>Guarda Seguridad</title>
    <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/principal.css?v=<?php echo (rand()); ?>">
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid" style="background-color: #0e2c0a;">
                <img src="img/guarda.png" alt="Logo" width="80" height="84" class="d-inline-block align-text-top" style="background-color: #0e2c0a;"><b style="font-size: 40px;color:aliceblue"> Guarda de Seguridad </b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="background-color: white;">
                    <span class="navbar-toggler-icon" style="color: white;"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <img src="img/C.png" alt="Logo" width="90" height="94" class="d-inline-block align-text-top">

                        <center>
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="text-align: center;">SETS</h5>
                        </center>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <center><a class="nav-link active" aria-current="page" href="#" style="font-size: 20px;"><b>Inicio</b></a></center>
                            </li>
                            <center>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <b style="font-size: 20px;"> Perfil</b>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <center><a href="Perfil.php">Editar datos</a></center>
                                        </li>
                                        <li>
                                            <center><a href="#">Reportar problema</a></center>
                                        </li>
                                        <li>
                                            <center> <a href="../index.php">Cerrar sesión</a></center>
                                        </li>
                                    </ul>
                            </center>
                            </li>
                            <div class="offcanvas-header">
                                <img src="img/notificacion.png" alt="Logo" width="70" height="74" class="d-inline-block align-text-top">


                                <center>
                                    <a href="notificaciones.php" class="btn" id="offcanvasNavbarLabel" style="text-align: center;">Notificaciones</a>
                                </center>
                            </div>
                            <center>
                                <li class="nav-item dropdown">
                                    <img src="img/hablando.png" alt="Logo" width="30" height="44" class="d-inline-block align-text-top" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <b style="font-size: 20px;"> CHAT</b>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <center><a href="#" class="chat-item" onclick="openChat('admi')">Admi</a></center>
                                        </li>
                                        <li>
                                            <center><a href="#" class="chat-item" onclick="openChat('ADMINISTRADOR')">Administrador</a></center>
                                        </li>
                                        <li>
                                            <center><a href="#" class="chat-item" onclick="openChat('Residente')">Residente</a></center>
                                        </li>
                                        <li>
                                            <center><a href="#" class="chat-item" onclick="openChat('Chat Comunal')">Chat Comunal</a></center>
                                        </li>
                                    </ul>
                            </center>
                        </ul>

                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <br>
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
        <br><br>
        <main>
            <div class="container">
                <section class="icons">
                    <div class="icon">
                        <div class="buttons">
                            <a href="torres.php" class="link-button">
                                <img src="img/casa.png" alt="Torres" class="medium-img">
                                <button class="add-announcement">Torres</button>
                            </a>
                        </div>
                    </div>
                    <div class="icon">
                        <a href="parqueaderocarro.php" class="link-button">
                            <img src="img/coche.png" alt="Parqueadero" class="medium-img">
                            <button class="add-announcement">Parqueadero</button>
                        </a>
                    </div>

                    <div class="icon">
                        <a href="zonas_comunes.php" class="link-button">
                            <img src="img/campo.png" alt="Manual de convivencia" class="medium-img">
                            <button class="add-announcement">Zonas Comunes</button>
                        </a>
                    </div>

                    <div class="icon">
                        <a href="manualconvivencia.php" class="link-button">
                            <img src="img/instrucciones.png" alt="Manual de convivencia" class="medium-img">
                            <button class="add-announcement">Manual de convivencia</button>
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
                                        <img src="<?= htmlspecialchars($row['img_anuncio']); ?>" alt="Imagen del video" style="width:100%; max-width:100px;">
                                        <p>Anuncio: <?php echo htmlspecialchars($row["titulo"]); ?><br>
                                            <?php echo htmlspecialchars($row["descripcionAnuncio"]); ?><br>
                                            Fecha de Publicación: <?php echo htmlspecialchars($row["fechaPublicacion"]); ?><br>
                                            Hora de Publicación: <?php echo htmlspecialchars($row["horaPublicacion"]); ?><br>
                                        </p>

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
                                <a href="añadiranuncio.php" class="link-button">
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
                        const searchEventInput = document.getElementById('searchEventInput');
                        const events = document.querySelectorAll('.event');

                        searchEventInput.addEventListener('input', function() {
                            const filter = searchEventInput.value.toLowerCase();

                            events.forEach(function(event) {
                                const text = event.textContent.toLowerCase();
                                if (text.includes(filter)) {
                                    event.style.display = 'block';
                                } else {
                                    event.style.display = 'none';
                                }
                            });
                        });
                    </script>
                    <script>
                        const searchInput = document.getElementById('searchInput');
                        const announcements = document.querySelectorAll('.announcement');


                        searchInput.addEventListener('input', function() {
                            const filter = searchInput.value.toLowerCase();


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
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>