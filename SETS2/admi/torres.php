<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Torres</title>
  <link rel="shortcut icon" href="img/c.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/torres.css">
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
    </div>
  </header>
  <br>
  <section class="anuncio">
    <center>
      <h2>Torres</h2>
    </center>
  </section>
  <section class="announcements">

    <br>
    <div class="barra">
      <div class="sombra"></div>
      <input type="text" placeholder="Buscar usuario...">
      <ion-icon name="search-outline"></ion-icon>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <br>

    <div class="torress">
      <div class="content">
        <div class="content-img">
          <ul id="listaElementos">
            <p class="torres-title"><a href="pisos.html">Torre 1</a></button>
            <p>
              <img src="img/apa.png" alt="" class="product-img">

        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>

          <button class="eli">Eliminar</button>
        </div>
      </div>

      <div class="content">
        <div class="content-img">


          <p class="torres-title"><a href="pisos.html">Torre 2</a>
          <p>
            <img src="img/apa.png" alt="" class="product-img">
        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>
          <button class="eli">Eliminar</button>
        </div>
      </div>
      <div class="content">
        <div class="content-img">
          <p class="torres-title"><a href="pisos.html">Torre 3</a>
          <p>
            <img src="img/apa.png" alt="" class="product-img">
        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>
          <button class="eli">Eliminar</button>
        </div>
      </div>

      <div class="content">
        <div class="content-img">


          <p class="torres-title"><a href="pisos.html">Torre 4</a>
          <p>
            <img src="img/apa.png" alt="" class="product-img">
        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>
          <button class="eli">Eliminar</button>
        </div>
      </div>
    </div>

  </section>
  <section class="announcements">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <br>

    <div class="torress">
      <div class="content">
        <div class="content-img">
          <ul id="listaElementos">
            <p class="torres-title"><a href="pisos.html">Torre 5</a></button>
            <p>
              <img src="img/apa.png" alt="" class="product-img">

        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>

          <button class="eli">Eliminar</button>
        </div>
      </div>

      <div class="content">
        <div class="content-img">


          <p class="torres-title"><a href="pisos.html">Torre 6</a>
          <p>
            <img src="img/apa.png" alt="" class="product-img">
        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>
          <button class="eli">Eliminar</button>
        </div>
      </div>
      <div class="content">
        <div class="content-img">
          <p class="torres-title"><a href="pisos.html">Torre 7</a>
          <p>
            <img src="img/apa.png" alt="" class="product-img">
        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>
          <button class="eli">Eliminar</button>
        </div>
      </div>

      <div class="content">
        <div class="content-img">


          <p class="torres-title"><a href="pisos.html">Torre 8</a>
          <p>
            <img src="img/apa.png" alt="" class="product-img">
        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>
          <button class="eli">Eliminar</button>
        </div>
      </div>
    </div>
  </section>


  <section class="announcements">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <br>

    <div class="torress">
      <div class="content">
        <div class="content-img">
          <ul id="listaElementos">
            <p class="torres-title"><a href="pisos.html">Torre 9</a></button>
            <p>
              <img src="img/apa.png" alt="" class="product-img">

        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>

          <button class="eli">Eliminar</button>
        </div>
      </div>

      <div class="content">
        <div class="content-img">


          <p class="torres-title"><a href="pisos.html">Torre 10</a>
          <p>
            <img src="img/apa.png" alt="" class="product-img">
        </div>
        <br>
        <br>
        <div class="torre">
          <a href="actualizartorre.html" class="content- button">
            <button class="add-announcement">Actualizar</button>
          </a>
          <a href="pisos.html" class="content- button">
            <button class="add-announcement">pisos</button>
          </a>
          <button class="eli">Eliminar</button>
        </div>
      </div>
  </section>

  <a href="inicioprincipal.html" class="btn small-btn">VOLVER</a>


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