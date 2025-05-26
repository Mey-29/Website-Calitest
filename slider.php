<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo "CALITEST S.A.C."; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
   /* Estilos generales (reset y body) */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Verdana, sans-serif;
    background-color: #f0f0f0;
}

/* --- Estilos del Slider --- */
.slideshow-container {
    width: 100%;
    position: relative; /* FUNDAMENTAL para posicionar los puntos de forma absoluta */
    overflow: hidden;
    padding-bottom: 46.63%; /* Mantiene la relación de aspecto del slider (ej. 16:9 si la imagen original es 1920x1080) */
    height: 0; /* Necesario con padding-bottom para el ratio */
    background-color: #ccc; /* Color de respaldo si no hay imagen */
}

.mySlides {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.mySlides img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Asegura que la imagen cubra el contenedor sin distorsionarse */
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Overlay oscuro semitransparente sobre la imagen */
    z-index: 2;
}

.slide-content-text {
    color: #ffffff;
    font-size: 50px;
    text-align: center;
    position: absolute;
    top: 38%; /* Default position for desktop */
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-width: 900px;
    font-weight: 900;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
    z-index: 3;
    opacity: 0;
    transition: opacity 1s ease;
}

.slide-subtext {
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    position: absolute;
    top: 50%; /* Default position for desktop */
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-width: 700px;
    font-weight: 400;
    z-index: 3;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    opacity: 0;
    transition: opacity 1.5s ease;
}

.slide-button {
    position: absolute;
    top: 60%; /* Default position for desktop */
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 3;
    opacity: 0;
    transition: opacity 2s ease;
    padding: 12px 24px;
    font-size: 16px;
    background-color: #ff6600; /* Color naranja del botón */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}

.slide-button:hover {
    background-color: #e55b00; /* Naranja más oscuro al pasar el mouse */
}

/* Contenedor de los puntos de navegación */
.dots-container {
    position: absolute;
    bottom: 20px; /* Distancia desde la parte inferior del slider */
    width: 100%;
    text-align: center;
    z-index: 4; /* Asegúrate de que estén por encima de todo el contenido del slide */
}

.dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb; /* Color gris de los puntos inactivos */
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    cursor: pointer;
}

.dot.active { /* Clase 'active' para el punto del slide actual */
    background-color: #717171; /* Gris oscuro para el punto activo */
}

/* --- Nueva sección de Contadores Dinámicos --- */
.counter-section {
    background-color: #2c2c2c; /* Color de respaldo si la imagen no carga */
    background-image: url('img/your-background-image.jpg'); /* REEMPLAZA ESTA RUTA CON TU IMAGEN REAL */
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Opcional: para efecto parallax */
    padding: 80px 5%;
    text-align: center;
    color: white;
    position: relative;
    overflow: hidden;
}

.counter-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* Overlay verde semitransparente */
    background-color: rgba(40, 167, 69, 0.7); /* Verde principal con 70% de opacidad */
    z-index: 1;
}

.counter-section > * {
    position: relative;
    z-index: 2;
}

/* La regla .counter-section h2 se ha eliminado */

.counters-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap; /* PERMITE QUE LOS ELEMENTOS SE ENVUELVAN */
    gap: 40px; /* Espacio entre los contadores (por defecto para desktop) */
    max-width: 1200px; /* Limita el ancho del contenedor */
    margin: 0 auto; /* Centra el contenedor */
}

.counter-box {
    background: rgba(255, 255, 255, 0.1); /* Blanco muy transparente para el fondo de la caja */
    border: 2px solid #4CAF50; /* Borde verde */
    border-radius: 10px;
    padding: 30px 20px;
    flex: 1 1 auto; /* Permite que crezca y se encoja, base auto */
    min-width: 220px; /* Ancho mínimo para que se vean bien en desktop */
    max-width: 250px; /* Ancho máximo en desktop */

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.counter-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.6);
}

.counter-box .icon {
    color: #ff9800; /* Naranja para los íconos para que resalten */
    font-size: 45px;
    margin-bottom: 15px;
}

