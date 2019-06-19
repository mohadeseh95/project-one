<?php require_once 'section/header.php';


?>

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
<body dir="rtl">


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-8">
                    <h2>category form</h2>
                    <form action="/project1/category.insert.php" method="POST">
                        <div class="form-group">
                            <label for="name">name :</label>
                            <input type="text" name="name" class="form-control" required old('name')>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
<?php require_once 'section/footer.php' ?>