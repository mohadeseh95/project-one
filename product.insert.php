<?php

require_once "functions.php";
$status = null;


if( isPost() ) {
//var_dump($_POST);
    extract($_POST);
//    echo $name.$description;
//    if (isset($_SESSION["name,description"])) {
        echo $description;
        //echo $password."     ".$user->password;
        if (validation_required([$name, $description])) {

            //   echo $password;

            $data = [

                "name" => $name,
                "description" => $description,
//                "price" => $price


            ];

            $conn = connectToDB();


            if (!productnameGet($name, $conn)) {
                productnameSave($data, $conn) ? redirect("product.php") : $status = "user not save plase try again";
                echo "ok insert";
            } else {
                $status = "this name is exists";
            }
        }
    } else {
        $status = "name is required";
    }
    if (isset($_SESSION["description"])) {
        if (!productdescriptionGet($description, $conn)) {
            productdescriptionSave($data, $conn) ? redirect("product.php") : $status = "user not save plase try again";
            echo "ok insert";
        } else {
            $status = "this description is exists";
        }
//    }
}

require "product.insert.view.php";
