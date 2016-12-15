<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";

    session_start();
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])){    //  if session data exists
        // creating variables for session data
        $email = filter_var($_SESSION['email']);
    }
    else{
        // fetch the email from form-validation.js page
        $email = strtolower(filter_input(INPUT_POST, "email"));
    }

    // create and initialise variable
    $isEmailExist = false;

    // verifying $priEmail already exists or not in table MEMBER_MASTER
    $isEmailExist = $database->has("MEMBER_MASTER", [
        "MEMBER_EMAIL" => $email
    ]);


    echo json_encode($isEmailExist);
?>
