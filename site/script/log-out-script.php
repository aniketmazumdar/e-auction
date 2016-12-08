<?php
    session_unset();    // remove all session variables
    session_destroy();  // destroy the session

    setcookie("user", "", time() - 3600);   // set the expiration date to one hour ago
?>
