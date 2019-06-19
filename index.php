<?php
//settion work
session_start();
//$_SESSION['username']= "mohadesehebrahimi";
try{
   $pdo = new PDO("mysql:host=localhost;dbname=shop", "root", "");
}
catch (PDOException $e) {
    die($e->getMessage());
}
require "index.view.php";