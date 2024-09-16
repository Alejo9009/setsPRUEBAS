<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueaderos-moto</title>
    <link rel="stylesheet" href="css/moto.css">
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
                            <li><a href="Perfil.html">Editar datos</a></li>
                            <li><a href="#">Reportar problema</a></li>
                            <li><a href="index.html">Cerrar sesión</a></li>
                        </ul>
                    </div>
                    <a href="notificaciones.html">
                        <img src="img/notificacion.png" alt="Notificaciones" class="notification">
                    </a>
                </div>
                <div class="menu-right">
                    <div class="chat">
                        <button class="menu-button"></button>
                        <img src="img/hablando.png" alt="Chat" class="chat-button" id="chatToggle">
                        <button class="menu-button"></button>

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
        <div class="container">
            <div id="carro" class="tab-content active">
                <section class="pius">
                    <h3>Parqueadero MOTO</h3>
                </section>
                <br>

                <div class="tabs">
                    <a href="parqueaderocarro.html"  class="tab-btn active" onclick="showTab('carro')">Carro</a>
                    <a href="paromoto.html" class="tab-btn" onclick="showTab('moto')">Moto</a>
                </div>
                <section class="pis">
                    <h3>Parqueadero Zona 1</h3>
                </section>
                <br>
                <div class="search-bar-container">
                    <div class="barra">
                        <div class="sombra"></div>
                        <input type="text" placeholder="Buscar parqueadero...">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                </div>
                <div class="torress">
                    <div class="content">
                        <h3 class="torres-title">01</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>

                    <div class="content">
                        <h3 class="torres-title">02</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>

                    <div class="content">
                        <h3 class="torres-title">03</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                    <div class="content">
                        <h3 class="torres-title">04</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                    <div class="content">
                        <h3 class="torres-title">05</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                    <div class="content">
                        <h3 class="torres-title">06</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                    <div class="content">
                        <h3 class="torres-title">07</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                    <div class="content">
                        <h3 class="torres-title">08</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                    <div class="content">
                        <h3 class="torres-title">09</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                    <div class="content">
                        <h3 class="torres-title">10</h3>
                        <img src="img/moto.png" alt="" class="product-img">
                        <button class="small-btn">Eliminar</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <center><a href="hoariomoto.html" class="small-btn">Ver horario disponible</a></center>
        </div>
        <a href="inicioprincipal.html" class="btn-back">
            <center>VOLVER</center>
        </a>
    </main>
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

        function showTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            document.getElementById(tabId).classList.add('active');
            document.querySelector(`.tab-btn[onclick="showTab('${tabId}')"]`).classList.add('active');
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