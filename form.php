<?php

$name = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$message_1 = $_POST["message"];


  
$conn = new mysqli('localhost', 'root', '', 'project_1');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$q = "INSERT INTO form (firstname, lastname, email, message)";
$q .= "VALUES ('$name', '$lastname', '$email', '$message_1')";
    if (mysqli_query($conn, $q))
    mysqli_close($conn);
   
?>
