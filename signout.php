<?php 
    session_start();
    if(isset($_POST['signOut'])){
        unset($_SESSION["logMail"]);
        unset($_SESSION["logPass"]);
        unset($_SESSION["logName"]);
        unset($_SESSION["logPhone"]);
        unset($_SESSION["logPrice"]);
        header("Location: login.php");
    }

?>