     // Función para volver al inicio de la página
function volverArriba() {
    document.body.scrollTop = 0; // Para navegadores Safari
    document.documentElement.scrollTop = 0; // Para otros navegadores
}

// Mostrar u ocultar el botón y actualizar el progreso al hacer scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var botonSubir = document.getElementById("botonSubir");
    var scrollTotal = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrollActual = document.documentElement.scrollTop || document.body.scrollTop;
    var progreso = (scrollActual / scrollTotal) * 100;

    if (scrollActual > 20) {
        botonSubir.style.display = "block";
        botonSubir.style.backgroundImage = `conic-gradient(#198754 0%, #198754 ${progreso}%, transparent ${progreso}%, transparent 100%)`;
    } else {
        botonSubir.style.display = "none";
        botonSubir.style.backgroundImage = `conic-gradient(#198754 0%, #198754 0%, transparent 0%, transparent 100%)`;
    }
}