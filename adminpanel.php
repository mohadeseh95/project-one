<?php
require_once "functions.php";

AuthLogin();

if (!isset($_SESSION['username'])){
   redirect("login.php");
}

$username=$_SESSION['username'];

//require 'adminpanel.user.php';


require 'adminpanel.view.php';

