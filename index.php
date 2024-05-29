<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "mohamed.alhadi.alsalih@gmail.com";
    $subject = "Nytt meddelande från kontaktformuläret";
    $body = "Namn: $name\nE-post: $email\n\nMeddelande:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Meddelandet har skickats!";
    } else {
        echo "Något gick fel, försök igen senare.";
    }
} else {
    echo "Felaktig begäran";
}
?>

