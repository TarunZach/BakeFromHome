<!DOCTYPE html>
<?php
  include("signin.php");
  if(empty($_SESSION["login"])){ 
    header("LOCATION:http://localhost/Project/login.php"); 
  }
?>
<html>

<body>

    <head>
        <link rel="stylesheet" href="contactstyle.css" type="text/css">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <title>Contact Us</title>
    <div class="outer-menu">
        <input class="checkbox-toggle" type="checkbox" />
        <div class="hamburger">
            <div></div>
        </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="final.html">About</a></li>
                        <li><a href="desserts.html">Products</a></li>
                        <li><a href="http://localhost/Project/login.php">Login/Sign Up</a></li>
                        <li><a href="http://localhost/Project/contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contactus">
        <section class="get-in-touch">
            <h1 class="title">Contact Us</h1>
            <br><br><br><br><br><br>
            <form class="contact-form row">
                <div class="form-field col x-50">
                    <input id="name" class="input-text js-input" type="text" required>
                    <label class="label" for="name">Name</label>
                </div>
                <div class="form-field col x-50">
                    <input id="email" class="input-text js-input" type="email" required>
                    <label class="label" for="email">E-mail</label>
                </div>
                <div class="form-field col x-100">
                    <input id="message" class="input-text js-input" type="text" required>
                    <label class="label" for="message">Message</label>
                </div>
                <div class="form-field col x-100 align-center">
                    <button id="mybtn" class="submit-btn" type="submit" value="Submit">Submit</button>
                </div>
            </form>
        </section>
    </div>
    </div>
</body>

</html>