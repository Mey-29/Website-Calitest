<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo "CALITEST S.A.C."; ?></title>
        <link rel="stylesheet" href="Css/header.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
     
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
                    <span class="letters" style="font-weight: bold;">Teléfono</span><br>
                    <span><?php echo "+51 934 292 886 / 934 292 417"; ?></span>
                </div>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <span class="letters" style="font-weight: bold;">País / Ciudad</span><br>
                    <span><?php echo "Perú / Lima"; ?></span>
                </div>
            </div>
            <div class="contact-item">
                <i class="far fa-envelope"></i>
                <div>
                    <span class="letters" style="font-weight: bold;">Email</span><br>
                    <span><?php echo "servicios@calitestsac.com"; ?></span>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar">
        <button class="hamburger" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>

        <div class="nav-links" id="navLinks">
    <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">
        <i class="fas fa-home"></i> INICIO
    </a>
    <a href="tienda.php" class="<?= $currentPage == 'tienda.php' ? 'active' : '' ?>">
        <i class="fas fa-shopping-cart"></i> TIENDA
    </a>
    <a href="brochure.php" class="<?= $currentPage == 'brochure.php' ? 'active' : '' ?>">
        <i class="fas fa-book"></i> BROCHURE
    </a>

    <div class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle <?= in_array($currentPage, ['servicios.php', 'ventas.php']) ? 'active' : '' ?>">
        <i class="fas fa-envelope"></i> CONTACTO
    </a>
    <div class="dropdown-content">
        <a href="servicios.php" class="<?= $currentPage == 'servicios.php' ? 'active' : '' ?>">Servicios</a>
        <a href="ventas.php" class="<?= $currentPage == 'ventas.php' ? 'active' : '' ?>">Ventas</a>
    </div>
</div>


    <div class="dropdown">
        <a href="#" class="<?= in_array($currentPage, ['acercade.php', 'misionVision.php']) ? 'active' : '' ?>">
            <i class="fas fa-building"></i> EMPRESA
        </a>
        <div class="dropdown-content">
            <a href="acercade.php" class="<?= $currentPage == 'acercade.php' ? 'active' : '' ?>">Acerca de</a>
            <a href="misionVision.php" class="<?= $currentPage == 'misionVision.php' ? 'active' : '' ?>">Misión y Visión</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#" class="<?= in_array($currentPage, ['privacidad.php', 'reembolso.php', 'terminos.php']) ? 'active' : '' ?>">
            <i class="fas fa-shield-alt"></i> POLÍTICAS
        </a>
        <div class="dropdown-content">
            <a href="privacidad.php" class="<?= $currentPage == 'privacidad.php' ? 'active' : '' ?>">Privacidad</a>
            <a href="reembolso.php" class="<?= $currentPage == 'reembolso.php' ? 'active' : '' ?>">Reembolsos</a>
            <a href="terminos.php" class="<?= $currentPage == 'terminos.php' ? 'active' : '' ?>">Términos</a>
        </div>
    </div>

     <div class="dropdown">
        <a href="#" class="<?= in_array($currentPage, ['inicioSesion.php']) ? 'active' : '' ?>">
            <i class="fas fa-building"></i> LOGIN
        </a>
     <div class="dropdown-content">
    <a href="inicioSesion.php" class="<?= $currentPage == 'inicioSesion.php' ? 'active' : '' ?>">Inicio Sesion</a>
    <a href="https://calitestsac.com/certificados/" target="_blank">Mis Certificados</a>
</div>
    </div>

    <div class="search-bar">
        <form action="buscar.php" method="get">
            <input type="text" name="q" placeholder="Buscar Servicio o Producto" />
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>

    </nav>
</header>

<script>
    function toggleMenu() {
        const navLinks = document.getElementById("navLinks");
        navLinks.classList.toggle("active");
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Activar enlace actual
        const navLinks = document.querySelectorAll(".nav-links > a");
        navLinks.forEach(link => {
            link.addEventListener("click", function () {
                navLinks.forEach(l => l.classList.remove("active"));
                this.classList.add("active");
            });
        });

        // Dropdowns en móviles: clic para expandir
        const dropdownToggles = document.querySelectorAll(".dropdown > a");

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener("click", function (e) {
                e.preventDefault();

                const parentDropdown = this.parentElement;
                parentDropdown.classList.toggle("active");

                // Cierra otros dropdowns
                document.querySelectorAll(".dropdown").forEach(drop => {
                    if (drop !== parentDropdown) {
                        drop.classList.remove("active");
                    }
                });
            });
        });
    });
</script>



</body>
</html>