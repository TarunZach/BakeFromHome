<?php
session_start();
$conn = mysqli_connect('127.0.0.1','root','','mysql');  
mysqli_select_db($conn, 'userinfo');   
$email = $_POST["email"];  
$pass = $_POST["pass"];
$hashpass=password_hash($pass,PASSWORD_DEFAULT);

$s = "INSERT INTO userinfo (email,pass) VALUES ('$email','$hashpass');"; 

$temp=$conn->query($s)
?>