<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the recipient email address
    $to = "archana1snair@gmail.com";

    // Get the form data
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Subject: $subject\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Comment:\n$comment";

    // Set additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Email sent successfully. Thank you!";
    } else {
        echo "Email could not be sent. Please try again later.";
    }
}
?>

