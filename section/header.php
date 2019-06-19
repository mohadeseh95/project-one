<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>PHP Tutorial</title>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<!--    <link rel="stylesheet" href="project-admin-panel/style/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="project-admin-panel/style/css/bootstrap-rtl.css">-->
<!--    <link rel="stylesheet" href="project-admin-panel/style/css/open-iconic-bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="project-admin-panel/style/css/vazir.css">-->
<!--    <link rel="stylesheet" href="project-admin-panel/style/css/style.css">-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
<!---->
<!---->
<!--</head>-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="project-admin-panel/style/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

    <link href="project-admin-panel/style/css/style.css" rel="stylesheet">
</head>
<body>


<nav class="navbar  navbar-light bg-gradiant-green-blue nav-shadow">
    <a class="navbar-brand" href="#">My Blog</a>
    <span class="">
                <a class="text-decoration-none px-3 text-dark" href="#"><i class="fas fa-comments"></i> <span class="badge badge-danger">2 new!</span></a>
            <span class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Arman
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </span>
       </span>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block pt-3 bg-sidebar sidebar px-0">
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="home.php"><i class="fas fa-home"></i> Home</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="category.php"><i class="fas fa-clipboard-list"></i> Category</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="product.php"><i class="fab fa-product-hunt"></i> product</a>
<!--            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="#"><i class="fas fa-comments"></i> Comment</a>-->
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="adminpanel.user.php"><i class="fas fa-users"></i> User</a>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div id="index">