<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de Inicio de Sesión</title>
    <!-- <link rel="stylesheet" href="http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/css/login.css"> -->
    <style>
            /* estilos css de el login */
        body {
            font-family: Arial, sans-serif;
        }

        #transparente{
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
            z-index: 1;
        }

        .content {
            padding: 20px;
        }

        Estilo del formulario emergente 
        .ventana {
            display: none;
            position: fixed;
            z-index: 2;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(252, 246, 246, 0.7);
        }

        .ventana-contenido {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 30px;
            border: 1px solid #d6caca;
            width: 30%;
            text-align: center;
            border-radius: 5px;
        }

        .ventana-contenido h2{
            color:#1D3A6C ;
            padding-bottom: 30px;
        }

        .ventana-contenido input{
            display: block;
            margin: 20px auto;
            width: 90%;
            height: 50px;
            box-sizing: border-box;
            border: 2px solid #a0a4a0;
            position: relative;
            background-color: #fff;
            border-radius: 5px;
            font-size: 22px;
        }

        .ventana-contenido button {
            display: block;
            margin: 20px auto; /* Ajusta el margen vertical entre los elementos */
            width: 90%; /* Ocupa el ancho completo del contenedor */
            height: 50px; /* Ajusta la altura del botón según tus necesidades */
            box-sizing: border-box; /* Incluye el padding y el borde en el ancho total */
            border-radius: 5px;
            color: #fff;
            background-color: #1D3A6C;
            font-size: 22px;
        }

        .ventana-contenido button:hover{
            background-color:beige;
            color: #1D3A6C;
        }


        .close {
            color: #fff;
            float: right;
            font-size: 22px;
            font-weight: bold;
            border-radius: 50%;
            background-color:#1D3A6C ;
            padding: 8px 16px;
            position: relative;
            top: -60px; /* Ajusta según la distancia desde la parte superior de la ventana */
            right: -60px;
        }

        .close:hover,
        .close:focus {
            color: #6d7adb;
            text-decoration: none;
            cursor: pointer;
            background-color: beige;
        }  
    </style>

    <!-- Script JavaScript -->
<script >

// Función para abrir el formulario
    function openLoginForm() {
        var formulario = document.getElementById('loginFormulario');
        var fondoTransparente = document.getElementById('transparente');
        
        formulario.style.display = 'block';
        fondoTransparente.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Evita que se haga scroll en la página principal
    }

    // Función para cerrar el formulario
    function closeLoginForm() {
        var formulario = document.getElementById('loginFormulario');
        var fondoTransparente = document.getElementById('transparente');

        formulario.style.display = 'none';
        fondoTransparente.style.display = 'none';
        document.body.style.overflow = 'auto'; // Habilita el scroll en la página principal
    }

    // Función de inicio de sesión
    function login() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Lógica de autenticación
        if (username === '' || password === '') {
            alert('Por favor, complete todos los campos.');
        } else if (username === 'misuario' && password === '1234') {
            alert('Inicio de sesión exitoso');
            closeLoginForm();
        } else {
            alert('Credenciales incorrectas. Intenta de nuevo.');
        }
    }
    </script>

</head>
<body>



<div id="loginFormulario" class="ventana">
    <div class="ventana-contenido">
        <span class="close" onclick="closeLoginForm()">&times;</span>
        <h2>Inicie sesión en su cuenta</h2>
        <form class="form">
                <!-- <button><h2>Inicie sesión en su cuenta</h2></button> -->

            <input type="text" id="username" placeholder="Correo Electronico" required>

            <input type="password" id="password" placeholder="Contraseña" required>

            <button type="button" onclick="if(typeof openLoginForm === 'function') openLoginForm()">Acceder</button>
        </form>
    </div>
</div>

<script>
    // Comprobación si openLoginForm está definida
    if (typeof openLoginForm === 'undefined') {
        console.error('La función openLoginForm no está definida.');
    } else {
        console.log('openLoginForm está definida correctamente.');
    }

    // Otras funciones o código aquí...

</script>

</body>
</html>