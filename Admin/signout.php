<?php 
    include('log.php');
    session_start();
    if(isset($_POST['signOut'])){
        unset($_SESSION["logUsername"]);
        unset($_SESSION["logPass"]);
        header("Location: admin.php");
    }

?>