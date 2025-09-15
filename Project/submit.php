<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Just simple storing / processing
    // You can save in database, send email, etc.
    file_put_contents("requests.txt", "Name: $name | Email: $email | Phone: $phone\n", FILE_APPEND);

    // Redirect back after submission
    header("Location: story.html");
    exit();
}
?>
