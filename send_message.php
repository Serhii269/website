<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "youggfaserr@gmail.com";
    $subject = "Neue Nachricht von $name";
    $body = "Name: $name\nEmail: $email\nNachricht: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Fehler beim Senden der Nachricht.";
    }
}
?>
