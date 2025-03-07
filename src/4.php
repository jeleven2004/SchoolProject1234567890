 <?php
//This function is called when the user submits the form to send an email
function sendEmail($name, $email, $message) {
    $to = 'yourname@gmail.com'; // Enter your email address
    $subject = "New Message from $name";
    $body = "You have received a new message from $name\n\n"."Here are the details:\n\nName: $name\nEmail: $email\nMessage:\n$message";
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $body, $headers);
}
?>