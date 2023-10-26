<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    
    $to = "houldakabesha@gmail.com"; 
    $message = "Name: $name\nEmail: $email\nSubject: $subject";

    if (mail($to, $subject, $message)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
