<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/e-auction/site/include/db-session.inc.php";


    session_start();
    if(isset($_SESSION["memberId"])){
        $id     =   filter_var($_SESSION["memberId"]);


        // getting all data from database of selected MEMBER_ID
        $memberData_arr  =  $database->get("MEMBER_MASTER", [
            "MEMBER_SALUTATION",
            "MEMBER_FIRST_NAME",
            "MEMBER_MIDDLE_NAME",
            "MEMBER_LAST_NAME",
            "MEMBER_DATE_OF_BIRTH_STAMP",
            "MEMBER_COUNTRY",
            "MEMBER_STATE",
            "MEMBER_DISTRICT",
            "MEMBER_CITY",
            "MEMBER_ADDRESS_1",
            "MEMBER_ADDRESS_2",
            "MEMBER_ZIP_CODE",
            "MEMBER_EMAIL",
            "MEMBER_ALTERNATE_EMAIL",
            "MEMBER_PHONE",
            "MEMBER_FAX",
            "MEMBER_PHOTO"
        ], [
            "MEMBER_ID" => $id
        ]);

        // fetching all datas
        $firstName          =  filter_var($memberData_arr["MEMBER_FIRST_NAME"]);
        $middleName         =  filter_var($memberData_arr["MEMBER_MIDDLE_NAME"]);
        $lastName           =  filter_var($memberData_arr["MEMBER_LAST_NAME"]);
        $dateOfBirth        =  filter_var($memberData_arr["MEMBER_DATE_OF_BIRTH_STAMP"]);
        $district           =  filter_var($memberData_arr["MEMBER_DISTRICT"]);
        $address1           =  filter_var($memberData_arr["MEMBER_ADDRESS_1"]);
        $address2           =  filter_var($memberData_arr["MEMBER_ADDRESS_2"]);
        $zipCode            =  filter_var($memberData_arr["MEMBER_ZIP_CODE"]);
        $email              =  filter_var($memberData_arr["MEMBER_EMAIL"]);
        $altEmail           =  filter_var($memberData_arr["MEMBER_ALTERNATE_EMAIL"]);
        $phone              =  filter_var($memberData_arr["MEMBER_PHONE"]);
        $fax                =  filter_var($memberData_arr["MEMBER_FAX"]);
        $photo              =  filter_var($memberData_arr["MEMBER_PHOTO"]);


        // getting SALUTATION_NAME from SALUTATION_MASTER of selected MEMBER_ID of MEMBER_MASTER by inner joining
        $salutation  =  $database->get("SALUTATION_MASTER", [
            "[>]MEMBER_MASTER" => ["SALUTATION_ID" => "MEMBER_SALUTATION"]
        ],
            "SALUTATION_NAME",
        [
            "MEMBER_ID" => $id
        ]);

        // getting COUNTRY_NAME from COUNTRY_MASTER of selected MEMBER_ID of MEMBER_MASTER by inner joining
        $country  =  $database->get("COUNTRY_MASTER", [
            "[>]MEMBER_MASTER" => ["COUNTRY_ID" => "MEMBER_COUNTRY"]
        ],
            "COUNTRY_NAME",
        [
            "MEMBER_ID" => $id
        ]);

        // getting STATE_NAME from STATE_MASTER of selected MEMBER_ID of MEMBER_MASTER by inner joining
        $state  =  $database->get("STATE_MASTER", [
            "[>]MEMBER_MASTER" => ["STATE_ID" => "MEMBER_STATE"]
        ],
            "STATE_NAME",
        [
            "MEMBER_ID" => $id
        ]);

        // getting CITY_NAME from CITY_MASTER of selected MEMBER_ID of MEMBER_MASTER by inner joining
        $city  =  $database->get("CITY_MASTER", [
            "[>]MEMBER_MASTER" => ["CITY_ID" => "MEMBER_CITY"]
        ],
            "CITY_NAME",
        [
            "MEMBER_ID" => $id
        ]);



        // profile photo fetching
        if(empty($photo)){
            if($salutation == 1){
                $photo = "/e-auction/site/img/logo-male.png";
            }
            else {
                $photo = "/e-auction/site/img/logo-female.png";
            }
        }

        // full name fetching
        $name = $salutation." ".$firstName." ".$middleName." ".$lastName;

        // dateOfBirth formate changing
        $date = new DateTime($dateOfBirth);
        $dateOfBirth = $date->format('d-M-Y');  // 02-Mar-1993

        // full adress fetch
        $addressLine1 = $address1;
        if(isset($address2)){
            $addressLine1 = $addressLine1.", ".$address2;
        }

        $addressLine2 = "";
        if(isset($city)){
            $addressLine2 = $addressLine2.$city.", ";
        }
        if(isset($district)){
            $addressLine2 = $addressLine2.$district.", ";
        }
        if(isset($state)){
            $addressLine2 = $addressLine2.$state;
        }

        $addressLine3 = $country.", ".$zipCode;

        // email fetching
        if(isset($altEmail)){
            $email = $email.", ".$altEmail;
        }
    }
    else {      //  if session has no value
        header("location: /e-auction/index.php");
    }
?>
