<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";


    // fetch the email from form-validation.js page
    $email          =   strtolower(filter_input(INPUT_POST, "txtEmail"));
    $password       =   filter_input(INPUT_POST, "pwdPassword");
    $rememberMe     =   filter_input(INPUT_POST, "chkRemember_me");

    // initialise new variables
    $memberId = false;

    // verifying $priEmail already exists or not in table MEMBER_MASTER
    $memberId = $database->get("MEMBER_MASTER", "MEMBER_ID",[
        "AND"=>[
            "MEMBER_EMAIL"          =>  $email,
            "MEMBER_PASSWORD"       =>  $password,
            "MEMBER_ACCOUNT_STATUS" =>  '0'         //  account is active
        ]
    ]);


    if ($memberId) {  //  if entered email exist in database
        // session create and stored member id
        session_start();
        $_SESSION["memberId"] = $memberId;

        if($rememberMe){    // if checkbox is clicked
            // cookie create and stored data
            $cookie_name = "memberId";
            $cookie_value = $memberId;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");  // 86400 = 1 day
        }

        echo json_encode(true);
    }
    else {
        echo json_encode(false);
    }
?>
