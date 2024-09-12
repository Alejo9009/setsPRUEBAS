<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/manualconvivencia.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="topbar">
                <div class="menu-left">
                    <img src="img/ajustes.png" alt="Admin" class="admin-img">
                    <a class="menu-button" aria-label="Admin">Admin</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="Perfil.html">Editar datos</a></li>
                        <li><a href="#">Reportar problema</a></li>
                        <li><a href="index.html">Cerrar sesión</a></li>
                    </ul>
                    <a href="notificaciones.html">
                        <img src="img/notificacion.png" alt="Notificaciones" class="notification">
                    </a>
                </div>
                <div class="menu-right">
                    <div class="chat">
                        <button class="menu-button" aria-label="Chat"></button>
                        <img src="img/hablando.png" alt="Chat" class="chat-button" id="chatToggle">
                        <button class="menu-button" aria-label="Chat"></button>

                        <img src="img/C.png" alt="Chat" class="chat-button">
                        <div class="chat-menu">
                            <div class="search-container">
                                <input type="text" placeholder="Buscar" class="search-bar" onkeyup="filterChat()">
                            </div>
                            <br>
                            <ul class="chat-links">
                                <li><a href="#" class="chat-item" onclick="openChat('ADMINISTRADOR')">ADMINISTRADOR</a></li>
                                <li><a href="#" class="chat-item" onclick="openChat('GUARDA DE SEGURIDAD')">GUARDA DE SEGURIDAD</a></li>
                                <li><a href="#" class="chat-item" onclick="openChat('Chat Comunal')">Chat Comunal</a></li>
                                <a href="#" class="chat-item" onclick="openChat('Residente')">Residente</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="chatContainer" class="chat-container">
            <div class="chat-header">
                <h2 id="chatHeader">Chat</h2>
                <button class="close-btn" onclick="closeChat()">×</button>
            </div>
            <div class="chat-messages" id="chatMessages">
            </div>
            <div class="chat-input">
                <input type="text" id="chatInput" placeholder="Escribe tu mensaje...">
                <button onclick="sendMessage()">Enviar</button>
            </div>
        </div>
        <h1>NORMAS DE CONVIVENCIA</h1>
        <br>
        <div class="content">
            <section class="document-section">
                <header class="document-header">
                </header>
                <div class="document-content">
                    <iframe src="manual.pdf" style="width: 100%; height: 700px;" frameborder="0"></iframe>
                </div>
            </section>

            <section class="suggestions-section">
                <h2>Sugerencias</h2>
                <ul class="suggestions">
                    <li>Respeto al horario de silencio: Establecer un horario en el que se debe mantener el ruido al mínimo para garantizar el descanso de todos los residentes.</li><br>
                    <li>Mantenimiento de áreas comunes: Establecer normas para el cuidado y limpieza de las áreas comunes, como jardines, parques infantiles y zonas de recreación.</li><br>
                    <li>Control de mascotas: Establecer reglas sobre el cuidado y control de mascotas, incluyendo la limpieza de desechos y el mantenimiento de las áreas designadas para mascotas.</li><br>
                    <li>Uso adecuado de estacionamiento: Establecer reglas para el estacionamiento adecuado de vehículos, incluyendo asignación de espacios, prohibición de estacionamiento en áreas no autorizadas y etiquetado adecuado de vehículos.</li><br>
                    <li>Reciclaje y disposición de basura: Establecer normas para la separación de residuos y el manejo adecuado de la basura, incluyendo días y horarios para la recolección y disposición adecuada de materiales reciclables.</li><br>
                    <li>Uso adecuado de estacionamiento: Establecer reglas para el estacionamiento adecuado de vehículos, incluyendo asignación de espacios, prohibición de estacionamiento en áreas no autorizadas y etiquetado adecuado de vehículos.</li><br>
                    <li>Reciclaje y disposición de basura: Establecer normas para la separación de residuos y el manejo adecuado de la basura, incluyendo días y horarios para la recolección y disposición adecuada de materiales reciclables.</li><br>
                    <li>Mantenimiento de áreas comunes: Establecer normas para el cuidado y limpieza de las áreas comunes, como jardines, parques infantiles y zonas de recreación.</li><br>
                    <li>Control de mascotas: Establecer reglas sobre el cuidado y control de mascotas, incluyendo la limpieza de desechos y el mantenimiento de las áreas designadas para mascotas.</li><br>
                    <li>Uso adecuado de estacionamiento: Establecer reglas para el estacionamiento adecuado de vehículos, incluyendo asignación de espacios, prohibición de estacionamiento en áreas no autorizadas y etiquetado adecuado de vehículos.</li><br>
                    <li>Reciclaje y disposición de basura: Establecer normas para la separación de residuos y el manejo adecuado de la basura, incluyendo días y horarios para la recolección y disposición adecuada de materiales reciclables.</li><br>
                    <li>Uso adecuado de estacionamiento: Establecer reglas para el estacionamiento adecuado de vehículos, incluyendo asignación de espacios, prohibición de estacionamiento en áreas no autorizadas y etiquetado adecuado de vehículos.</li><br>
                    <li>Reciclaje y disposición de basura: Establecer normas para la separación de residuos y el manejo adecuado de la basura, incluyendo días y horarios para la recolección y disposición adecuada de materiales reciclables.</li><br>
                </ul>
            </section>
        </div>
        <div class="buttons">
            <a class="btn small-btn"><center>AGREGAR UNO NUEVO</center></a>
            <a class="btn small-btn">ELIMINAR</a>
            <a href="inicioprincipal.html" class="btn small-btn">VOLVER</a>
        </div>
    </main>
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