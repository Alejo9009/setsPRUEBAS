<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pisos</title>
  <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/pisos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <header>
    <div class="topbar">
      <div class="menu-left">
        <img src="img/ajustes.png" alt="Admin" class="admin-img">
        <a href="#" class="menu-button">Admin</a>
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
                        <a href="#" class="chat-item" onclick="openChat('Residente')">Residente</a>
                    
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
  <br>
  <section class="pius">
    <center>
      <h3>Pisos</h3>
    </center>
  </section>


  <section class="announcements">
    <ul id="listaElementos">

      <div class="pisos">
        <li>
          <center>
            <h2>Piso 1</h2>
          </center>
          <div class="barra">
            <div class="sombra"></div>
            <input type="text" placeholder="Buscar apartamento...">
            <ion-icon name="search-outline"></ion-icon>
          </div>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <br>
          <center>
            <div class="pisso">
              <div class="content">
                <div class="content-img">
                  <p class="pisso-title">Apartamento 101
                  <p>
                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 102
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
              <div class="content">
                <div class="content-img">



                  <p class="pisso-title">Apartamento 103
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
            <div class="pisso">
              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 104
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 105
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>


              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 106
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
      </div>
      </li>
      <center>
        <a href="actualizarpiso.html" class="btn small-btn">actualizar Piso</a>
        <a href="" class="btn small-btn">Eliminar Piso</a>
      </center>
      <br>
      <br>
  </section>
  <br>
  <br>


  <section class="announcements">
    <ul id="listaElementos">

      <div class="pisos">
        <li>
          <center>
            <h2>Piso 2</h2>
          </center>
          <div class="barra">
            <div class="sombra"></div>
            <input type="text" placeholder="Buscar apartamento...">
            <ion-icon name="search-outline"></ion-icon>
          </div>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <br>
          <center>
            <div class="pisso">
              <div class="content">
                <div class="content-img">
                  <p class="pisso-title">Apartamento 201
                  <p>
                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 202
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
              <div class="content">
                <div class="content-img">



                  <p class="pisso-title">Apartamento 203
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
            <div class="pisso">
              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 204
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 205
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>


              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 206
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
      </div>
      </li>
      <center>
        <a href="actualizarpiso.html" class="btn small-btn">actualizar Piso</a>
        <a href="" class="btn small-btn">Eliminar Piso</a>
      </center>
      <br>
      <br>
  </section>
  <br>
      <br>

  <section class="announcements">
    <ul id="listaElementos">

      <div class="pisos">
        <li>
          <center>
            <h2>Piso 3</h2>
          </center>
          <div class="barra">
            <div class="sombra"></div>
            <input type="text" placeholder="Buscar apartamento...">
            <ion-icon name="search-outline"></ion-icon>
          </div>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <br>
          <center>
            <div class="pisso">
              <div class="content">
                <div class="content-img">
                  <p class="pisso-title">Apartamento 301
                  <p>
                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 302
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
              <div class="content">
                <div class="content-img">



                  <p class="pisso-title">Apartamento 303
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
            <div class="pisso">
              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 304
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 305
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>


              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 306
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
      </div>
      </li>
      <center>
        <a href="actualizarpiso.html" class="btn small-btn">actualizar Piso</a>
        <a href="" class="btn small-btn">Eliminar Piso</a>
      </center>
      <br>
      <br>
  </section>
  <br>
      <br>
  <section class="announcements">
    <ul id="listaElementos">

      <div class="pisos">
        <li>
          <center>
            <h2>Piso 4</h2>
          </center>
          <div class="barra">
            <div class="sombra"></div>
            <input type="text" placeholder="Buscar apartamento...">
            <ion-icon name="search-outline"></ion-icon>
          </div>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <br>
          <center>
            <div class="pisso">
              <div class="content">
                <div class="content-img">
                  <p class="pisso-title">Apartamento 401
                  <p>
                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 402
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
              <div class="content">
                <div class="content-img">



                  <p class="pisso-title">Apartamento 403
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
            <div class="pisso">
              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 404
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 405
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>


              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 406
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
      </div>
      </li>
      <center>
        <a href="actualizarpiso.html" class="btn small-btn">actualizar Piso</a>
        <a href="" class="btn small-btn">Eliminar Piso</a>
      </center>
      <br>
      <br>
  </section>
  <br>
  <br>
  <section class="announcements">
    <ul id="listaElementos">

      <div class="pisos">
        <li>
          <center>
            <h2>Piso 5</h2>
          </center>
          <div class="barra">
            <div class="sombra"></div>
            <input type="text" placeholder="Buscar apartamento...">
            <ion-icon name="search-outline"></ion-icon>
          </div>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <br>
          <center>
            <div class="pisso">
              <div class="content">
                <div class="content-img">
                  <p class="pisso-title">Apartamento 501
                  <p>
                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 502
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
              <div class="content">
                <div class="content-img">



                  <p class="pisso-title">Apartamento 503
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
            <div class="pisso">
              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 504
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>

              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 505
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>


              <div class="content">
                <div class="content-img">


                  <p class="pisso-title">Apartamento 506
                  <p>

                </div>
                <div class="piso">
                  <a href="actualizarapartamento.html" class="content- button">
                    <button class="add-announcement">Actualizar</button>
                  </a>
                  <button class="eli">Eliminar</button>
                </div>
              </div>
            </div>
      </div>
      </li>
      <center>
        <a href="actualizarpiso.html" class="btn small-btn">actualizar Piso</a>
        <a href="" class="btn small-btn">Eliminar Piso</a>
      </center>
      <br>
      <br>
  </section>
  <br>
      <br>
  <a href="torres.html" class="btn small-btn">VOLVER</a>

  
  

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
    function buscar() {
      var input = document.getElementById("inputBusqueda").value.toLowerCase();
      var lista = document.getElementById("listaElementos");
      var items = lista.getElementsByTagName("li");

      for (var i = 0; i < items.length; i++) {
        var elemento = items[i].textContent || items[i].innerText;
        if (elemento.toLowerCase().indexOf(input) > -1) {
          items[i].style.display = "";
        } else {
          items[i].style.display = "none";
        }
      }
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