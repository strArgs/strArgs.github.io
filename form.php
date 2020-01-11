<?php

$name = $_POST["firstname"];
$surname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];



$conn = new mysqli('localhost', 'root', '', 'form');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$q = "INSERT INTO `form_1` (`firstname`, `surname`, `email`, `message`) VALUES ('$name', '$surname', '$email', '$message');";
    if (mysqli_query($conn, $q))
    mysqli_close($conn);
   
?>
