
<?php 
    include 'connect.php';
    include 'LoginHandler.php';
    include 'signout.php';

    if(isset($_POST['adding'])){
        if(($_SESSION["logMail"]==null) && ($_SESSION["logPass"]==null) && ($_SESSION["logName"]==null) && ($_SESSION["logPhone"]==null) ){
            echo "<script> if(confirm('Please login to do a Purchase')){ document.location.href='login.php'}else{document.location.href='template.php'} </script>";
            exit;
        }
        $query="INSERT INTO cart(designID, type, price, email,image ) VALUES ('$row[designID]', '$row[type]', '$row[price]', '$_SESSION[logMail]', '$row[image]') ";
        mysqli_query($connect,$query);
        echo "<script> if(confirm('Successfuly Added to cart')){ document.location.href='cart.php'}else{document.location.href='cart.php'} </script>";
    }
?>