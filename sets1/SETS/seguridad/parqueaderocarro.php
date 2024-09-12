<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueaderos </title>
    <link rel="stylesheet" href="css/parqueadero.css?v=<?php echo (rand()); ?>">
    <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="topbar">
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
        </div>
        </header>
        <br>
        <br>
        <br>

        <div class="container">


            <div id="carro" class="tab-content active">
                <div class="tabs">
                    <a href="parqueaderocarro..php" class="tab-btn active" style="text-decoration: none;">Carro</a>
                    <a href="paromoto.php" class="tab-btn" style="text-decoration: none;">Moto</a>
                </div>
                <section class="pius">
                    <center>
                        <h3>Parqueadero Carro</h3>
                    </center>
                </section>
                <section class="pis">
                    <center>
                        <h3>Parqueadero Zona 1</h3>
                    </center>
                </section>
                <div class="search-bar-container">
                    <div class="barra">
                        <input type="text" placeholder="Buscar parqueadero...">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                </div>
                <div class="torress">
                    <div class="content">
                        <h3 class="torres-title">01</h3>
                        <img src="img/esta.png" alt="" class="product-img">
                        <a href="inicioprincipal.php" class="btn btn-outline-success" style=" font-size:30px;">
                            <center>VOLVER</center>
                        </a>

                    </div>

                    <div class="content">
                        <h3 class="torres-title">02</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>

                    <div class="content">
                        <h3 class="torres-title">03</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>
                    <div class="content">
                        <h3 class="torres-title">04</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>
                    <div class="content">
                        <h3 class="torres-title">05</h3>
                        <img src="img/esta.png" alt="" class="product-img">


                    </div>
                    <p>
                        <br>
                    <div class="content">
                        <h3 class="torres-title">06</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>
                    <div class="content">
                        <h3 class="torres-title">07</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>
                    <div class="content">
                        <h3 class="torres-title">08</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>
                    <div class="content">
                        <h3 class="torres-title">09</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>
                    <div class="content">
                        <h3 class="torres-title">10</h3>
                        <img src="img/esta.png" alt="" class="product-img">

                    </div>

                </div>
            </div>
            <br>

            <center><a href="horariocarro.php" class="small-btn" style="text-decoration: none;">Ver horario disponible</a> </center>
        </div>
        <br>
        </div>

        <a href="inicioprincipal.php" class="btn btn-outline-success" style=" font-size:30px;">
            <center>VOLVER</center>
        </a>
        </div>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>