.counter-box .count-number {
    font-size: 55px;
    font-weight: bold;
    color: white; /* Mantener blanco para contraste */
    margin-bottom: 10px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.counter-box .label {
    font-size: 18px;
    color: #f0f0f0;
    text-transform: uppercase;
    font-weight: 500;
}

/* --- Media Queries para Slider (Ajuste de posiciones 'top') --- */
@media only screen and (max-width: 768px) {
    .slide-content-text {
        font-size: 36px;
        top: 35%; /* Ajusta la posición del texto principal para tablets */
    }
    .slide-subtext {
        font-size: 16px;
        top: 40%; /* Ajusta la posición del subtexto, dando más espacio */
    }
    .slide-button {
        top: 60%; /* Mantén el botón similar, o ajústalo si es necesario */
        font-size: 14px; /* Texto del botón ligeramente más pequeño */
        padding: 10px 20px; /* Padding del botón ligeramente más pequeño */
    }
    .dots-container {
        bottom: 10px; /* Un poco menos de margen en móviles */
    }
}

@media only screen and (max-width: 480px) { /* Este es probablemente tu breakpoint para dispositivos "knoms" */
    .slide-content-text {
        font-size: 28px;
        top: 25%; /* Mueve el texto principal más arriba en pantallas muy pequeñas */
        width: 90%; /* Permite que ocupe más ancho */
    }
    .slide-subtext {
        font-size: 14px;
        top: 45%; /* Mueve el subtexto más arriba, asegurando espacio con el texto principal */
        width: 90%; /* Permite que ocupe más ancho */
    }
    .slide-button {
        top: 60%; /* Mueve el botón más abajo para evitar colisión con el texto */
        font-size: 13px; /* Tamaño de botón consistente */
        padding: 8px 15px; /* Padding de botón consistente */
    }
    /* Si la clase .numbertext no se usa, puedes quitar esta regla */
    /* .numbertext { Si esta clase no se usa, puedes quitarla } */
}

/* --- Media Queries para Contadores Dinámicos --- */
@media screen and (max-width: 992px) { /* Tabletas y pantallas más pequeñas */
    .counter-section {
        padding: 60px 3%;
    }
    .counters-container {
        gap: 30px;
        justify-content: center;
    }
    .counter-box {
        min-width: 200px;
        max-width: 45%; /* Para tener 2 por fila si el ancho lo permite */
        padding: 25px 15px;
    }
    .counter-box .icon {
        font-size: 40px;
    }
    .counter-box .count-number {
        font-size: 48px;
    }
    .counter-box .label {
        font-size: 16px;
    }

    .slide-content-text{

        top:30%
    }
}

@media screen and (max-width: 768px) { /* Móviles y tablets pequeñas */
    .counters-container {
        flex-direction: column; /* Apila los contadores en una sola columna */
        align-items: center; /* Centra los elementos apilados */
        gap: 25px; /* Espacio entre contadores apilados */
    }
    .counter-box {
        width: 80%; /* Ocupa la mayor parte del ancho */
        max-width: 300px; /* Ancho máximo para el contador individual */
        padding: 25px 20px;
    }
    .counter-box .icon {
        font-size: 40px;
    }
    .counter-box .count-number {
        font-size: 48px;
    }
    .counter-box .label {
        font-size: 16px;
    }
    .slide-content-text{

        top:25%
    }
}

@media screen and (max-width: 480px) { /* Móviles muy pequeños */
    .counter-box {
        width: 90%;
        padding: 20px 15px;
    }
    .counter-box .icon {
        font-size: 35px;
    }
    .counter-box .count-number {
        font-size: 40px;
    }
    .counter-box .label {
        font-size: 14px;
    }
}   
    </style>
</head>
<body>

<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="img/slider/CALIBRACIÓN Y METROLOGIA.jpg" alt="Calibración y Metrología">
        <div class="image-overlay"></div>
        <div class="slide-content-text">METROLOGÍA Y CALIBRACIÓN</div>
        <div class="slide-subtext">Equipos calibrados bajo normas internacionales.</div>
        <a class="slide-button" href="servicios.php">Contactenos</a>
    </div>

    <div class="mySlides fade">
        <img src="img/slider/CONTROLADORES.jpg" alt="Controladores">
        <div class="image-overlay"></div>
        <div class="slide-content-text">TIENDA</div>
        <div class="slide-subtext">Compra sensores, controladores y más aquí.</div>
        <a class="slide-button" href="tienda.php">Ir a tienda</a>
    </div>

    <div class="mySlides fade">
        <img src="img/slider/SOPORTE TÉCNICO.jpg" alt="Soporte Técnico">
        <div class="image-overlay"></div>
        <div class="slide-content-text">SOPORTE TÉCNICO</div>
        <div class="slide-subtext">Soporte técnico especializado y asesoría remota.</div>
        <a class="slide-button" href="servicios.php">Solicitar soporte</a>
    </div>

    <div class="dots-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

</div>



<script>
    // === Script del Slider ===
    let slideIndex = 1;
    let autoSlideTimeout; // Variable para controlar el temporizador automático

    // Función principal para mostrar los slides
    function showSlides(n) {
        let i;
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("dot");

        // Lógica para que el slider sea cíclico
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }

        // Oculta todos los slides y resetea la opacidad de su contenido
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            const title = slides[i].querySelector(".slide-content-text");
            const subtext = slides[i].querySelector(".slide-subtext");
            const button = slides[i].querySelector(".slide-button");
            if (title) title.style.opacity = 0;
            if (subtext) subtext.style.opacity = 0;
            if (button) button.style.opacity = 0;
        }

        // Quita la clase 'active' de todos los puntos de navegación
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        // Muestra el slide actual y marca el punto de navegación correspondiente como activo
        const currentSlide = slides[slideIndex - 1];
        currentSlide.style.display = "block";
        dots[slideIndex - 1].className += " active";

        // Animaciones de aparición en cadena para el contenido del slide
        setTimeout(() => {
            const title = currentSlide.querySelector(".slide-content-text");
            const subtext = currentSlide.querySelector(".slide-subtext");
            const button = currentSlide.querySelector(".slide-button");

            if (title) title.style.opacity = 1;
            setTimeout(() => {
                if (subtext) subtext.style.opacity = 1;
                setTimeout(() => {
                    if (button) button.style.opacity = 1;
                }, 300); // Retraso para el botón
            }, 300); // Retraso para el subtexto
        }, 100); // Retraso inicial para el título

        // Limpia el temporizador anterior y establece uno nuevo para el avance automático
        clearTimeout(autoSlideTimeout);
        autoSlideTimeout = setTimeout(() => {
            slideIndex++; // Incrementa el índice para el siguiente slide
            showSlides(slideIndex); // Llama a showSlides recursivamente para el siguiente
        }, 5000); // Cambia de slide cada 5 segundos
    }

    // Función para cambiar de slide al hacer clic en los puntos de navegación
    function currentSlide(n) {
        slideIndex = n;
        showSlides(slideIndex);
    }

    // Inicializa el slider automáticamente cuando el DOM esté completamente cargado
    document.addEventListener('DOMContentLoaded', () => {
        showSlides(slideIndex); // Muestra el primer slide y activa el temporizador
    });


    // === Script para los contadores dinámicos ===
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.count-number');
        const speed = 200; // Cuanto mayor, más lento es el conteo

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            let current = 0;
            const updateCount = () => {
                const increment = target / speed;
                if (current < target) {
                    current += increment;
                    counter.innerText = '+ ' + Math.ceil(current);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = '+ ' + target;
                }
            };
            updateCount();
        };

        const counterSection = document.querySelector('.counter-section');
        let countersAnimated = false; // Bandera para asegurar que la animación solo se ejecuta una vez

        const observerOptions = {
            root: null, // Observa el viewport
            rootMargin: '0px',
            threshold: 0.5 // Cuando al menos el 50% de la sección es visible
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !countersAnimated) {
                    // Si la sección es visible y no se han animado los contadores
                    counters.forEach(animateCounter);
                    countersAnimated = true; // Marca como animado
                    observer.unobserve(entry.target); // Deja de observar una vez que se activa
                }
            });
        }, observerOptions);

        if (counterSection) {
            observer.observe(counterSection);
        }
    });

    // Tu script toggleMenu() para el header (Si lo necesitas, asegúrate de que el elemento 'navLinks' exista)
    /*
    function toggleMenu() {
        const nav = document.getElementById("navLinks");
        if (nav) { // Asegúrate de que el elemento exista antes de intentar manipularlo
            nav.classList.toggle("active");
        }
    }
    */
</script>

</body>
</html>