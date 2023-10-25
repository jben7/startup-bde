<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST['name'])
        && !empty($_POST['email'])
        && !empty($_POST['message'])
    ) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];


        $to = "jadbenlatreche@gmail.com";
        $subject = "Nouvelle demande de contact";
        $body = "Nom: {$name}\nEmail: {$email}\nTelephone: {$phone}\nMessage: {$message}";
        $headers = "";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
            sleep(3);
            header("Location: /contact.html");
            die();
        } else {
            echo "Failed to send message.";
            sleep(3);
            header("Location: /contact.html");
        }
    }
}
