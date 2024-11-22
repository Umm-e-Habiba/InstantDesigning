<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Replace with your real receiving email address
$receiving_email_address = 'a.zuberi92@gmail.com';

try {
    // Initialize PHPMailer
    $contact = new PHPMailer(true);
    $contact->isSMTP();
    $contact->Host = 'smtp.gmail.com';
    $contact->SMTPAuth = true;

    // Use environment variables or replace with your credentials
    $contact->Username = 'ummehabiba989@gmail.com'; // Replace with your email
    $contact->Password = 'ujim fgaf dwej lndl';   // Replace with your app password
    $contact->SMTPSecure = 'tls';
    $contact->Port = 587;

    // Set email sender and recipient
    $contact->setFrom($_POST['email'], $_POST['name']);
    $contact->addAddress($receiving_email_address);
    $contact->Subject = $_POST['subject'];

    // Construct the email body
    $contact->Body = "You have received a new message from your contact form:\n\n" .
                     "Name: " . htmlspecialchars($_POST['name']) . "\n" .
                     "Email: " . htmlspecialchars($_POST['email']) . "\n" .
                     "Message:\n" . htmlspecialchars($_POST['message']);

    // Optional: Set email format to HTML
    $contact->isHTML(false);

    // Send the email
    if ($contact->send()) {
        echo 'OK';
    } else {
        echo 'Error message here';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$contact->ErrorInfo}";
}
?>