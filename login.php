<?php
require_once "functions.php";
AuthLogout();
/* print_r($_SESSION);*/
//define("USERNAME","mohadeseh");
//define("PASSWORD" ,"1234");
$status = null;
if(isPost())
{     extract($_POST);


  // echo $_POST['username'];
  // echo $_POST['password'];
    if( validation_required([$username , $password]) ) {
        //print_r($password);

        //$password_h = hash_hmac("sha256" , $password , "secert");
        $password = hash_hmac("sha256" , $password , "secert");

        $conn = connectToDB();
        $user = userGet($username , $conn);
      // print_r($password);
       //echo $password."     ".$user->password;
        //echo $user->password;
        //echo $password;
        if( $user ) {

            if( $password == $user->password) {
              //  echo "hi";
                if($_POST['remember'] == true ) {
                    setcookie("username" , $username , time() + 60 * 60 * 24 * 7);
                    setcookie("password" , $password , time() + 60 * 60 * 24 * 7);
                }

                $_SESSION['username'] = $username;
                redirect("adminpanel.php");
            }
           else
               $status = "this password not exist";
        }else {
            $status = "this username not exists";
        }
   }
}
require 'login.view.php';
