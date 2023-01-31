<?php  
    include("connect.php"); 
    include("log.php"); 
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
                <h1>Add Templates</h1> <br>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" >
                <div class="adding">
                    <label>Design Id : </label><input  class="designId" value="Automatically Generated"  disabled><br>
                    <label>Type : </label><select name="type" >
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                    </select><br>
                    <label>Title : </label><input type="text" name="title" ><br>
                    <label>Price : </label><input type="number" name="price" ><br>
                    <label>Description : <br><textarea class="description" name="des" cols="30" rows="10"></textarea> <br>
                    <label>Image 1 : </label><input type="file" name="image" ><br>
                    <label>Image 2 : </label><input type="file" name="image2" ><br>
                    <label>Image 3 : </label><input type="file" name="image3" ><br>
                    <input type="submit" name="subAd" >
                </div>
            </form>
            <?php 
                if(isset($_POST['subAd'])){
                    $price=$_POST['price'];
                    $type=$_POST['type'];
                    $description=$_POST['des'];
                    $title=$_POST['title'];

                    if(isset($_FILES['image'])){
                        $error=array();
                        $file=$_FILES['image']['name'];
                        $file_temp=$_FILES['image']['tmp_name'];
                        $path="images/".$file;
                        if(empty($error)==true){
                            move_uploaded_file($file_temp,$path);
                        }else{
                            echo $error;
                        }
                    }
                    if(isset($_FILES['image2'])){
                        $error2=array();
                        $file2=$_FILES['image2']['name'];
                        $file_temp2=$_FILES['image2']['tmp_name'];
                        $path2="images/".$file2;
                        if(empty($error2)==true){
                            move_uploaded_file($file_temp2,$path2);
                        }else{
                            echo $error2;
                        }
                    }
                    if(isset($_FILES['image3'])){
                        $error3=array();
                        $file3=$_FILES['image3']['name'];
                        $file_temp3=$_FILES['image3']['tmp_name'];
                        $path3="images/".$file3;
                        if(empty($error3)==true){
                            move_uploaded_file($file_temp3,$path3);
                        }else{
                            echo $error3;
                        }
                    }
                    if($type=='free'){
                        $result1=mysqli_query($connect,"INSERT INTO freeTemplate(type, price, image, description, text ) VALUES ('$type', '0', '$path','$title' , '$description') ");
                        echo "<script> if(confirm('Free Template added successfully')){ document.location.href='product.php'}else{document.location.href='product.php'} </script>";    
                    }else if($type=='paid'){
                        $result2=mysqli_query($connect,"INSERT INTO paidTemplate(type, title , price, image, image2 ,image3, des ) VALUES ('$type', '$title' , '$price', '$path', '$path2', '$path3' )");
                        echo "<script> if(confirm('Paid Template added successfully')){ document.location.href='product.php'}else{document.location.href='product.php'} </script>";
                    }
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


