<?php
    require_once "db-session.inc.php";


    $paths = $database->select("WEBPAGE_PATH_MASTER", [
        "WEBPAGE_PATH_ID",
        "WEBPAGE_PATH"
    ]);

    $pages = $database->select("WEBPAGE_MASTER", [
        "WEBPAGE_PATH_ID",
        "WEBPAGE_NAME"
    ]);


    foreach ($paths as $path) {
        //for index page
        if($path["WEBPAGE_PATH_ID"] == '1'){
            $path_index = $path["WEBPAGE_PATH"];
        }


    }

    foreach ($pages as $page) {
        // for index page
        if($page["WEBPAGE_PATH_ID"] == '1'){
            $page_index = $page["WEBPAGE_NAME"];
        }


    }

    $page_index = $path_index.$page_index;



?>
