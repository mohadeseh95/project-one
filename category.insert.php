<?php

require_once "functions.php";
AuthLogout();
$status = null;


if( isPost() ) {

    extract($_POST);
//    if(isset($_SESSION['name'])) { not running


        if (validation_required([$name])) {

            $data = [

                "name" => $name

            ];

            $conn = connectToDB();
            if (!catnameGet($name, $conn)) {
                catnamesave($data, $conn) ? redirect("category.php") : $status = "name not save plase try again";
            } else {
                $status = "this name is exists";
            }
        }

} else {
    $status = "name is required";
}


require "category.insert.view.php";
