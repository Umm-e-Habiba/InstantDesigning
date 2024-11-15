<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ummehabiba989@gmail.com';
    $mail->Password = 'ujim fgaf dwej lndl';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('ummehabiba989@gmail.com', 'Umm-e-habiba');
    $mail->addAddress('ummehabiba989@gmail.com');
    //$mail->addCC('myboss@example.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'HTML email';
    $mail->Body    = '
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Firstname</th><th>Lastname</th>
    </tr>
    <tr>
    <td>John</td><td>Doe</td>
    </tr>
    </table>
    </body>
    </html>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
