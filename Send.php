<?php

$to = "montoojatav@gmail.com";
$subject = "New Appointment Form";

$name = $_POST['name'];
$surname = $_POST['surname'];
$class = $_POST['class'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$area = $_POST['area'];

$message = "
NEW FORM RECEIVED

Name: $name
Surname: $surname
Class: $class
Gender: $gender
Address: $address
Pincode: $pincode
Email: $email
Area: $area
";

$headers = "From: Appointment Form <no-reply@yourdomain.com>";

mail($to, $subject, $message, $headers);

echo "Form submitted successfully. Data sent to email.";

?>
