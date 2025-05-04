<?php
include('conn.php');
$fullName = $_POST['fname'];
$pass = $_POST['password'];
$type = $_POST['opttype'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$gender = $_POST['optradio'];
$email = $_POST['email'];

$dbI = mysqli_query($con, "INSERT INTO drivers (name, pass ,type, phone, gender, email, dob) VALUES('$fullName', '$pass', '$type','$phone','$gender','$email','$dob')");
mysqli_close($con);
header("Location:home.php");
?>