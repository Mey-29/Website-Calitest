<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - CaliTest S.A.C.</title>
    <link rel="stylesheet" href="Css/Tienda.css">
    </head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h2 class="page-title">Tienda</h2>

        <div class="shop-layout">
            <aside class="sidebar">
                <div class="category-filter">
                    <h3>CATEGORÍAS</h3>
                    <div class="category-underline"></div>
                    <select id="category-select">
                        <option value="">Select a category</option>
                        <option value="controladores">Controladores</option>
                        <option value="sensores">Sensores</option>
                        <option value="actuadores">Actuadores</option>
                        <option value="fuentes">Fuentes de Poder</option>
                        <option value="cables">Cables</option>
                    </select>
                </div>
            </aside>

            <main class="product-listing">
                <p class="results-info">Showing all 3 results</p>
                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-badge offer-badge">OFERTA!</div>
                        <div class="product-badge discount-badge">-7%</div>
                        <div class="product-image-wrapper">
                            <img src="img/contador-temporizador.jpg" alt="Contador / Temporizador AUTONICS">
                        </div>
                        <div class="product-info">
                            <h4 class="product-name">Contador / Tiempo / Temporizador (Counter / Timer) – AUTONICS</h4>
                            <p class="original-price">S/ 300.00 <span class="igv">Incluido IGV</span></p>
                            <p class="current-price">S/ 280.00</p>
                            <button class="add-to-cart-button">ADD TO</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-badge offer-badge">OFERTA!</div>
                        <div class="product-badge discount-badge">-8%</div>
                        <div class="product-image-wrapper">
                            <img src="img/controlador-temperatura.jpg" alt="Controlador de Temperatura AUTONICS">
                        </div>
                        <div class="product-info">
                            <h4 class="product-name">Controlador de Temperatura °C / °F Relay+SSR – AUTONICS</h4>
                            <p class="original-price">S/ 240.00 <span class="igv">Incluido IGV</span></p>
                            <p class="current-price">S/ 220.00</p>
                            <button class="add-to-cart-button">ADD TO</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-badge offer-badge">OFERTA!</div>
                        <div class="product-badge discount-badge">-4%</div>
                        <div class="product-image-wrapper">
                            <img src="img/variador-velocidad.jpg" alt="Variador de Velocidad RIJING">
                        </div>
                        <div class="product-info">
                            <h4 class="product-name">Variador de Velocidad de Frecuencia de 1 HP / 0.75KW / 3.2A – RIJING</h4>
                            <p class="original-price">S/ 500.00 <span class="igv">Incluido IGV</span></p>
                            <p class="current-price">S/ 480.00</p>
                            <button class="add-to-cart-button">ADD TO</button>
                        </div>
                    </div>

                    </div>
            </main>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>