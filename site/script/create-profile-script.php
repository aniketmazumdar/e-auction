<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";


    // creating variables for input fields of create profile
    $memberType         =  filter_input(INPUT_POST, "selMemberType");
    $salutation         =  filter_input(INPUT_POST, "selSalutation");
    $firstName          =  filter_input(INPUT_POST, "txtFirstName");
    $middleName         =  filter_input(INPUT_POST, "txtMiddleName");
    $lastName           =  filter_input(INPUT_POST, "txtLastName");
    $dateOfBirth        =  filter_input(INPUT_POST, "dtDateOfBirth");
    $country            =  filter_input(INPUT_POST, "selCountry");
    $state              =  filter_input(INPUT_POST, "selState");
    $district           =  filter_input(INPUT_POST, "txtDistrict");
    $city               =  filter_input(INPUT_POST, "selCity");
    $address1           =  filter_input(INPUT_POST, "txtAddress1");
    $address2           =  filter_input(INPUT_POST, "txtAddress2");
    $zipCode            =  filter_input(INPUT_POST, "txtZipCode");
    $altEmail           =  filter_input(INPUT_POST, "txtAlternateEmail");
    $phone              =  filter_input(INPUT_POST, "txtPhone");
    $fax                =  filter_input(INPUT_POST, "txtFax");
    $secQues            =  filter_input(INPUT_POST, "selSecurityQuestion");
    $secAns             =  filter_input(INPUT_POST, "txtSecurityAnswer");

    // initialised variables
    $data_insert_successful = false;


    session_start();
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])){    //  if session data exists
        // creating variables for session data
        $email      =  filter_var($_SESSION['email']);
        $password   =  filter_var($_SESSION['password']);


        // registration by admin or user
        if(isset($_SESSION["adminId"])){   // registration by admin
            $createdBy  =  filter_var($_SESSION["adminId"]);
        }
        else{   // registration by user
            // last inserted increamented value for TABLE MEMBER_MASTER
            // $createdBy  =  $database->select(INFORMATION_SCHEMA.TABLES, AUTO_INCREMENT,[
            //     TABLE_NAME => "MEMBER_MASTER"
            // ]);
            $query = mysql_query("SELECT MAX(MEMBER_ID) FROM MEMBER_MASTER");
            $f = mysql_fetch_array($query);
            $createdBy = $f['MEMBER_MASTER'];
        }


        // current datetime
        date_default_timezone_set('Asia/Kolkata');
        $currentTimestamp = date('Y-m-d h:i:s');

        // data entry in MEMBER_MASTER table
        $data_insert_successful = $database->insert("MEMBER_MASTER", [
            "MEMBER_ID"                         => '',  //  auto increamented
            "MEMBER_TYPE"                       => $memberType,
            "MEMBER_SALUTATION"                 => $salutation,
            "MEMBER_FIRST_NAME"                 => $firstName,
            "MEMBER_MIDDLE_NAME"                => $middleName,
            "MEMBER_LAST_NAME"                  => $lastName,
            "MEMBER_DATE_OF_BIRTH_STAMP"        => $dateOfBirth,
            "MEMBER_COUNTRY"                    => $country,
            "MEMBER_STATE"                      => $state,
            "MEMBER_DISTRICT"                   => $district,
            "MEMBER_CITY"                       => $city,
            "MEMBER_ADDRESS_1"                  => $address1,
            "MEMBER_ADDRESS_2"                  => $address2,
            "MEMBER_ZIP_CODE"                   => $zipCode,
            "MEMBER_EMAIL"                      => $email,
            "MEMBER_ALTERNATE_EMAIL"            => $altEmail,
            "MEMBER_PHONE"                      => $phone,
            "MEMBER_FAX"                        => $fax,
            "MEMBER_PASSWORD"                   => $password,
            "MEMBER_SECURITY_QUESTION"          => $secQues,
            "MEMBER_SECURITY_ANSWER"            => $secAns,
            "MEMBER_PHOTO"                      => '',
            "MEMBER_CREATION_STAMP"             => $currentTimestamp,
            "MEMBER_CREATED_BY"                 => $createdBy,
            "MEMBER_UPDATION_STAMP"             => '',
            "MEMBER_UPDATED_BY"                 => ''
        ]);
        $data = "('', '$memberType', '$salutation', '$firstName', '$middleName', '$lastName', '$dateOfBirth', '$country', '$state', '$district', '$city', '$address1', '$address2', '$zipCode', '$email', '$altEmail', '$phone', '$fax', '$password', '$secQues', '$secAns','','$currentTimestamp','$createdBy', '', '')";

        echo json_encode($data);
        //form datas are saved in database successfully
        // if($data_insert_successful){
        //     echo json_encode(true);
        // }
        // else{
        //     echo json_encode(false);
        // }
    }
    else{       //  if session data doesn't exist
        echo json_encode(false);
    }
?>
