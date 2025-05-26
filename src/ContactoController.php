<?php

namespace App;

class ContactoController
{
    public function enviarFormulario()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // 1. Recibir los datos del formulario
            $nombre = strip_tags(trim($_POST["nombre"]));
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            $asunto = strip_tags(trim($_POST["asunto"]));
            $mensaje = strip_tags(trim($_POST["mensaje"]));

            // 2. Validar los datos (puedes mover esta lógica a un método separado o usar una clase de validación)
            $errores = [];
            if (empty($nombre)) {
                $errores[] = "El nombre es requerido.";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores[] = "El email no es válido.";
            }
            if (empty($asunto)) {
                $errores[] = "El asunto es requerido.";
            }
            if (empty($mensaje)) {
                $errores[] = "El mensaje es requerido.";
            }

            // 3. Si no hay errores, intentar enviar el correo
            if (empty($errores)) {
                $destinatario = "madeleyvalencia13@gmail.com"; // Reemplaza con tu correo
                $asunto_correo = "Nuevo mensaje de contacto desde el sitio web";
                $cuerpo_correo = "Nombre: $nombre\n";
                $cuerpo_correo .= "Email: $email\n";
                $cuerpo_correo .= "Asunto: $asunto\n";
                $cuerpo_correo .= "Mensaje:\n$mensaje\n";
                $encabezados = "From: $email\r\n";
                $encabezados .= "Reply-To: $email\r\n";

                if (mail($destinatario, $asunto_correo, $cuerpo_correo, $encabezados)) {
                    $mensaje_exito = "¡Gracias por tu mensaje! Te contactaremos pronto.";
                    // Aquí podrías cargar una vista de éxito
                    include 'public/contacto_exito.php'; // Ejemplo de vista de éxito
                    exit();
                } else {
                    $mensaje_error = "Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
                    // Aquí podrías cargar la vista del formulario con el mensaje de error
                    include 'servicios.php'; // Volver al formulario
                    exit();
                }
            } else {
                // 4. Si hay errores de validación, mostrar el formulario con los errores
                $mensaje_error_validacion = "Por favor, corrige los siguientes errores:";
                // Aquí podrías cargar la vista del formulario con los errores
                include 'servicios.php'; // Volver al formulario
                exit();
            }
        } else {
            // Si se accede a la página por GET (primera vez o al recargar)
            // Simplemente carga la vista del formulario
            include 'servicios.php';
        }
    }
}

// Crear una instancia del controlador y llamar al método
$contactoController = new ContactoController();
$contactoController->enviarFormulario();

?>