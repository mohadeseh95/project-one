<?php require_once 'section/header.php';


?>
<body dir="rtl">
<?php

//try{
//    $handler = new  PDO("mysql:host=localhost;dbname=shop","root","");
//    $handler->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//}catch (PDOException $e) {
//    echo ($e->getMessage());
//    die();
//
//}
//$query=$handler->query("SELECT * FROM product");
//
//if($query->rowCount()){
//?>
<!---->
<!--    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">-->
<!--        <h1 class="h5 "><i  class="fas fa-users"></i> Product</h1>-->
<!--        <div class="btn-toolbar mb-2 mb-md-0">-->
<!--            <input type="button" value="ADD" class="btn btn-sm btn-success"-->
<!--                   onClick="document.location.href='logout.php'" />-->
<!--        </div>-->
<!--    </div>-->
<!--<div class="table-responsive">-->
<!--    <table class="table table-striped table-sm">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>#</th>-->
<!--            <th>id</th>-->
<!--            <th>name</th>-->
<!--            <th>description</th>-->
<!--            <th>price</th>-->
<!--            <th>description</th>-->
<!--            <th>status</th>-->
<!--            <td>SETTING</td>-->
<!---->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php
//        $i=0;
//        while ($r = $query->fetch(PDO::FETCH_OBJ))
//        {
//            $i++;
//            ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $i;  ?><!--</td>-->
<!--                <td>--><?php //echo $r->product-id;  ?><!--</td>-->
<!--                <td>--><?php //echo $r->description;  ?><!--</td>-->
<!--                <td>--><?php //echo $r->price;  ?><!--</td>-->
<!--                <td>--><?php //echo $r->status;  ?><!--</td>-->
<!---->
<!--                <td>-->
<!--                    <button type="button" class="btn btn-sm btn-outline-warning px-3 my-0 mx-1"><i class="fas fa-edit"></i></button>-->
<!--                    <button type="button" class="btn btn-sm btn-outline-danger px-3 my-0 mx-1"><i class="fas fa-trash-alt"></i></button>-->
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php
//        }
//        ?>
<!---->
<!--        </tbody>-->
<!--    </table>-->
<!--    --><?php
//
//    }else {
//        echo "no result";
//    }
//
//    ?>
<!--</div>-->
<?php require_once 'section/footer.php' ?>