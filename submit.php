<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    echo "<h2>Thank you for your feedback, $name!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
}
?>
