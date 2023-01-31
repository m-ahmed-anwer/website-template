<?php 
    session_start();
    include 'connect.php';
    include 'LoginHandler.php';
    include 'signout.php';

    $nameE=$_POST['editName'];
    $mobileE=$_POST['editPhone'];

    if(isset($_FILES['editImage'])){
        $error=array();
        $file=$_FILES['editImage']['name'];
        $file_temp=$_FILES['editImage']['tmp_name'];
        $path="images/".$file;
        if(empty($error)==true){
            move_uploaded_file($file_temp,$path);
        }else{
            print_r($error);
        }
    }


    if(isset($_POST['submitEdit'])){

        $value=$mobileE;
        $length=0;
        while($value!=0) {
            $value = $value/10;
            $value=(int)$value;
            $length++;
        }

        $phoneNum=mysqli_query($connect,"SELECT * FROM user where phone='$mobileE'");
        
        if(mysqli_num_rows($phoneNum)>0)
        {
            echo "<script> if(confirm('Phone Number Already Exists')){ document.location.href='profile.php'}else{document.location.href='profile.php'} </script>"; 
            exit;
        }

        // length 9 checked only because if first zero type database wont add zero

        if((($length==9)||($length==10))and ($nameE!=null)){

            $result1=mysqli_query($connect,"UPDATE user SET name='$nameE' , phone='$mobileE', image='$path' WHERE email='$_SESSION[logMail]' ");
        
            $result2=mysqli_query($connect,"SELECT * FROM user WHERE email='$_SESSION[logMail]' ");
            $row1=mysqli_fetch_array($result2);
    
            if($result1){
                $_SESSION["logName"]=$row1['name'];
                $_SESSION["logPhone"]=$row1['phone'];
                $_SESSION["logImage"]=$row1['image'];
                header("Location: profile.php");
            }
        }else if($nameE==null){
            echo "<script> if(confirm('Name cannot be null')){ document.location.href='profile.php'}else{document.location.href='profile.php'} </script>"; 
            exit;
        }else{
            echo "<script> if(confirm('Phone number need to be 10 digits')){ document.location.href='profile.php'}else{document.location.href='profile.php'} </script>"; 
            exit;
        }

    } 
?>