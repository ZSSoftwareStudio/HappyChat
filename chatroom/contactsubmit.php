<?php
include 'db_connect.php';	

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desk = $_POST['message'];

$sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `desk`) VALUES ('$name', '$email', '$phone', '$desk');
";
mysqli_query($conn, $sql);
$message = "Thank you for your feedback.";
echo "<script type='text/javascript'>";
echo "alert('$message');";
echo "window.location = 'index.php';</script>";
?>
