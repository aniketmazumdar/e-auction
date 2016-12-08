<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";


    // fetch the email from form-validation.js page
    $email          =   strtolower(filter_input(INPUT_POST, "txtEmail"));
    $password       =   filter_input(INPUT_POST, "pwdPassword");
    $rememberMe     =   filter_input(INPUT_POST, "chkRemember_me");



    // verifying $priEmail already exists or not in table MEMBER_MASTER
    $email_arr = $database->select("MEMBER_MASTER", "MEMBER_ID",[
        "AND"=>[
            "MEMBER_EMAIL"=>$email,
            "MEMBER_PASSWORD"=>$password
        ]
    ]);



    if (sizeof($email_arr) == 1) {  //  if entered email exist in database
        // session create and stored member id
        session_start();
        $_SESSION["userId"] = $email_arr[0];

        if($rememberMe){    // if checkbox is clicked
            // cookie create and stored data
            $cookie_name = "userId";
            $cookie_value = $email_arr[0];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");  // 86400 = 1 day
        }

        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
?>
