<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

set_time_limit(300);

try {
    // Verificar el método de solicitud
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception('Método de solicitud no permitido.');
    }

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['telefono'] ?? '';
    $message = $_POST['mensaje'] ?? '';

    // Verificar que se recibieron todos los datos
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        throw new Exception('Todos los campos son obligatorios.');
    }

    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'servicios@agrojamsena.com';
    $mail->Password   = "";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //Configuración del correo a Agrojam
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('servicios@agrojamsena.com', 'Agrojam');
    $mail->addAddress("servicios@agrojamsena.com");
    // $mail->addReplyTo($correo);


    $mail->Subject = 'Agrojam';
    $body = "
        <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.5;'>
            <div style='padding: 20px; background-color: #f4f4f4; border-radius: 10px;'>
                <h2 style='color: #2c3e50;'>¡Hola,</h2>
                <p style='font-size: 16px; margin-bottom: 20px;'>
                    Usted ha sido contactado por <span class='label'>$name</span>, con el siguiente mensaje:</p>
                </p>
                <h3 style='color: #2c3e50;'>Mensaje:</h3>
                <p style='font-size: 16px; background-color: #fff; padding: 15px; border: 1px solid #ddd; border-radius: 5px;'>
                    $message
                </p>
                <h3 style='color: #2c3e50;'>Por favor, póngase en contacto por:</h3>
                <ul style='list-style-type: none; padding: 0;'>
                    <li><strong>Teléfono:</strong> $phone</li>
                    <li><strong>Correo:</strong> $email</li>
                </ul>
                <p style='font-size: 14px; color: #999; margin-top: 30px;'>
                    &copy; 2024 Agrojam. All rights reserved.
                </p>
            </div>
        </div>
    ";

    $mail->isHTML(true);
    $mail->Body = $body;

    // Send email to Agrojam
    $mail->send();

    // Send confirmation email to sender
    $mail->clearAddresses();
    $mail->addAddress($email);

    $confirmBody = "
    <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.5;'>
            <div style='padding: 20px; background-color: #f4f4f4; border-radius: 10px;'>
                <h2 style='color: #2c3e50;'>¡Hola, $name!</h2>
                <p style='font-size: 16px; margin-bottom: 20px;'>
                    Gracias por contactarnos. Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.
                </p>
                <h3 style='color: #2c3e50;'>Detalles de Contacto:</h3>
                <ul style='list-style-type: none; padding: 0;'>
                    <li><strong>Teléfono:</strong> $phone</li>
                    <li><strong>Correo:</strong> $email</li>
                </ul>
                <h3 style='color: #2c3e50;'>Mensaje:</h3>
                <p style='font-size: 16px; background-color: #fff; padding: 15px; border: 1px solid #ddd; border-radius: 5px;'>
                    $message
                </p>
                <p style='font-size: 14px; color: #999; margin-top: 30px;'>
                    Atentamente,<br>
                    El equipo de Agrojam
                </p>
            </div>
        </div>
    ";

    $mail->Body = $confirmBody;
    $mail->Subject = 'Gracias por contactarnos.';

    $mail->send();


    // Respuesta de éxito
    echo json_encode(['message' => 'El correo ha sido enviado correctamente']);
    http_response_code(200);
} catch (Exception $e) {
    // Respuesta de error
    echo json_encode(['error' => $e->getMessage()]);
    http_response_code(500);
}
