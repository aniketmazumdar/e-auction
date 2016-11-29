<?php

    $txtEmail           =  filter_input(INPUT_POST, "txtEmail");
    $pwdPassword        =  filter_input(INPUT_POST, "pwdNewPassword");


    // session create and stored email and password
    session_start();
    $_SESSION["email"] = $txtEmail;
    $_SESSION["password"] = $pwdPassword;

    echo json_encode(true);
?>
