<?php
    session_start();

    if(!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"])
    {
        header("location: /index2.php");
    }

    $loggedIn = true;
?>