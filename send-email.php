<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = urlencode($_POST["name"] ?? '');
    $email = urlencode($_POST["email"] ?? '');
    $msg   = urlencode($_POST["message"] ?? '');
    $provider = $_POST["provider"] ?? 'gmail';

    $to = "ctask2026@gmail.com";
    $subject = urlencode("New Task from $name");

    $body  = "Name: $name%0D%0A";
    $body .= "Email: $email%0D%0A%0D%0A";
    $body .= "Message:%0D%0A$msg";

    switch ($provider) {

        case "gmail":
            $url = "https://mail.google.com/mail/u/0/?fs=1&to=$to&su=$subject&body=$body&tf=cm";
            break;

        case "yahoo":
            $url = "https://compose.mail.yahoo.com/?to=$to&subject=$subject&body=$body";
            break;

        default:
            $url = "mailto:$to?subject=$subject&body=$body";
            break;
    }

    header("Location: $url");
    exit();
}