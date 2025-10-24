<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Chatbot flotante</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="titulo">5 de Choclo</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="iconos">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a id="nav" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Menú
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a id="menuIcono" class="dropdown-item" href="calendario.html">📅 Calendario</a></li>
              <li><a id="menuIcono" class="dropdown-item" href="bloc_notas.html">📝 Bloc de notas</a></li>
            </ul>
          </li>
          <li><a id="nav" href="login.html" class="btn btn-login">Iniciar sesión</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="contenido">
  <h1>Bienvenido a 5 de Choclo</h1>
  <p>Aquí podrás encontrar un chatbot donde podrás pedirle recetas con cualquier condición, además de guardarlas y asignarles un día en un calendario interactivo.</p>
  </div>

  <div class="chat-container">
    <iframe
      src="https://www.chatbase.co/chatbot-iframe/b1di_eT50LgTJfryEk4wf"
      width="100%"
      style="height: 100%; min-height: 700px"
      frameborder="0"
    ></iframe>
  </div>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>
  