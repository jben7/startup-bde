<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $sujet = $_POST["subject"];
    $message = $_POST["message"];


    $to = "jadbenlatreche@gmail.com";
    $subject = "Nouvelle demande de contact";
    $body = "Nom: {$name} \nEmail: {$email} \nSujet: {$sujet} \nMessage: {$message}";
    $headers = "";

    $monMail = mail($to, $subject, $body, $headers);
    if ($monMail) {
        header("Location: /contact.html");
        die();
    } else {
        header("Location: /contact.html");
    }
}
