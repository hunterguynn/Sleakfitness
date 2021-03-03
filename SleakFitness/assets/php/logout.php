<?php

    session_start();
    if(isset($_GET['logout']))
    {


        //Unset all session variables
        $_SESSION = array();

        //Destroy session
        session_destroy();

        //redirect to login page
        header('Location: /SleakFitness/login-page.php');
    }
?>