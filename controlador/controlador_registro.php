<?php 
    include("./modelo/conexion_bd.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registro"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];
        $confirmarcontraseña = $_POST["confirmarContraseña"];

        if (empty($nombre) || empty($apellido) || empty($email) || empty($contraseña) || empty($confirmarcontraseña)) {
            echo "Uno de los campos está vacío";
            
        } 
        elseif (is_numeric($nombre) || is_numeric($apellido)){
            echo "El nombre y el apellido no pueden ser numeros";       
        
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "La direccion del correo no es valida";
        
        }elseif($contraseña != $confirmarcontraseña){
            echo "La contraseña deben ser iguales";

        }else {
          // Aquí puedes realizar acciones adicionales como la inserción en la base de datos
            $sql = $conexion->query( "INSERT INTO users (Nombre, Apellidos, Correo, Clave) VALUES ('$nombre', '$apellido', '$email', '$contraseña')");

            if ($sql === TRUE) {
                echo "Registro exitoso";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
         }
    }



?>