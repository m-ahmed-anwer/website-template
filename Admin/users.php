<?php  include("connect.php"); ?>
<?php  include("log.php"); 
    if(($_SESSION["logUsername"]==null) || ($_SESSION["logPass"]=null)){
        header("Location: admin.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users | Techin</title>
    

<!--  logo -->
    <link rel="icon" type="image/png" href="../images/logo.png" >        

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

                <a href="home.php" class="brand-logo">       <!-- logo -->
                    <div>               
                        <i class="fa-solid fa-tag"></i>
                    </div>
                </a>
                <a href="home.php" >     
                    <div>Admin</div>
                </a>
                <a href="users.php" >             
                    <div>Users</div>
                </a>
                <a href="product.php">         
                    <div>Products</div>
                </a>
                <a href="order.php">             
                    <div>Orders</div>
                </a>
            </div>
            <hr>
        </div>
        <div class="sign-out">
                <form action="signout.php" method="POST">
                    <button name="signOut" class="signO"> Sign-out</button>
                </form>
        </div>
        
        <div class="admin" >
            <div class="admin-top">
                <h1>Registered Users</h1> <br>
            </div>
            <div class="admin-des">
                Details of users for Techin are listed down below.
            </div>
            <table class="table" border="">
                <tr>
                    <td class="tabled1">User Id</td>
                    <td>Email</td>
                    <td>Name</td>
                    <td>Phone Number</td>
                    <td>Pricing Package</td>
                </tr>
                <?php  
                    $result =mysqli_query($connect, "SELECT * FROM user"); 
                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr class="lists">
                            <td class="tabled1"><?php echo $row['userID']?></td>
                            <td><?php echo $row['email']?></td>
                            <td> <?php echo $row['name']?></td>
                            <td> <?php echo $row['phone']?></td>
                            <td> <?php echo $row['pricing']?></td>
                        </tr>
                <?php  } ?>
            </table>
        </div>

<!--
    !     Footer of website
-->
        <div class="footer">
            <!-- copyright-->
            <p class="copyright" style="line-height:20px;">
                Copyright <i class="fa-regular fa-copyright"></i> 2022 Techin Inc. All Rights Reserved
            </p>

        </div>
        
    </body>
</html>


