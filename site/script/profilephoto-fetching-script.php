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


        // fetching all data from database of selected member
        $memberData_arr  =  $database->select("MEMBER_MASTER", "*", [
            "MEMBER_EMAIL" => $email
        ]);


        //  profile photo is fetched frm database
        $profilePhoto   =   array_column($memberData_arr, 'MEMBER_PHOTO');    // $memberData_arr[21] is MEMBER_PHOTO

        if(empty($profilePhoto[0])){  // if MEMBER_PHOTO is empty
            //  salutation is fetched frm database
            $salutation    =   array_column($memberData_arr, 'MEMBER_SALUTATION');     // $memberData_arr[2] is MEMBER_SALUTATION

            if($salutation[0] == 1){   //  while MEMBER_SALUTATION is Mr.
                $profilePhoto   =   "/e-auction/site/img/logo-male.png";    // male icon
            }
            else{   //  while MEMBER_SALUTATION is Ms. or Mrs.
                $profilePhoto   =   "/e-auction/site/img/logo-female.png";  // female icon
            }
        }

        echo json_encode($profilePhoto);
    }
    else{  //  if session data doesn't exist
        echo json_encode(false);
    }
?>
