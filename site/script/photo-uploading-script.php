<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";


    $sourcePic      =   $_FILES["filPhoto"]["tmp_name"];

    $targetDir      =   "/e-auction/graphics/profile-photos/";   //  making the path of the uploaded file to be stored
    $picName        =   basename($_FILES["filPhoto"]["name"]);     //  naming the uploaded file
    $targetPic      =   $targetDir.$picName;

    $picFileType    =   pathinfo($targetPic, PATHINFO_EXTENSION);     //  extension of the uploaded file


    // initialising variables
    $check          =   false;
    $isPhotoValid   =   true;
    $message        =   false;


    //  checking file is actual image or not
    $check = getimagesize($sourcePic);
    if($check === false){    //  if file is not image
        $isPhotoValid = false;
        $message = $message."File is not image.";
    }

    //  checking file already exists or not
    $check = file_exists($targetPic);
    if($check){  // if file already exists
        $isPhotoValid = false;
        $message = $message."Image file already exists.";
    }

    //  checking file size
    $check = $_FILES["filPhoto"]["size"];
    if($check > 500000){    //  if size of file is more than 500kb
        $isPhotoValid = false;
        $message = $message."Size of file should not be more than 500kb.";
    }

    // checking file formate is jpg, png, jpeg, gif or not
    if($picFileType != "jpg" && $picFileType != "jpeg" && $picFileType != "png" && $picFileType != "gif"){
        $isPhotoValid = false;
        $message = $message."Only jpg, png, jpeg and gif are allowed.";
    }



    if($isPhotoValid){      // if photo is valid
        if(move_uploaded_file($sourcePic, $_SERVER["DOCUMENT_ROOT"].$targetPic)){   // if file is uploaded
            session_start();
            if($_SESSION["email"] && $_SESSION["password"]){
                // creating variables for session data
                $email     =  filter_var($_SESSION["email"]);

                // updating profile photo column in database
                $isUpdateSuccessful  =  $database->update("MEMBER_MASTER", [
                    "MEMBER_PHOTO"  =>  $targetPic
                ],[
                    "MEMBER_EMAIL"  =>  $email
                ]);
            }

            if($isUpdateSuccessful){
                $message = "Photo successfully uploaded!";
            }
        }
        else {
            $message = "Photo uploading fail!";
        }
    }

    echo json_encode($message);     //  sending message
?>
