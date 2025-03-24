const gallery = document.querySelector('.gallery');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

// Función para calcular el scrollStep según la resolución de la pantalla
function getScrollStep() {
    const screenWidth = window.innerWidth;
    if (screenWidth <= 375) return 200;  // Ajuste para móviles pequeños
    if (screenWidth <= 425) return 260;  // Ajuste para móviles más grandes
    return 300; // Valor por defecto para pantallas más grandes
}

// Evento para actualizar el scrollStep según el las dimensiones
let scrollStep = getScrollStep();
window.addEventListener("resize", () => {
    scrollStep = getScrollStep();
});

// Función para desplazar a la derecha
nextBtn.addEventListener('click', () => {
    if (gallery.scrollLeft + gallery.clientWidth >= gallery.scrollWidth - scrollStep) {
        gallery.scrollTo({ left: 0, behavior: "smooth" }); // Si está al final, regresa al inicio
    } else {
        gallery.scrollBy({ left: scrollStep, behavior: "smooth" });
    }
});

// Función para desplazar a la izquierda
prevBtn.addEventListener('click', () => {
    if (gallery.scrollLeft <= 0) {
        gallery.scrollTo({ left: gallery.scrollWidth, behavior: "smooth" }); // Si está al inicio, va al final
    } else {
        gallery.scrollBy({ left: -scrollStep, behavior: "smooth" });
    }
});