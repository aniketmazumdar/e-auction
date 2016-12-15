<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";


    // creating variables and initialised as null
    $profilePhoto   =   false;
    $salutation     =   false;

    session_start();
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
        // creating variables for session data
        $email  =   filter_var($_SESSION["email"]);


        //  profile photo is fetched from database
        $profilePhoto  =  $database->get("MEMBER_MASTER", "MEMBER_PHOTO", [
            "MEMBER_EMAIL" => $email
        ]);


        if(empty($profilePhoto)){  // if MEMBER_PHOTO is empty
            // getting SALUTATION_NAME from SALUTATION_MASTER of selected MEMBER_ID of MEMBER_MASTER by inner joining
            $salutation  =  $database->get("SALUTATION_MASTER", [
                "[>]MEMBER_MASTER" => ["SALUTATION_ID" => "MEMBER_SALUTATION"]
            ],
                "SALUTATION_GENDER",
            [
                "MEMBER_EMAIL" => $email
            ]);

            if($salutation == "male"){   //  while MEMBER male
                $profilePhoto   =   "/e-auction/site/img/logo-male.png";    // male icon
            }
            else{   //  while MEMBER is female
                $profilePhoto   =   "/e-auction/site/img/logo-female.png";  // female icon
            }
        }

        echo json_encode($profilePhoto);
    }
    else{  //  if session data doesn't exist
        echo json_encode(false);
    }
?>
