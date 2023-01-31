<?php 
    include 'connect.php';
    include 'profileUpdate.php';

    if(($_SESSION["logMail"]!=null) || ($_SESSION["logPass"]!=null) || ($_SESSION["logName"]!=null) || ($_SESSION["logPhone"]!=null) || ($_SESSION["logPrice"]!=null)){
        header("Location: template.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Log in | Techin</title>

<!--  logo -->
    <link rel="icon" type="image/png" href="images/logo.png" >        

<!-- ! CSS  -->
    <link rel="stylesheet" href="style.css" type="text/css">   

<!-- SOCIAL MEDIA LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- ! JAVASCRIPT  -->
    <script src="myscript.js" type="text/javascript"></script>
    

</head>
    <body >
<!--
    !       Navigation bar LEFT
-->
        <div class="navbar">
            <div class="navbar-left">

                <a href="home.html" class="brand-logo">       <!-- logo -->
                    <div>               
                        <i class="fa-solid fa-tag"></i> Techin
                    </div>
                </a>
                
                <a href="home.html" >             <!-- honme -->
                    <div>Home</div>
                </a>
                <a href="template.php">          <!-- template -->
                    <div>Templates</div>
                </a>
                <a href="price.html">             <!-- priceing -->
                    <div>Pricing</div>
                </a>
            </div>

            <!--
                !    Navigation bar RIGHT
            -->
            <div class="navbar-right">
                <!-- cart -->
                <a href="cart.php">
                    <i  class="fas fa-light fa-cart-shopping"></i>
                </a>
 
                <!-- profile -->
                <a href="profile.php">
                    <i id="faws" class="fas fa-regular fa-user"></i> 
                </a>

                <a href="login.php">               <!-- login -->
                    <div class="log-in">Log in</div>
                </a>

                <a href="signup.php">               <!-- sign up -->
                    <div class="sign-up">Sign up</div>
                </a>  

            </div>
        </div>

<!--
    !     Login
-->
        <div class="con-log">
            <div class="lg-left">           <!-- login box-->
                <div class="boxx">
                    <form class="box" style="padding-top:10px ;"  action="LoginHandler.php" method="post">
                        <b><h1>Log in</h1></b>
                        <input type="email" id="mailing" placeholder="Email" name="logMail" required>
                        <input type="password" id="password" placeholder="Password" name="logPass" required>
                        <input type="submit" id="sub" value="Log In" onclick="loginf()" name="logSub">
                        <div class="not-mem" >
                            Don't have an account? 
                            <a href="signup.php" id="account">
                                Sign Up
                            </a> 
                        </div>
                    </form>
                </div>
            </div>
            <div class="verticalr"></div>
            <div class="lg-right">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_q5pk6p1k.json"  background="transparent"  speed="1"  style="width: 400px; height: auto;"    ></lottie-player>
             </div>
        </div>          


        </section>
    </body>
</html>
