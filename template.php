<?php 
    include('connect.php');

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
            !     Templates
        -->
        <div class="temp" style="background-color:#e9dfd2 ; ">
            <div class="template-top">
                <h1>Techin Templates</h1> <br>
            </div>
            <div class="template-des">
                Discover website templates to create blogs, portfolio websites, and landing pages. Explore a curated collection of HTML website templates  to make the web design process much easier.<br><br>
            </div>
            <svg id="wave" style="background-color:#faf6f6; margin-top:-5px; " width="100%" height="70" viewbox="0 5 100 100" preserveAspectRatio="none">
                <path id="wavepath" d="M0,0  L110,0C35,150 35,50 0,50z" fill="#e9dfd2" />
            </svg>
        </div>
        <div class="radio">
            <label class="paw">Pick a Website for</label>
            <input type="radio" id="free-btn" name="temp-web" class="input-button" >
                <label for="free-btn" class="label-button" onclick="freechange()"  >Free</label>
            <input type="radio" id="paid-btn" name="temp-web" class="input-button" checked >
                <label for="paid-btn" class="label-button" onclick="paidchange()" >Premium</label>
        </div>

        <div class="gallery" id="paid-gallery" >
            <?php  
                $result =mysqli_query($connect, "SELECT * FROM paidTemplate"); 
                while($row = mysqli_fetch_array($result)){ ?>

            <div class="constent">                                        <!-- Paid product -->
                <img src="<?php echo $row['image']?>" class="product" >
                <h3 class="h3-con">Design <?php echo $row['designID']?></h3>
                <h6>$ <?php echo $row['price']?>.00</h6>
                <a href="premium.php?id=<?php echo $row['designID']?>" >
                    <button class="btn">Buy Now</button>
                </a>
            </div>
            <?php  } ?>

        </div>


        <div class="gallery-free" id="free-gallery" style="display:none;" >

            <?php  
                $result =mysqli_query($connect, "SELECT * FROM freeTemplate"); 
                while($row = mysqli_fetch_array($result)){ ?>

                <div class="constent">                                        <!-- Free product -->
                    <img src="<?php echo $row['image']?>" class="product" >
                    <h3 class="h3-con">Design <?php echo $row['designID']?></h3>
                    <p class="pro"><?php echo $row['description']?></p>
                    <h6>$ <?php echo $row['price']?>.00</h6>
                    <a href="free.php?id=<?php echo $row['designID']?>" >
                        <button class="btn">View</button>
                    </a>
                </div>
            <?php  } ?>

        </div>
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
                All Rights Reserved
            </p><br>

        </section>
    </body>
</html>