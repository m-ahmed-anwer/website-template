<?php 
    session_start();
    if(isset($_POST['logSub'])){
        include 'connect.php';
        $logmail=$_POST['logMail'];
        $logpass=$_POST['logPass'];

        $result=mysqli_query($connect,"SELECT * FROM user WHERE email='$logmail' AND password='$logpass' ");

        $emailPass=mysqli_query($connect,"SELECT password FROM user WHERE email='$logmail'");
        
        if(!$result){
            echo "<script> if(confirm('Error')){ document.location.href='login.php'} else{document.location.href='login.php'}</script>"; 
            exit();
        }
    
        $row=mysqli_fetch_array($result);
        
        if(is_array($row)){
            $_SESSION["logMail"]=$row['email'];
            $_SESSION["logPass"]=$row['password'];
            $_SESSION["logName"]=$row['name'];
            $_SESSION["logPhone"]=$row['phone'];
            $_SESSION["logPrice"]=$row['pricing'];
            $_SESSION["logImage"]=$row1['image'];
            header("Location: home.html");
        }else if($emailPass!=$logpass){
            echo "<script> if(confirm('Incorrect Email or Password')){ document.location.href='login.php'}else{document.location.href='login.php'} </script>"; 
            exit();
        }else{
            echo "<script> if(confirm('Looks like you dont have an account') ){ document.location.href='login.php'} else{document.location.href='login.php'}</script>"; 
            exit();
        }

    }
?>