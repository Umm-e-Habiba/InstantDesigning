<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email address.";
        exit;
    }

    // Example: Add email to a file or database (customize as needed)
    $file = fopen("newsletter_subscribers.txt", "a");
    fwrite($file, $email . "\n");
    fclose($file);

    echo "OK"; // Respond with "OK" for success
    exit;
}

http_response_code(405);
echo "Method Not Allowed";
?>