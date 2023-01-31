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
        
        
        <div class="admin" >
            <div class="admin-top">
                <h1>Add Admin</h1> <br>
            </div>
            <form action="" method="POST">
                <div class="adding">
                    <label>Username : </label><input type="text" name="userN" ><br>
                    <label>Password : </label><input type="text" name="passW" ><br>
                    <input type="submit" name="subAd" >
                </div>
            </form>
            <?php 
                if(isset($_POST['subAd'])){
                    $username=$_POST['userN'];
                    $password=$_POST['passW'];

                    $sql=mysqli_query($connect,"SELECT * FROM admin where username='$username'");

                    if(($username==null)||($password==null)){
                        echo "<script>confirm('Cannot be Empty'); </script>"; 
                        exit;
                    }
                    if(mysqli_num_rows($sql)>0)
                    {
                        echo "<script> if(confirm('Username Already Exists')){ document.location.href='add-admin.php'}else{document.location.href='add-admin.php'} </script>"; 
                        exit;
                    }

                    $query="INSERT INTO admin(username, password) VALUES ('$username', '$password') ";
                    mysqli_query($connect,$query);
                    echo "<script> if(confirm('Admin added successfully')){ document.location.href='home.php'}else{document.location.href='home.php'} </script>";
                }
            ?>
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


