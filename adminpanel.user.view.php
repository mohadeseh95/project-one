<?php require_once 'section/header.php';


?>
<body dir="rtl">
<?php

try{
    $handler = new  PDO("mysql:host=localhost;dbname=shop","root","");
    $handler->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo ($e->getMessage());
    die();

}
$query=$handler->query("SELECT * FROM users");
//$results=$query->fetch(PDO::FETCH_ASSOC);
//print_r($results);
if($query->rowCount()){
//
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i  class="fas fa-users"></i> Users</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <input type="button" value="ADD" class="btn btn-sm btn-success"
               onClick="document.location.href='logout.php'" />
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>usernams</th>
            <th>password</th>
            <td>SETTING</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $i=0;
        while ($r = $query->fetch(PDO::FETCH_OBJ))
        {
        $i++;
        ?>
<!--        <tr>-->
<!--            <td>1,001</td>-->
<!--            <td>Lorem</td>-->
<!--            <td>ipsum</td>-->
<!--            <td>dolor</td>-->
<!--            <td>-->
<!--                <button type="button" class="btn btn-sm btn-info my-0 mx-1">update</button>-->
<!--                <button type="button" class="btn btn-sm btn-danger my-0 mx-1">delete</button>-->
<!--            </td>-->
<!--        </tr>-->
        <tr>
            <td><?php echo $i;  ?></td>
            <td><?php echo $r->username;  ?></td>
            <td><?php echo $r->password;  ?></td>
            <td>
<!--                <button type="button" class="btn btn-sm btn-outline-success px-3 my-0 mx-1"><i class="far fa-check-square"></i></button>-->
                <button type="button" class="btn btn-sm btn-outline-warning px-3 my-0 mx-1"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-sm btn-outline-danger px-3 my-0 mx-1"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>
<!--        <tr>-->
<!--            <td>1,003</td>-->
<!--            <td>Integer</td>-->
<!--            <td>nec</td>-->
<!--            <td>odio</td>-->
<!--            <td>-->
<!--                <button type="button" class="btn btn-sm btn-success px-3 my-0 mx-1"><i class="far fa-check-square"></i></button>-->
<!--                <button type="button" class="btn btn-sm btn-warning px-3 my-0 mx-1"><i class="fas fa-edit"></i></button>-->
<!--                <button type="button" class="btn btn-sm btn-danger px-3 my-0 mx-1"><i class="fas fa-trash-alt"></i></button>-->
<!--            </td>-->
<!--        </tr>-->
            <?php
        }
        ?>

        </tbody>
    </table>
    <?php

    }else {
        echo "no result";
    }

    ?>
<!--</div>-->
<!--            --><?php
//
//        try{
//            $handler = new  PDO("mysql:host=localhost;dbname=shop","root","");
//            $handler->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//        }catch (PDOException $e) {
//            echo ($e->getMessage());
//            die();
//
//        }
//        $query=$handler->query("SELECT * FROM users");
//        //$results=$query->fetch(PDO::FETCH_ASSOC);
//        //print_r($results);
//        if($query->rowCount()){
//        //
//        ?>
<!---->
<!---->
<!--                            <div class="row col-9">-->
<!--                            <!--        <div class="oi-align-left">-->
<!--                            <table class="table table-dark">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">#</th>-->
<!--                <th scope="col">نام</th>-->
<!--                <th scope="col">رمز عبور</th>-->
<!--                <th scope="col">ویرایش</th>-->
<!--                <th scope="col">حذف</th>-->
<!---->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php
//            $i=0;
//            while ($r = $query->fetch(PDO::FETCH_OBJ))
//            {
//                $i++;
//                ?>
<!--                <tr>-->
<!--                    <th>--><?php //echo $i;  ?><!--</th>-->
<!--                    <td>--><?php //echo $r->username;  ?><!--</td>-->
<!--                    <td>--><?php //echo $r->password;  ?><!--</td>-->
<!--                    <td><i class="fas fa-user-edit"></i></td>-->
<!--                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>-->
<!---->
<!--                </tr>-->
<!--                --><?php
//            }
//            ?>
<!---->
<!---->
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!---->
<!--        <!--        </div>-->
<!--        --><?php
//
//                    }else {
//                        echo "no result";
//                    }
//
//                    ?>
<!---->
<!--        <div class="ml-3 mr-auto">-->
<!--            <input type="button" value="اضافه کردن" class="btn btn-sm btn-danger"-->
<!--                   onClick="document.location.href='logout.php'" />-->
<!--        </div>-->

    </div>
<!--    </div>-->

        <!--        <div class="col-12 col-md-10">-->

        <?php require_once 'section/footer.php' ?>
