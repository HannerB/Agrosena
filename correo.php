<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sjkmnbv@gmail.com';
            $mail->Password   = "eamd ihgz pvjs cqkb";
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('sjkmnbv@gmail.com', 'Agrojam');
            $mail->addAddress("sjcamargo65@misena.edu.co");
            $mail->addReplyTo($correo);
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Agrojam';
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.5;'>
                <div style='padding: 20px; background-color: #f4f4f4; border-radius: 10px;'>
                    <h2 style='color: #2c3e50;'>¡Hola, $name!</h2>
                    <p style='font-size: 16px; margin-bottom: 20px;'>
                        Gracias por contactarnos. Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.
                    </p>
                    <h3 style='color: #2c3e50;'>Detalles de Contacto:</h3>
                    <ul style='list-style-type: none; padding: 0;'>
                        <li><strong>Teléfono:</strong> $telefono</li>
                        <li><strong>Correo:</strong> $correo</li>
                    </ul>
                    <h3 style='color: #2c3e50;'>Mensaje:</h3>
                    <p style='font-size: 16px; background-color: #fff; padding: 15px; border: 1px solid #ddd; border-radius: 5px;'>
                        $mensaje
                    </p>
                    <p style='font-size: 14px; color: #999; margin-top: 30px;'>
                        Atentamente,<br>
                        El equipo de Agrojam
                    </p>
                </div>
            </div>
        ";
        

            $mail->send();
            header("location: index.html");

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }