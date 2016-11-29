<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";

    // fetch the photo from form-validation.js page
    // $filPhoto  =  filter_input(INPUT_POST, "photo");
    //
    // $photoIsValid = true;
    // $err_msg = "";


    define("profilePicDir", "/e-auction/graphics/profile_pics/");     //  making the path of the uploaded file to be stored
    define("profilePicName", profilePicDir.basename($_FILES["filPhoto"]["name"]));     //  naming the uploaded file
    define("profilePicFileType", pathinfo(profilePicName, PATHINFO_EXTENSION));     //  extension of the uploaded file

    // //  checking file is actual image or not
    // $check = getimagesize($_FILES['filPhoto']['tmp_name']);
    // if($check === false){    //  if file is not image
    //     $photoIsValid = false;
    //     $err_msg = $err_msg."File is not image.";
    // }
    //
    // //  checking file already exists or not
    // $check = file_exists(profilePicName);
    // if($check){  // if file already exists
    //     $photoIsValid = false;
    //     $err_msg = $err_msg."Image file already exists.";
    // }
    //
    // //  checking file size
    // $check = $_FILES["filPhoto"]["size"];
    // if($check > 500000){    //  if size of file is more than 500kb
    //     $photoIsValid = false;
    //     $err_msg = $err_msg."Size of file should not be more than 500kb.";
    // }
    //
    // // checking file formate is jpg, png, jpeg, gif or not
    // if(profilePicFileType != "jpg" && profilePicFileType != "jpeg" && profilePicFileType != "png" && profilePicFileType != "gif"){
    //     $photoIsValid = false;
    //     $err_msg = $err_msg."Only jpg, png, jpeg and gif are allowed.";
    // }


    // if($photoIsValid){      // if photo is valid
    //     echo json_encode("");   //  sending null value
    // }
    // else{       //  if photo is invalid
    //     echo json_encode($err_msg);     //  sending err_msg
    // }

    echo json_encode(profilePicName);
?>
