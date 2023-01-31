<?php 
    include 'connect.php';
    include 'LoginHandler.php';
    include 'signout.php';

    $id=$_GET['id'];
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

<!-- ! Swiperjs cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    

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

        
<!--
    !     Product 1
--> 
   
<?php       
        $result =mysqli_query($connect, "SELECT * FROM paidTemplate WHERE designID='$id' "); 
        $row = mysqli_fetch_array($result); 
    ?>
    <div class="products-page">  
        <div class="pr-leftimg">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide"><img src="<?php echo $row['image']?>" class="img-product"></div>
                  <div class="swiper-slide"><img src="<?php echo $row['image2']?>" class="img-product"></div>
                  <div class="swiper-slide"><img src="<?php echo $row['image3']?>" class="img-product"></div>
                </div>
              
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="pr-right">
            <div class="pr-title">
                <?php echo $row['title']?> - Design <?php echo $row['designID']?>
            </div><hr>
            <div class="pr-price">
                <h6>$ <?php echo $row['price']?>.00</h6>
            </div>
            <div class="pr-des">
                <p class="pr-pr-des">Product Description</p>
                <?php echo $row['des']?>
            </div>
            <div class="buy-now">
                <form action="" method="POST">  
                    <input type="submit" class="add-to" name="adding" value="Add to Cart">
                </form> 
                <?php 
                    if(isset($_POST['adding'])){
                        if(($_SESSION["logMail"]==null) && ($_SESSION["logPass"]==null) && ($_SESSION["logName"]==null) && ($_SESSION["logPhone"]==null) ){
                            echo "<script> if(confirm('Please login to do a Purchase')){ document.location.href='login.php'}else{document.location.href='template.php'} </script>";
                            exit;
                        }
                        $query="INSERT INTO cart(designID, type, price, email,image ) VALUES ('$row[designID]', '$row[type]', '$row[price]', '$_SESSION[logMail]', '$row[image]') ";
                        mysqli_query($connect,$query);
                        echo "<script> alert('Suceesfully Added to Cart')</script>";                   
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="descript">
        <h2 class="lab-top"><Label>Features</Label></h2>
        <ul class="unorder">
            <li>Modern & Beautiful Design</li>
            <li>Ecommerce Functionality</li>
            <li>5+ Pages</li>
            <li>Production Quality Build</li>
            <li>Retina Ready</li>
            <li>100% Responsive</li>
            <li>Extremely Customizable</li>
            <li>Great Performance</li>
            <li>Modern & Clean Layout</li>
        </ul>

        <h2 class="lab-top"><Label>Browser Compatability</Label></h2>
        <ul class="unorder">
            <li>Chrome (Windows, Mac, Linux)</li>
            <li>Firefox (Windows, Mac, Linux)</li>  
            <li>Safari (Mac)</li>
            <li>Microsoft Edge</li>
        </ul>
    </div>


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
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            });
        </script>
    </body>
</html>