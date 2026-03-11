<?php

$conn = new mysqli("localhost","root","","skill_db");

if($conn->connect_error){
die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

if($conn->query($sql)==TRUE){
echo "Signup Successful";
}else{
echo "Error: ".$conn->error;
}

$conn->close();

?>