let currentIndex = 0;

function moveSlide(direction) {
  const slides = document.querySelector('.slides');
  const totalImages = slides.children.length;

  currentIndex += direction;

  if (currentIndex < 0) currentIndex = totalImages - 1;
  if (currentIndex >= totalImages) currentIndex = 0;

  const translateX = -currentIndex * 100;
  slides.style.transform = `translateX(${translateX}%)`;
}
