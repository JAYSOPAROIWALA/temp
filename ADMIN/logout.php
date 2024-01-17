<?php
    session_start();
    //echo $_SESSION["admin"];
   // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
    header("location:index1.php")
?>