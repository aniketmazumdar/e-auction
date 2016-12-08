<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";

    // fetch the email from form-validation.js page
    $email = strtolower(filter_input(INPUT_POST, "email"));


    // verifying $priEmail already exists or not in table MEMBER_MASTER
    $email_arr = $database->select("MEMBER_MASTER", "MEMBER_ID",[
        "MEMBER_EMAIL"=>$email
    ]);



    if (sizeof($email_arr) == 0) {  //  if entered email doesn't exist in database
        echo json_encode(true);
    }
    else {      //  if entered email already exists in database
        echo json_encode(false);
    }
?>
