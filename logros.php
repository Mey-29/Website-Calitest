<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo "CALITEST S.A.C."; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
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
            /* Opción 1: Overlay verde semitransparente */
            background-color: rgba(40, 167, 69, 0.7); /* Verde principal con 70% de opacidad */
            /* Opción 2 (alternativa): Overlay gris oscuro con transparencia */
            /* background-color: rgba(0, 0, 0, 0.6); */ /* Negro con 60% de opacidad */
            /* Opción 3 (alternativa): Overlay ligeramente más claro para un look más "limpio" */
            /* background-color: rgba(44, 44, 44, 0.7); */ /* Gris oscuro con 70% de opacidad */

            z-index: 1;
        }

        .counter-section > * {
            position: relative;
            z-index: 2;
        }

        .counter-section h2 {
            font-size: 48px;
            color: #ff9800; /* Naranja para el año, contrasta con el verde */
            margin-bottom: 50px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .counters-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .counter-box {
            /* Fondo de la caja: ahora con un color muy sutil o un degradado transparente */
            background: rgba(255, 255, 255, 0.1); /* Blanco muy transparente */
            /* O una versión más sutil del verde: */
            /* background: rgba(40, 167, 69, 0.1); */ /* Verde con 10% de opacidad */

            border: 2px solid #4CAF50; /* Borde verde */
            border-radius: 10px;
            padding: 30px 20px;
            flex: 1 1 auto;
            min-width: 220px;
            max-width: 250px;

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
            /* Sombra más pronunciada al hover, puedes hacerla un poco más oscura */
            box-shadow: 0 10px 20px rgba(0,0,0,0.6);
            /* O un ligero cambio de color al hover si quieres un efecto sutil */
            /* background: rgba(255, 255, 255, 0.2); */
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

        /* --- Media Queries (sin cambios significativos en esta sección) --- */
        @media screen and (max-width: 992px) {
            .counter-section {
                padding: 60px 3%;
            }
            .counter-section h2 {
                font-size: 42px;
                margin-bottom: 40px;
            }
            .counters-container {
                gap: 30px;
                justify-content: center;
            }
            .counter-box {
                min-width: 200px;
                max-width: 45%;
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
        }

        @media screen and (max-width: 768px) {
            .counter-section h2 {
                font-size: 38px;
            }
            .counters-container {
                flex-direction: column;
                align-items: center;
                gap: 25px;
            }
            .counter-box {
                width: 80%;
                max-width: 300px;
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
        }

        @media screen and (max-width: 480px) {
            .counter-section h2 {
                font-size: 30px;
            }
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
    <body>

  <section class="counter-section">
    <h2>2021 - 2025</h2>
    <div class="counters-container">
        <div class="counter-box">
            <i class="fas fa-check-circle icon"></i>
            <div class="count-number" data-target="99">+ 0</div>
            <div class="label">CALIBRACIONES</div>
        </div>
        <div class="counter-box">
            <i class="fas fa-users icon"></i>
            <div class="count-number" data-target="10">+ 0</div>
            <div class="label">EMPLEADOS</div>
        </div>
        <div class="counter-box">
            <i class="fas fa-gem icon"></i>
            <div class="count-number" data-target="10">+ 0</div>
            <div class="label">PATRONES</div>
        </div>
        <div class="counter-box">
            <i class="fas fa-handshake icon"></i>
            <div class="count-number" data-target="30">+ 0</div>
            <div class="label">CLIENTES</div>
        </div>
    </div>
</section>
<script>
    // Tu script toggleMenu() para el header (Mantenlo si lo tienes separado)
    function toggleMenu() {
        const nav = document.getElementById("navLinks");
        nav.classList.toggle("active");
    }

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
</script>
</body>
</html>