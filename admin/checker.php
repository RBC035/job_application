<?php 

    require_once '../inc/connection.php';

    if(!$_SESSION['user']) {
        header('location:../pages/login.php');	
    } 
 
?>