//alert("hola");
// mostrar y ocultar el formulario de inicio de sesión
console.log("hola esoty en el login");

function openLoginForm() {
    document.getElementById('loginFormulario').style.display = 'block';
    document.body.style.overflow = 'hidden'; // Evita que se haga scroll en la página principal
}

function closeLoginForm() {
    
    document.getElementById('loginFormulario').style.display = 'none';
    document.body.style.overflow = 'auto'; // Habilita el scroll en la página principal
}

// Función de inicio de sesión
function login() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    // lógica de autenticación
    
    if (username === '' || password === '') {
        alert('Por favor, complete todos los campos.');
        return

    }else if (username === 'misuario' && password === '1234') {
        alert('Inicio de sesión exitoso');
        closeLoginForm();
    } else {
        alert('Credenciales incorrectas. Intenta de nuevo.');
    }
}

