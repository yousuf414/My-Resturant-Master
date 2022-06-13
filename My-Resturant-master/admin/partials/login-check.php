<?php 

    // Authorization access control
    // check whether the user is logged in or not 
    if(!isset($_SESSION['user']))
    {
        // User is not logged in 
        // Redirect to login page with message 
        $_SESSION['no-login-message'] = "Please login to use admin page";
        
        header('location:'.SITEURL.'admin/login.php');
    }
?>