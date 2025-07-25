<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $entry = "Name: $name\nEmail: $email\nMessage: $message\n---\n";
    $file = fopen("messages.txt", "a");
    if ($file) {
        fwrite($file, $entry);
        fclose($file);
        echo "Thank you for your message!";
    } else {
        echo "Sorry, could not save your message.";
    }
}
?>