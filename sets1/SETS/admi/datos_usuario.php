<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Usuario</title>
    <link rel="stylesheet" href="css/datos_usuario.css">
    <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="topbar">
            <div class="menu-left">
                <div class="admin-container">
                    <img src="img/ajustes.png" alt="Admin" class="admin-img">
                    <a href="#" class="menu-button">Admin</a>
                    <div class="dropdown-menu">
                        <a href="Perfil.html">Editar datos</a>
                        <a href="#">Reportar problema</a>
                        <a href="index.html">Cerrar sesión</a>
                    </div>
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
                            <a href="#" class="chat-item" onclick="openChat('Residente')">Residente</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="chat-container" id="chatContainer">
            <header class="chat-header">
                <span id="chatHeader">Chat</span>
                <button class="close-btn" onclick="closeChat()">×</button>
            </header>
            <div class="chat-messages" id="chatMessages">
            </div>
            <div class="chat-input">
                <input type="text" id="chatInput" placeholder="Escribe tu mensaje...">
                <button onclick="sendMessage()">Enviar</button>
            </div>
        </section>

        <section>
            <h1>DATOS DE USUARIO</h1>

            <div class="barra">
                <div class="sombra"></div>
                <input type="text" placeholder="Buscar usuario...">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <br>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Rol</th>
                        <th>Tipo de Documento</th>
                        <th>Número de Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Torre</th>
                        <th>Piso</th>
                        <th>Apartamento</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Residente</td>
                        <td>Cédula</td>
                        <td>100230303</td>
                        <td>Juan</td>
                        <td>Diaz</td>
                        <td>Torre 1</td>
                        <td>Piso 1</td>
                        <td>Apartamento 201</td>
                        <td>jd@gmail.com</td>
                        <td>Usuario1</td>
                        <td>Contraseña1</td>
                        <td>
                            <a href="editarusuario.html" class="btn btn-success">EDITAR</a>
                            <button class="btn btn-danger">ELIMINAR</button>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Residente</td>
                        <td>Cédula</td>
                        <td>100230303</td>
                        <td>Juan</td>
                        <td>Diaz</td>
                        <td>Torre 1</td>
                        <td>Piso 1</td>
                        <td>Apartamento 201</td>
                        <td>jd@gmail.com</td>
                        <td>Usuario1</td>
                        <td>Contraseña1</td>
                        <td>
                            <a href="editarusuario.html" class="btn btn-success">EDITAR</a>
                            <button class="btn btn-danger">ELIMINAR</button>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Residente</td>
                        <td>Cédula</td>
                        <td>100230303</td>
                        <td>Juan</td>
                        <td>Diaz</td>
                        <td>Torre 1</td>
                        <td>Piso 1</td>
                        <td>Apartamento 201</td>
                        <td>jd@gmail.com</td>
                        <td>Usuario1</td>
                        <td>Contraseña1</td>
                        <td>
                            <a href="editarusuario.html" class="btn btn-success">EDITAR</a>
                            <button class="btn btn-danger">ELIMINAR</button>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Residente</td>
                        <td>Cédula</td>
                        <td>100230303</td>
                        <td>Juan</td>
                        <td>Diaz</td>
                        <td>Torre 1</td>
                        <td>Piso 1</td>
                        <td>Apartamento 201</td>
                        <td>jd@gmail.com</td>
                        <td>Usuario1</td>
                        <td>Contraseña1</td>
                        <td>
                            <a href="editarusuario.html" class="btn btn-success">EDITAR</a>
                            <button class="btn btn-danger">ELIMINAR</button>
                        </td>
                    </tr>
                </tbody>

            </table>
           
        </section>
    </main>
    <a href="inicioprincipal.html" class="btn btn-success">
                <center>VOLVER</center>
    </a>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="JAVA/main.js"></script>
    <script>
        document.querySelector('.admin-img').addEventListener('click', function () {
            document.querySelector('.dropdown-menu').classList.toggle('show');
        });
        document.querySelector('.chat-button').addEventListener('click', function () {
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