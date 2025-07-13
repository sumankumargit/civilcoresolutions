<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Google reCAPTCHA validation
    $secretKey = "6Levq3ArAAAAAJmjnd-A0Vtb1vDfvfrVv785z5n5";
    $captcha = $_POST['g-recaptcha-response'];

    if (!$captcha) {
        header("Location: ../index.php?error=recaptcha_missing");
        exit;
    }

    $verifyURL = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents($verifyURL . "?secret=" . $secretKey . "&response=" . $captcha);
    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        header("Location: ../index.php?error=recaptcha_failed");
        exit;
    }

    // Form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $location = $_POST["location"];

    // Email details
    $to = "harrisconstructionsocialmedia@gmail.com";
    $subject = "New Inquiry from $name";
    $message = "You have received a new contact form submission:\n\n";
    $message .= "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Location: $location\n";

    $headers = "From: no-reply@yourdomain.com\r\n"; // Use a valid domain email
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: ../index.php?success=true");
        exit;
    } else {
        header("Location: ../index.php?error=email_failed");
        exit;
    }
}
?>
