console.log("estamos conectados");

// function registrar() {
//     let aceptoTerminos = document.getElementById('aceptoTerminos');
//     let aceptoPolitica = document.getElementById('aceptoPolitica');
//     let btnRegistrar = document.getElementById('btnRegistrar');

//     if (aceptoTerminos.checked && aceptoPolitica.checked) {
//         // Realizar acciones de registro aquí
//         alert('Te acabas de registra a IziAcademy');
//     } else {
//         alert('Por favor, acepta términos y condiciones y política de tratamiento de datos.');
//     }
// }



// Asigna la función validarCheckBoxes al evento click de las checkboxes
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('aceptoTerminos').addEventListener('click', validarCheckBoxes);
    document.getElementById('aceptoPolitica').addEventListener('click', validarCheckBoxes);
});

// Función para validar las checkboxes
function validarCheckBoxes() {
    let aceptoTerminos = document.getElementById('aceptoTerminos');
    let aceptoPolitica = document.getElementById('aceptoPolitica');

    if (aceptoTerminos.checked && aceptoPolitica.checked) {
        // Ambas checkboxes están marcadas
        // Puedes realizar acciones adicionales si es necesario
    } else {
        alert('Por favor, acepta términos y condiciones y la política de tratamiento de datos.');
    }
}

