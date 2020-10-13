<!DOCTYPE html>
<html>

<body>

    <head>
        <link rel="stylesheet" href="loginstyle.css" type="text/css">
        <script type="text/javascript" src="loginscript.js"></script>
    </head>
    <title>UserLogin</title>
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
                        <li><a href="contact.html">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cotn_principal">
        <div class="cont_centrar">

            <div class="cont_login">
                <div class="cont_info_log_sign_up">
                    <div class="col_md_login">
                        <div class="cont_ba_opcitiy">

                            <h2>LOGIN</h2>
                            <p>Welcome Back</p>
                            <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                        </div>
                    </div>

                    <div class="col_md_sign_up">
                        <div class="cont_ba_opcitiy">
                            <h2>SIGN UP</h2>
                            <p>Welcome to Bake From Home</p>
                            <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                        </div>
                    </div>
                </div>


                <div class="cont_back_info">
                    <div class="cont_img_back_grey">
                        <img src="https://images.unsplash.com/photo-1486427944299-d1955d23e34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" />
                    </div>

                </div>
                <div class="cont_forms">
                    <div class="cont_img_back_">
                        <img src="https://images.unsplash.com/photo-1486427944299-d1955d23e34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" />
                    </div>
                    <div class="cont_form_login">
                        <br>
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="arrow left"></i></a>
                        <h2>LOGIN</h2>
                        <br><br><br><br><br>
                        <form action="http://localhost/Project/signin.php" method="POST">
                            <input style="width: 200px; height: 35px; font-size: 15px" name="emaillogin" type="text" placeholder="Email" required><br><br>
                            <input style="width: 200px; height: 35px; font-size: 15px" name="passlogin" type="password" placeholder="pass" required><br><br>
                            <button name="login" class="btn_login" type="submit" action="final.html">LOGIN</button>
                        </form>
                    </div>

                    <div class="cont_form_sign_up">
                        <br>
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="arrow left"></i></a>
                        <h2>SIGN UP</h2>
                        <br><br><br><br><br>
                        <form action="http://localhost/Project/signup.php" method="POST">
                            <input style="width: 200px; height: 35px; font-size: 15px" name="email" type="text" placeholder="Email" required><br><br>
                            <input style="width: 200px; height: 35px; font-size: 15px" type="text" placeholder="User" required><br><br>
                            <input style="width: 200px; height: 35px; font-size: 15px" name="pass" type="password" placeholder="pass" required><br><br>
                            <input style="width: 200px; height: 35px; font-size: 15px" name="confirm_pass" type="password" placeholder="Confirm pass" required><br><br>
                            <button name="signup" class="btn_sign_up" type="submit" action="final.html">SIGN UP</button>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>