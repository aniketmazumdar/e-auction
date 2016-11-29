<?php
    require_once "../include/db-session.inc.php";
    require_once "../include/jsonwrapper/jsonwrapper.inc.php";

    // creating variables from form-validation page
    $table          = filter_input(INPUT_POST, "table");
    $attr           = filter_input(INPUT_POST, "attribute");
    $selectedAttr   = filter_input(INPUT_POST, "selectedAttribute");
    $condition      = filter_input(INPUT_POST, "conditionalOperator");
    $selectedData   = filter_input(INPUT_POST, "selectedData");


    // fetching $selectedData from $table when $selectedAttr related with $selectedData
    $data_arr = $database->select("$table", "$attr",[
        "$selectedAttr"."[$condition]" => $selectedData
    ]);


    echo json_encode($data_arr);
?>
