        //Scroll de la imagen
        window.addEventListener("scroll", function () {
            const animatedElement = document.querySelector(".scroll-imagen");
            const elementPosition = animatedElement.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (elementPosition < screenHeight) {
                animatedElement.classList.add("active");
            }
        });
        //Scroll del texto
        window.addEventListener("scroll", function () {
            const animatedElement = document.querySelector(".scroll-texto");
            const elementPosition = animatedElement.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (elementPosition < screenHeight) {
                animatedElement.classList.add("active");
            }
        });

        // no permitir espacios en los campos
function noEspacios(event) {
    if (event.keyCode === 32) {
      event.preventDefault();
    }
  }
  