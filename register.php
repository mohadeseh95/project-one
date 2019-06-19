<?php

require_once "functions.php";
AuthLogout();
$status = null;


if( isPost() ) {
    extract($_POST);
    //echo $password."     ".$user->password;
    if( validation_required([$username , $password]) ) {


            $password = hash_hmac("sha256" , $password , "secert");
     //   echo $password;

            $data = [

                "username" => $username ,
                "password" => $password
            ];

            $conn = connectToDB();

            if( ! userGet($username , $conn)) {
                userSave($data , $conn) ? redirect("login.php") : $status = "user not save plase try again" ;
            } else {
                $status = "this username is exists";
            }
            }
    } else {
        $status = "username or password is required";
    }


require "register.view.php";
