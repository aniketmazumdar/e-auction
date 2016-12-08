<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";

    session_start();
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
        // creating variables for session data
        $email  =   filter_var($_SESSION["email"]);


        // fetching all data from database of selected member
        $memberData_arr  =  $database->select("MEMBER_MASTER", "*", [
            "MEMBER_EMAIL" => $email
        ]);

        // check $email is saved in database or not
        if(isset($memberData_arr[0]))
            echo json_encode(true);
        else
            echo json_encode(false);
    }
    else{  //  if session data doesn't exist
        echo json_encode(false);
    }
?>
