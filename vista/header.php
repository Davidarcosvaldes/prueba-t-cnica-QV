<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IzyAcademy Header</title>
  <link rel="stylesheet" href="http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/css/cabecera.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
  
</head> 
<body>

  <header>
    <div class="logo-empresa">
      <img src="https://izyacademy.com/pluginfile.php/1/theme_edumy/headerlogo1/1704492337/Logo%20izyacademy%20transparente2022.png" alt="Logo de IzyAcademy" >
    </div>

    <nav>
      <ul>
        <li><a href="http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/index.php">Inicio</a></li>
        
        <li>
          <a href="">Rutas de Formación ▼</a>
          <ul class="sub-menu">
            <li><a href="#">Científico De Datos</a></li>
            <hr>
            <li><a href="http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/formacion_net.php">Ruta de Formacion En .NET</a></li>
            <hr>
            <li><a href="#">Ruta de Formacion en<br> Automatización</a></li>
          </ul>
        </li>

        <li><a href="#" class="triangulo">Cursos ▼ </a></li>

        <li><a href="#">Quiénes Somos</a></li>

      </ul>
    </nav>

    <div class="login">
      <img src="http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/img/user-solid.svg" alt="Icono de Usuario" class="user-icon">
      <a href="#" id="loginFormulario" onclick="openLoginForm()" class="iniciar-sesion">Iniciar Sesión</a>
      <img src="http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/img/magnifying-glass-solid.svg" alt="Icono de Búsqueda" class="lupa-icon">
    </div>

    <div class="text-content">
      <h1>Continua tu formacion con IzyAcademy</h1>
      <p style="color:#fff;">Te ofrecemos una experincia de aprendizaje basada en la formacion de proyectos, <br> apoyada en el uso de recursos interactivo para que tu aprendizaje se efectivo.</p>
    </div>

  </header>
  
</body>
</html>
