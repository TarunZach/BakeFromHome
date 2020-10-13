<?php 
session_start();     
    $conn = mysqli_connect('127.0.0.1','root','','mysql');  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    
    $email = $_POST['emaillogin'];  
    $pass = $_POST["passlogin"];
    $hashpass=md5($pass); 
    $loginstatus=false;
        
        $sql = "select *from userinfo where email = '$email' and pass = '$hashpass'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);  
          
        if($count > 0){  
            echo "<h1><center> Login successful </center></h1>";  
            $loginstatus=true;
        }  
        else{  
            echo "<h1> Login failed. Invalid email or pass.</h1>";  
        }     
?>  