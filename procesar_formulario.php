<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mirestaurante/vendor/autoload.php'; // Ajusta la ruta según tu estructura

header('Content-Type: application/json');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['success'] = false;
        $response['error'] = 'La dirección de correo electrónico no es válida. Por favor, inténtalo de nuevo.';
    } else {
        $destinatario = "heraldlc04@gmail.com";  
        $asunto = "Nuevo formulario de contacto desde el sitio web";
        $cuerpo = "Nombre: $nombre\n";
        $cuerpo .= "Correo electronico: $email\n";
        $cuerpo .= "Telefono: $telefono\n";
        $cuerpo .= "Mensaje:\n$mensaje";

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.mailtrap.io';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'b9468247e4a648';
            $mail->Password   = 'c53efb68cfeaba';
            $mail->SMTPSecure = 'tls'; 
            $mail->Port       = 2525;

            $mail->setFrom($email, $nombre);
            $mail->addAddress($destinatario);

            $mail->Subject = $asunto;
            $mail->Body    = $cuerpo;

            $mail->send();

            $response['success'] = true;
            $response['message'] = 'Tu formulario ha sido enviado correctamente';
        } catch (Exception $e) {
            $response['success'] = false;
            $response['error'] = 'Hubo un problema al enviar el formulario. Detalles del error: ' . $mail->ErrorInfo;
        }
    }

    echo json_encode($response);
    exit;
}
?>
