<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo "CALITEST S.A.C."; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    /* === RESET + TIPOGRAFÍA === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f8f8;
    }

    /* === HEADER === */
    header {
      background: linear-gradient(to right, #e0e0e0, #f8f8f8, #e0e0e0);
      border-bottom: 1px solid #ddd;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .header-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 5%;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }

    .logo img {
      height: 80px;
      object-fit: contain;
    }

    .contact-details {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      justify-content: flex-end;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 15px;
      color: #555;
    }

    .contact-item i {
      color: #28a745;
      font-size: 20px;
    }

    /* === NAVBAR === */
    .navbar {
      background-color: #28a745;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px 5%;
      position: relative;
      z-index: 1000;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 25px;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 15px;
      border-radius: 5px;
    }

    .nav-links a:hover {
      background-color: #218838;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #218838;
      min-width: 180px;
      z-index: 1000;
      flex-direction: column;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.3);
      border-top: 3px solid #ff9800;
      border-radius: 0 0 5px 5px;
      overflow: hidden;
    }

    .dropdown:hover .dropdown-content {
      display: flex;
    }

    .dropdown-content a {
      padding: 12px 15px;
      color: white;
      font-size: 14px;
    }

    .dropdown-content a:hover {
      background-color: #1a6f2d;
    }

    .search-bar form {
      display: flex;
      margin-left: auto;
    }

    .search-bar input {
      padding: 8px 15px;
      border: none;
      border-radius: 20px 0 0 20px;
      font-size: 14px;
      width: 250px;
    }

    .search-bar button {
      padding: 8px 15px;
      background-color: #ff9800;
      color: white;
      border: none;
      border-radius: 0 20px 20px 0;
      cursor: pointer;
    }

    .search-bar button:hover {
      background-color: #f57c00;
    }

    .hamburger {
      display: none;
    }

    /* === SLIDER === */
    .slideshow-container {
      width: 100%;
      position: relative;
      overflow: hidden;
      padding-bottom: 46.63%;
      height: 0;
      background-color: #ccc;
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
      object-fit: cover;
      z-index: 1;
    }

    .image-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 2;
    }

    .slide-content-text {
      color: white;
      font-size: 50px;
      text-align: center;
      position: absolute;
      top: 38%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
      font-weight: 900;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
      z-index: 3;
      opacity: 0;
      transition: opacity 1s ease;
    }

    .slide-subtext {
      color: white;
      font-size: 20px;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
      font-weight: 400;
      z-index: 3;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
      opacity: 0;
      transition: opacity 1.5s ease;
    }

    .slide-button {
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 3;
      opacity: 0;
      transition: opacity 2s ease;
      padding: 12px 24px;
      font-size: 16px;
      background-color: #ff6600;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .slide-button:hover {
      background-color: #e55b00;
    }

    /* === RESPONSIVE === */
    @media only screen and (max-width: 768px) {
      .slide-content-text { font-size: 36px; }
      .slide-subtext { font-size: 16px; }
    }

    @media only screen and (max-width: 480px) {
      .slide-content-text { font-size: 28px; }
      .slide-subtext { font-size: 14px; }
    }
  </style>
</head>
<body>

<header>
  <div class="header-top">
    <div class="logo">
      <img src="img/CALITEST-LOGO-1.png" alt="Logo Calitest">
    </div>
    <div class="contact-details">
      <div class="contact-item">
        <i class="fas fa-phone-volume"></i>
        <div>
          <span>Teléfono</span><br>
          <span><?php echo "+51 934 292 886 / 934 292 417"; ?></span>
        </div>
      </div>
      <div class="contact-item">
        <i class="fas fa-map-marker-alt"></i>
        <div>
          <span>País / Ciudad</span><br>
          <span><?php echo "Perú / Lima"; ?></span>
        </div>
      </div>
      <div class="contact-item">
        <i class="far fa-envelope"></i>
        <div>
          <span>Email</span><br>
          <span><?php echo "servicios@calitestsac.com"; ?></span>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar">
    <div class="nav-links">
      <a href="index.php"><i class="fas fa-home"></i> INICIO</a>
      <a href="tienda.php"><i class="fas fa-shopping-cart"></i> TIENDA</a>
      <a href="brochure.php"><i class="fas fa-book"></i> BROCHURE</a>
      <div class="dropdown">
        <a href="#"><i class="fas fa-tools"></i> SERVICIOS</a>
        <div class="dropdown-content">
          <a href="servicio.php">Metrología</a>
          <a href="servicio2.php">Automatización</a>
          <a href="servicio3.php">Instrumentación</a>
        </div>
      </div>
      <a href="nosotros.php"><i class="fas fa-users"></i> NOSOTROS</a>
      <a href="contacto.php"><i class="fas fa-envelope"></i> CONTACTO</a>
      <div class="search-bar">
        <form action="busqueda.php" method="get">
          <input type="text" name="query" placeholder="Buscar...">
          <button type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
</header>

<!-- === SLIDER === -->
<div class="slideshow-container">

  <!-- Slide 1 -->
  <div class="mySlides fade">
    <img src="img/slider/CALIBRACIÓN Y METROLOGIA.jpg" alt="Calibración y Metrología">
    <div class="image-overlay"></div>
    <div class="slide-content-text">METROLOGÍA Y CALIBRACIÓN</div>
    <div class="slide-subtext">Equipos calibrados bajo normas internacionales.</div>
    <a class="slide-button" href="servicios.php">Contáctenos</a>
  </div>

  <!-- Slide 2 -->
  <div class="mySlides fade">
    <img src="img/slider/CONTROLADORES.jpg" alt="Controladores">
    <div class="image-overlay"></div>
    <div class="slide-content-text">TIENDA</div>
    <div class="slide-subtext">Compra sensores, controladores y más aquí.</div>
    <a class="slide-button" href="tienda.php">Ir a tienda</a>
  </div>

  <!-- Slide 3 -->
  <div class="mySlides fade">
    <img src="img/slider/SOPORTE TÉCNICO.jpg" alt="Soporte Técnico">
    <div class="image-overlay"></div>
    <div class="slide-content-text">SOPORTE TÉCNICO</div>
    <div class="slide-subtext">Soporte técnico especializado y asesoría remota.</div>
    <a class="slide-button" href="servicios.php">Solicitar soporte</a>
  </div>

</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";

    const title = slides[i].getElementsByClassName("slide-content-text")[0];
    const subtext = slides[i].getElementsByClassName("slide-subtext")[0];
    const button = slides[i].getElementsByClassName("slide-button")[0];

    if (title) title.style.opacity = 0;
    if (subtext) subtext.style.opacity = 0;
    if (button) button.style.opacity = 0;
  }

  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  const currentSlide = slides[slideIndex - 1];
  currentSlide.style.display = "block";

  setTimeout(() => {
    const title = currentSlide.getElementsByClassName("slide-content-text")[0];
    const subtext = currentSlide.getElementsByClassName("slide-subtext")[0];
    const button = currentSlide.getElementsByClassName("slide-button")[0];

    if (title) title.style.opacity = 1;
    setTimeout(() => {
      if (subtext) subtext.style.opacity = 1;
      setTimeout(() => {
        if (button) button.style.opacity = 1;
      }, 300);
    }, 300);
  }, 100);

  setTimeout(showSlides, 5000);
}
</script>

</body>
</html>
