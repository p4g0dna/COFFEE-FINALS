<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = "Sunday Special Offer Signup";
    $message = "Thank you for signing up for our Sunday Special Offer!";
    $headers = "From: no-reply@yourdomain.com\r\n";
    
    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $message, $headers);
        echo "Email sent successfully!";
    } else {
        echo "Invalid email address.";
    }
}
?>
