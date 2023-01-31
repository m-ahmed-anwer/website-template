<?php 
    session_start();
    include 'connect.php'; 
    include 'LoginHandler.php'; 
    include 'profileUpdate.php'; 

    if(($_SESSION["logMail"]==null) && ($_SESSION["logPass"]==null) && ($_SESSION["logName"]==null) && ($_SESSION["logPhone"]==null) ){
        header("Location: login.php");
        exit;
    }
    $imgquery=mysqli_query($connect,"SELECT * FROM user WHERE email='$_SESSION[logMail]' ");
    $row10=mysqli_fetch_array($imgquery);
    $profileImg = $row10['image'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile | Techin</title>

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
    !     Profile Page
-->

       <div class="profile">
        <div class="left-profile">
            <img height='200px' width='200px' src="<?php echo $profileImg ?>"  id='img-profile' class='image-profile'> 
            <div class="details">
                <?php if($_SESSION["logName"]!=null){echo "Hello ".$_SESSION["logName"]; }?>
            </div>
            <div class="direct-link">
                <button onclick="Mprofile()" >My Profile</button><br>
                <button onclick="purchaseH()">Purchase History</button><br>
                <form action="signout.php" method="POST">
                    <button onclick="signout()" name="signOut"> Sign-out</button><br>
                </form>
            </div>
        </div>
        <div class="right-profile">
                <!--Profile Content-->
            <div class="my-profile" id="profiles">
                <div class="profile-top" >
                    <h3>My Profile </h3> <br>
                </div>
                <div class="edits">
                    <label>Full Name : </label><label id="des-for-profile"><?php echo $_SESSION["logName"]; ?></label> <br>
                    <label>E-mail : </label><label id="des-for-profile"><?php echo $_SESSION["logMail"]; ?></label><br>
                    <label>Mobile : </label><label id="des-for-profile"><?php echo $_SESSION["logPhone"]; ?> </label><br>
                    <label>Pricing Plan : </label><label id="des-for-profile"><?php echo $_SESSION["logPrice"]; ?> </label><br>
                </div>
                <div class="sub" id="submitting">
                    <input type="submit" class="editing" id="sub-profile" value="Edit Profile" onclick="editProfile()">
                </div>
                <div class="edit-after" id="editingS" style="display:none;">
                    <p>Do you want edit the profile</p>
                    <input type="button" id="edit-pp" value="Yes" onclick="editingP()">
                    <input type="button" id="cancel-pp" value="Cancel" onclick="cancelingP()">
                </div>
            </div>

              <!--Editing -->
            <div class="edit-page" id="editing-page" style="display:none;">
                <div class="profile-top" >

                    <h3>Edit profile</h3> <br>
                </div>
                <form action="profileUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="edits">
                        <label>Name : </label><input type="text" name="editName" id=""> <br>
                        <label>Mobile : </label> <input type="text" name="editPhone" id=""> <br>
                        <label>Add Image : </label> <input type="file" name="editImage"> <br>
                    </div>
                    <div class="edit-sub" id="edit-submiting">
                        <input type="submit" class="edit-sub" id="sub-edit" value="Save Changes" onclick="saveChange()"  name="submitEdit">
                    </div>
                </form>
            </div>

                <!--Purchase History -->
            <div class="purchase-history" id="purchase" style="display:none;">
                <div class="profile-top" >
                    <h3>Purchase History </h3> <br>
                </div>
                <table class="tblPurchase" border="">
                    <tr style="height:50px;">
                        <th>Glimpse</th>
                        <th>Design Id</th>
                        <th>Type</th>
                        <th>Price</th>
                    </tr>
                    <?php  
                        $result =mysqli_query($connect, "SELECT * FROM orderTable where email='$_SESSION[logMail]' "); 
                        while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td style="width: 25%;"><img  src="<?php echo $row['image']?>" class="product" ></td>
                                <td><?php echo $row['designId']?></td>
                                <td> <?php echo $row['type']?></td>
                                <td> $<?php echo $row['price']?>.00</td>
                            </tr>
                    <?php  $count+=$row['price'];}     ?>
                    <tr style="height:50px;">
                        <td colspan="3"><h2>Sub Total</h2></td>
                        <td> <h2>$<?php echo $count ?>.00</h2></td>
                    </tr>
                </table>
            </div>
        </div>
       </div>
        
<!--
    !     Footer of website
-->
        <section class="footer" >

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