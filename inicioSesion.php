<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login / Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/styleInicioSesion.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="login-register-wrapper">
    <div class="form-box active" id="login-form">
        <h3>Iniciar Sesión</h3>
        <form>
            <div class="form-group">
                <label for="login-username">Usuario o Correo *</label>
                <input type="text" id="login-username" required>
            </div>
            <div class="form-group">
                <label for="login-password">Contraseña *</label>
                <div class="password-input-wrapper">
                    <input type="password" id="login-password" required>
                    <button type="button" class="toggle-password" data-target="login-password">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <label><input type="checkbox"> Recordarme</label>
            </div>
            <button type="submit" class="btn btn-login">Entrar</button>
            <p class="switch-form-text">
                ¿No tienes cuenta? <a href="#" id="show-register">Regístrate</a>
            </p>
        </form>
    </div>

    <div class="form-box" id="register-form">
        <h3>Registrarse</h3>
        <form>
            <div class="form-group">
                <label for="register-username">Usuario *</label>
                <input type="text" id="register-username" required>
            </div>
            <div class="form-group">
                <label for="register-email">Correo electrónico *</label>
                <input type="email" id="register-email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Contraseña *</label>
                <div class="password-input-wrapper">
                    <input type="password" id="register-password" required>
                    <button type="button" class="toggle-password" data-target="register-password">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
            <button type="submit" class="btn btn-register">Registrarse</button>
            <p class="switch-form-text">
                ¿Ya tienes cuenta? <a href="#" id="show-login">Iniciar sesión</a>
            </p>
        </form>
    </div>

    <p class="privacy-text">
        Sus datos personales se utilizarán para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descritos en nuestros(as) <a href="privacidad.php" target="_blank" class="privacy-link">privacy_policy</a>.
    </p>

</div>
<?php include 'footer.php'; ?>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
    // Cambiar entre login y registro
    document.getElementById('show-register').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('login-form').classList.remove('active');
        document.getElementById('register-form').classList.add('active');
    });

    document.getElementById('show-login').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('register-form').classList.remove('active');
        document.getElementById('login-form').classList.add('active');
    });

    // Mostrar / ocultar contraseña
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';
            button.innerHTML = isPassword
                ? '<i class="fas fa-eye-slash"></i>'
                : '<i class="fas fa-eye"></i>';
        });
    });
</script>

</body>
</html>