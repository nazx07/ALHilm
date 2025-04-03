<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $place = htmlspecialchars($_POST["place"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $destination = htmlspecialchars($_POST["destination"]);
    $course = htmlspecialchars($_POST["course"]);

    $to = "alhilmabroadeducation786@gmail.com";
    $subject = "New Inquiry from $name";
    $message = "Name: $name\nPlace: $place\nPhone: $phone\nEmail: $email\nDestination: $destination\nCourse: $course";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your inquiry has been sent! We will get back to you soon.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error sending email. Please try again later.'); window.location.href='index.html';</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href='index.html';</script>";
}
?>
