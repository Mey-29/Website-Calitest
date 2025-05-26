 const slider = document.querySelector('.clients-slider');

  let scrollAmount = 0;
  let direction = 1;

  function autoScrollSlider() {
    if (!slider) return;

    // Mover el scroll
    scrollAmount += 1.5 * direction; // velocidad
    slider.scrollLeft = scrollAmount;

    // Si llega al final o inicio, invertir dirección
    if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 1) {
      direction = -1;
    } else if (slider.scrollLeft <= 0) {
      direction = 1;
    }

    requestAnimationFrame(autoScrollSlider);
  }

  // Esperar que cargue todo antes de iniciar
  window.addEventListener('load', () => {
    setTimeout(autoScrollSlider, 1000); // Espera un segundo antes de iniciar
  });