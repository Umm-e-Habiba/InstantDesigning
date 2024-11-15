<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ummehabiba989@gmail.com';
    $mail->Password = 'ujim fgaf dwej lndl';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('ummehabiba989@gmail.com', 'Umm-e-habiba');
    $mail->addAddress('ummehabiba989@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Subject Here';
    $mail->Body    = 'This is the HTML message body';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
