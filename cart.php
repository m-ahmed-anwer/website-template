<?php 
    include 'connect.php'; 
    include 'LoginHandler.php'; 
    include 'profileUpdate.php'; 

    $reesult=mysqli_query($connect, "SELECT * FROM cart where email='$_SESSION[logMail]'");
    if($reesult==null){
        echo "<script> if(confirm('Cart is Empty') ){ document.location.href='template.php'} else{document.location.href='template.php'}</script>"; 
    } 

    if(($_SESSION["logMail"]==null) && ($_SESSION["logPass"]==null) && ($_SESSION["logName"]==null) && ($_SESSION["logPhone"]==null) ){
        echo "<script> if(confirm('Please login to view Cart') ){ document.location.href='login.php'} else{document.location.href='login.php'}</script>"; 
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website Templates | Techin</title>

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
        <div class="b">
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
        </div>
            
        <!--
            !     Templates
        -->
        <div class="temparary" >
            <div class="template-top">
                <h2>MY CART</h2> <br>
            </div>
        </div>
        <table class="table" border="">
            <tr>
                <th></th>
                <th>Design Id</th>
                <th>Type</th>
                <th>Price</th>
            </tr>
            <?php  
                $result =mysqli_query($connect, "SELECT * FROM cart where email='$_SESSION[logMail]'"); 
                while($row = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td ><img src="<?php echo $row['image']?>" class="product" ></td>
                        <td><b><?php echo $row['designID']?></b></td>
                        <td><?php echo $row['type']?></td>
                        <td >
                            <p id="price">$<?php echo $row['price']?> </p>
                        </td>
                    </tr>
            <?php  } ?>
            <tr>
                <td colspan="3"></td>
                <td style="height:100px;">
                    <input type="button" class="btnOrder" onclick="cartUpdate()" value="Place Order">
                </td> 
            </tr>
            
        </table>
        <script>
            function cartUpdate(){
                <?php 
                    $resultChange=mysqli_query($connect, "SELECT * FROM cart where email='$_SESSION[logMail]'"); 
                    while($row = mysqli_fetch_array($resultChange)){ 
                        $query="INSERT INTO orderTable(designID, type, price, email,image ) VALUES ('$row[designID]', '$row[type]', '$row[price]', '$_SESSION[logMail]', '$row[image]') ";
                        mysqli_query($connect,$query);
                    }

                    $resultq =mysqli_query($connect, "DELETE FROM cart where email='$_SESSION[logMail]' ");
                ?>
                alert('Order Placed');
                window.location.href='template.php';
            }
        </script>
    

<!--
    !     Footer of website
-->
        <section class="footer">

            <!-- social media-->
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100061253912933" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/M_Ahmed_Anwer"target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/m_ahmed.anwer/"target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

            <!-- navigations-->
            <ul class="list" style="font-size: 20px;">
                <li>
                    <a href="home.html">Home</a>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
                <li>
                    <a href="policy.html">Privacy Policies</a>
                </li>
            </ul><br><br>

            <!-- copyright-->
            <p class="copyright" style="line-height:20px;">
                Copyright <i class="fa-regular fa-copyright"></i> 2022, Techin Inc. <br>
                All Rights Reserved <br> 
                M.A.Ahmed
            </p><br>

        </section>
    </body>
</html>