<?php
session_start();
function isPost(){
    $_SERVER["REQUEST_METHOD"] == "POST";
    return true;
}
function redirect($location){
header("location:{$location}");
die;
}
function validation_required($items) {
    $counter_error = 0;
    foreach ( $items as $item) {
        if( empty($item) )
            $counter_error++;
    }
    return $counter_error == 0;
}
function connectToDB() {
    try {
        return new PDO("mysql:host=localhost;dbname=shop","root","");
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function userGet($username , $conn) {

    $statment = $conn->prepare("SELECT * FROM users WHERE username = :username");


    $statment->bindParam("username" , $username );

    $statment->execute();



    $user = $statment->fetch(PDO::FETCH_OBJ);

    return $user ? $user : false;
}
function catnameGet($name , $conn) {

    $statment = $conn->prepare("SELECT * FROM category WHERE name = :name");


    $statment->bindParam("name" , $name );

    $statment->execute();



    $name = $statment->fetch(PDO::FETCH_OBJ);

    return $name ? $name : false;
}
function productnameGet($name , $conn) {

    $statment = $conn->prepare("SELECT * FROM prodouct WHERE name = :name");


    $statment->bindParam("name" , $name );

    $statment->execute();



    $name = $statment->fetch(PDO::FETCH_OBJ);

    return $name ? $name : false;
}
function productdescriptionGet($description , $conn) {

    $statment = $conn->prepare("SELECT * FROM prodouct WHERE description = :description ");


    $statment->bindParam("description" , $description);

    $statment->execute();



    $description = $statment->fetch(PDO::FETCH_OBJ);

    return $description ? $description : false;
}


function old($key) {
    if( ! empty($_REQUEST[$key]) )
        return htmlspecialchars($_REQUEST[$key]);
    return '';
}
function userSave($data , $conn) {
    extract($data);
    $statment = $conn->prepare("INSERT INTO users (username , password ) VALUES (:username , :password )");
    $statment->bindParam("username" , $username );
    $statment->bindParam("password" , $password );
    return $statment->execute() ? true : false;
}
function catnameSave($data , $conn) {
    extract($data);
    $statment = $conn->prepare("INSERT INTO category (name ) VALUES (:name )");
    $statment->bindParam("name" , $name );
    return $statment->execute() ? true : false;
}
function productnameSave($data , $conn) {
    extract($data);
    $statment = $conn->prepare("INSERT INTO product (name ) VALUES (:name )");
    $statment->bindParam("name" , $name );
    return $statment->execute() ? true : false;
}
function productdescriptionSave($data , $conn) {
    extract($data);
    $statment = $conn->prepare("INSERT INTO product (description ) VALUES (:description )");
    $statment->bindParam("description" , $description );
    return $statment->execute() ? true : false;
}
function insert (){
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
function AuthLogin($location = "login.php") {
    if( ! isset($_SESSION['username']) ) {
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];
        if( isset($username) && isset($password) ) {
            $conn = connectToDB();
            $user = userGet($username , $conn);
            if($user) {
                if($password == $user->password) {
                    $_SESSION['username'] = $username;
                    redirect("adminpanel.php");
                }
            }
        }
        redirect($location);
    }
}
function AuthLogout($location = "index.php") {
    if( isset($_SESSION['username']) )
        redirect($location);
}


