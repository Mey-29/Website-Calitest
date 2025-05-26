<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Servicios - CALITEST S.A.C.</title>
    <link rel="stylesheet" href="Css/styleContacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include 'header.php'; ?>

<div class="main-content">
    <div class="contact-form-wrapper"> <div class="contact-form">
            <h2 class="form-title">Contacto Servicios</h2>
            <form action="src/ContactoController.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div>
                        <label for="nombre">Nombre y Apellidos: <span class="required">(*)</span></label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div>
                        <label for="email">Email: <span class="required">(*)</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label for="ruc">R.U.C. o D.N.I.:</label>
                        <input type="text" id="ruc" name="ruc">
                    </div>
                    <div>
                        <label for="razon_social">Razón Social: <span class="required">(*)</span></label>
                        <input type="text" id="razon_social" name="razon_social" required>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label for="telefono">Teléfono o Celular:</label>
                        <input type="tel" id="telefono" name="telefono">
                    </div>
                    <div>
                        <label for="asunto">Asunto: <span class="required">(*)</span></label>
                        <input type="text" id="asunto" name="asunto" required>
                    </div>
                </div>

                <div class="form-group full-width"> <div>
                        <label for="mensaje">Mensaje: <span class="required">(*)</span></label>
                        <textarea id="mensaje" name="mensaje" required></textarea>
                    </div>
                </div>

                <div class="attachments">
                    <label>Adjuntar archivo:</label>
                    <div class="attachment-row">
                        <input type="file" name="archivo1">
                    </div>
                    <div class="attachment-row">
                        <input type="file" name="archivo2">
                    </div>
                </div>

                <div class="privacy-policy">
                    <input type="checkbox" id="acepto" name="acepto" required>
                    <label for="acepto">He leído y acepto las <a href="#">Políticas de Privacidad</a></label>
                </div>

                <button type="submit">ENVIAR</button>

                <p class="notes">(*) Campos necesarios</p>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>