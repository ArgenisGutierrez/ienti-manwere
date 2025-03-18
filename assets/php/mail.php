<?php
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación
    $required = ['nombre', 'email', 'telefono', 'mensaje'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            die("El campo $field es requerido");
        }
    }

    // Sanitización
    $nombre = substr(htmlspecialchars(trim($_POST['nombre'])), 0, 100);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = substr(htmlspecialchars(trim($_POST['telefono'])), 0, 20);
    $mensaje = substr(htmlspecialchars(trim($_POST['mensaje'])), 0, 1000);

    // Validación de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Correo electrónico no válido");
    }

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

        $secretKey = '';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
        $response = json_decode($verifyResponse);
        if ($response->success) {


            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';

            try {
                $mail->isSMTP();
                $mail->Host = '';
                $mail->Port = 465;
                $mail->SMTPAuth = true;
                $mail->Username = '';
                $mail->Password = '';
                $mail->SMTPSecure = "ssl";

                $mail->setFrom('', 'Consulta');
                $mail->addAddress('', '');
                $mail->addReplyTo($email, $nombre);

                $mail->isHTML(true);
                $mail->Subject = "Solicitud de consultoria de " . htmlspecialchars($nombre);
                $mail->Body = "
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Teléfono:</strong> $telefono</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
            ";

                $mail->send();

                // Redireccion
                header('Location: ../../contacto.php?status=success');
                exit();
            } catch (Exception $e) {
                error_log("Error PHPMailer: " . $e->getMessage());
                header('Location: ../../contacto.php?status=error');
                exit();
            }
        } else {
            header('Location:../../contacto.php?captcha=error');
            exit();
        }
    } else {
        header('Location:../../contacto.php?captcha=empty');
        exit();
    }
} else {
    header("HTTP/1.1 403 Forbidden");
    exit();
}
