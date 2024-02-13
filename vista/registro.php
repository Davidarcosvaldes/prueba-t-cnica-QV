
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/css/registro.css">
</head>
<body>
    <div id="registroForm">
        <img src="img/registro.PNG" alt="recorte">

        <form  action="" method="POST"  id="formulario">
            <h2>Registrate</h2>
            <?php
                //include("http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/modelo/conexion_bd.php");
                include("./modelo/conexion_bd.php");
                include("./controlador/controlador_registro.php");
                //include("http://localhost/ProyectosPHP/Proyecto_PruebaTecnica/controlador/controlador_registro.php");

            ?> 
           
            <label for="nombre">Nombres</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email"  name="email"required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="contraseña"equired>

            <label for="confirmarPassword">Confirmar Contraseña</label>
            <input type="password" id="confirmarPassword" name="confirmarContraseña" required>

            <label class="box">
                <input type="checkbox" id="aceptoTerminos"> Acepto términos y condiciones
            </label>

            <label class="box">
                <input type="checkbox" id="aceptoPolitica" class="box-check"> Acepto política de tratamiento de datos
            </label>
            

            <button type="submit" id="btnRegistrar" class="btnRegistrar" name="registro" >Registrarse</button>
        </form>
    </div>

    <script src="../javaScript/registro.js"></script>
   
</body>
</html>