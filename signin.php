<?php

session_start();

include("config.php");
$email = $_POST['emaillogin'];
$pass = $_POST['passlogin'];
$hashpass = md5($pass);

if($stmt = $mysqli->prepare("SELECT * FROM userinfo WHERE email = '$email' AND pass = '$hashpass'")){
  //$stmt->bind_param('ss',$email,$hashpass); 
  $stmt->execute(); 
  $stmt->store_result();
  $result = $stmt->num_rows; 
  $stmt->bind_result($email,$hashpass); 
  $stmt->fetch(); 
  $stmt->close(); 

  if($result == 1){ 
    $_SESSION["login"] = $email; 
    echo "Login Succesful";
    header("LOCATION:http://localhost/Project/contact.php"); 
  }
  else { 
    echo "Incorrect Email or Password";
    header("Refresh:2; LOCATION:http://localhost/Project/login.php"); 
  }

} 

?>