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

    <title>Admin | Techin</title>
    

<!--  logo -->
    <link rel="icon" type="image/png" href="../images/logo.png" >        

<!-- ! CSS  -->
    <link rel="stylesheet" href="style.css" type="text/css">   

<!-- SOCIAL MEDIA LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
                <h1>Templates</h1> <br>
            </div>
            <div class="admin-des">
                Techin Template Products 
            </div>
            <a href="add-template.php"><button>Add Template</button></a>
            <table class="table" border="">
                <tr>
                    <td colspan="4"><h3>Paid Templates</h3></td>
                </tr>
                <tr>
                    <td class="tabled1">Image</td>
                    <td>Design ID</td>
                    <td>Type</td>
                    <td>Price</td>
                </tr>
                <?php  
                    $result =mysqli_query($connect, "SELECT * FROM paidTemplate"); 
                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td class="tabled2"><img height="250px"  src="../<?php echo $row['image']?>" class="product" ></td>
                            <td><b><?php echo $row['designID']?></b></td>
                            <td><?php echo $row['type']?></td>
                            <td >
                                <p id="price">$<?php echo $row['price']?> </p>
                            </td>
                        </tr>
                <?php  } ?>
                <tr>
                <td colspan="4"><h3>Free Templates</h3></td>
                </tr>
                <tr>
                    <td class="tabled1">Image</td>
                    <td>Design ID</td>
                    <td>Type</td>
                    <td>Price</td>
                </tr>
                <?php  
                    $result =mysqli_query($connect, "SELECT * FROM freeTemplate"); 
                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td class="tabled2"><img height="250px"  src="../<?php echo $row['image']?>" class="product" ></td>
                            <td><b><?php echo $row['designID']?></b></td>
                            <td><?php echo $row['type']?></td>
                            <td>$<?php echo $row['price']?> </td>
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


