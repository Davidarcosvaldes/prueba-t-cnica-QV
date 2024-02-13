
  document.addEventListener("DOMContentLoaded", function () {
    // Obtener la imagen principal y las imágenes pequeñas
    let mainContent = document.querySelector(".main-content");
    let smallImages = document.querySelectorAll(".small-images img");

    // Agregar un evento de clic a cada imagen pequeña
    smallImages.forEach((smallImage) => {
      smallImage.addEventListener("click", function () {
        // Crear una nueva imagen en la primera columna
        const enlargedImage = document.createElement("img");
        enlargedImage.src = this.src;
        enlargedImage.style.width = "100%";
        enlargedImage.style.borderRadius = "30px";
        enlargedImage.style.transition = "all 0.3s ease"; // Agregar transición suave

        // Agregar la nueva imagen a la primera columna
        mainContent.insertBefore(enlargedImage, mainContent.firstChild);

        // Esperar un pequeño intervalo antes de aplicar estilos para permitir la transición
        setTimeout(() => {
          enlargedImage.style.transform = "translateX(100%)"; // Mover a la otra columna
          enlargedImage.style.width = "200%"; // Aumentar el tamaño
        }, 0);
      });
    });
  });
