<?php 
    include 'connect.php';
    $name=$_POST['signName'];
    $email=$_POST['signEmail'];
    $phone=$_POST['signPhone'];
    $pricing=$_POST['pricing'];
    $password=$_POST['signPassword'];
    $Confirm=$_POST['signConfirm'];

    $sql=mysqli_query($connect,"SELECT * FROM user where email='$email'");

    $phoneNumber=mysqli_query($connect,"SELECT * FROM user where phone='$phone'");

    if(($name==null)||( $email==null)||($password==null)||($Confirm==null)||($phone==null)||($pricing==null)){
        echo "<script>confirm('Cannot be Empty'); </script>"; 
        exit;
    }
    if(mysqli_num_rows($sql)>0)
    {
        echo "<script> if(confirm('Email Id Already Exists')){ document.location.href='signup.php'}else{document.location.href='signup.php'} </script>"; 
        exit;
    }
    
    if(mysqli_num_rows($phoneNumber)>0)
    {
        echo "<script> if(confirm('Phone Number Already Exists')){ document.location.href='signup.php'}else{document.location.href='signup.php'} </script>"; 
        exit;
    }


    if(isset($_POST['signSub'])){
        if($password==$Confirm){
            $query="INSERT INTO user(name, email, password, phone ,pricing,image) VALUES ('$name', '$email', '$password','$phone','$pricing','') ";
            mysqli_query($connect,$query);
            echo "<script> if(confirm('Account created successfully')){ document.location.href='login.php'}else{document.location.href='login.php'} </script>"; 
        }else{
            echo "<script> if(confirm('Confirm password needs to match')){ document.location.href='signup.php'}else{document.location.href='signup.php'} </script>";
            exit;
        }
    }
?>