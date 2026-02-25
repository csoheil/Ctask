<?php

// Prevent direect access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit();
}

// server-side validation
$name  = trim($_POST["name"] ?? '');
$email = trim($_POST["email"] ?? '');
$msg   = trim($_POST["message"] ?? '');
$provider = $_POST["provider"] ?? 'gmail';

if (!$name || !$email || !$msg) {
    header("Location: contact.php");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contact.php");
    exit();
}

// validation after encode
$name  = urlencode($name);
$email = urlencode($email);
$msg   = urlencode($msg);

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