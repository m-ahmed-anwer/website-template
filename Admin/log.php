<?php 
    if(isset($_POST['log'])){
        include 'connect.php';
        $logUsername=$_POST['logUsername'];
        $logpass=$_POST['logPass'];

        $result=mysqli_query($connect,"SELECT * FROM admin WHERE username='$logUsername' AND password='$logpass' ");
    
        $row=mysqli_fetch_array($result);
        
        if(is_array($row)){
            $_SESSION["logUsername"]=$row['username'];
            $_SESSION["logPass"]=$row['password'];
            header("Location: home.php");
        }else{
            echo "<script> if(confirm('Incorrect Email or Password')){ document.location.href='admin.php'}else{ document.location.href='admin.php'} </script>"; 
            exit();
        }

    }
?>