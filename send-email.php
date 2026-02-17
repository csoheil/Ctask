<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $title = htmlspecialchars($_POST["title"]);
    $desc  = htmlspecialchars($_POST["description"]);
    $budget = htmlspecialchars($_POST["budget"]);

    $to = "ctask2026@gmail.com";
    $subject = "New Task Request: $title";

    $message = "
    Name: $name\n
    Email: $email\n
    Budget: $budget\n\n
    Description:\n$desc
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Task sent successfully!";
    } else {
        echo "Failed to send task.";
    }

}
?>
