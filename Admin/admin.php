<?php 
    include('log.php');
    include 'connect.php';

    if(($_SESSION["logUsername"]!=null) && ($_SESSION["logPass"]!=null)){
        header("Location: home.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrator | Techin</title>

<!--  logo -->
    <link rel="icon" type="image/png" href="../images/logo.png" >      

<!-- ! CSS  -->
    <link rel="stylesheet" href="style.css" type="text/css">   

    
</head>
    <body >
<!--
    !     Login
-->
        <div class="log">
            <div class="box">
                <form action="log.php" method="post">
                    <b><h1>Log in</h1></b>
                    <p id="demo"></p>
                    <input type="text"  placeholder="Username" name="logUsername" required>
                    <input type="password" placeholder="Password" name="logPass" required>
                    <input type="submit" value="Log In" name="log">
                </form>
            </div>
        </div>          


        </section>
    </body>
</html>
