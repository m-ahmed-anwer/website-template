<?php 
    include('connect.php');

    $id=$_GET['id'];

    $drop = mysqli_query($connect, "DELETE FROM `admin` WHERE `admin`.`userID` = '$id' ");

    echo "<script> document.location.href='home.php' </script>"; 

    
?>