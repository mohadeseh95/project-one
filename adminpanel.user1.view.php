<?php require_once 'section/header.php';


?>

<body>

<nav class="navbar sticky-top bg-white navbar-expand-md navbar-light p-0">
    <div class="d-flex align-items-center">
        <a href="#" class="navbar-brand bg-light py-3 px-5 m-0 h3">پنل مدیریت</a>
        <span class="oi oi-menu mr-4" data-toggle="collapse" data-target="#sidebar"></span>
    </div>
    <div class="collapse navbar-collapse">

        <div class="ml-3 mr-auto">
            <button class="btn btn-sm btn-danger">خروج</button>
        </div>
    </div>
</nav>

</nav>

<div class="container-fluid">
    <div class="row">

        <nav id="sidebar" class="col-lg-2 d-lg-block sidebar collapse bg-dark-blue sidebar-full-height p-0">
            <div>



                <div class="py-3 mr-2">منو اصلی</div>
                <ul class="nav flex-column px-3">
                    <li class="nav-item d-flex align-items-center">
                        <span class="oi oi-dashboard"></span>
                        <a href="#" class="nav-link my-1">داشبورد</a>
                    </li>
                    <li class="nav-item">
                        <div class="d-flex align-items-center">
                            <span class="oi oi-book"></span>
                            <a href="#" class="nav-link my-1 w-100 collapsed" data-toggle="collapse" data-target="#submenu1">
                                دسته بندی
                                <span class="oi oi-chevron-left float-left"></span>
                            </a>
                        </div>
                        <div class="collapse" id="submenu1">
                            <ul class="nav px-3">

                                <li class="nav-item w-100">


                                    <div class="collapse" id="submenu1sub1">
                                        <ul class="nav px-3">

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="#" class="nav-link my-1">محصولات</a>
                    </li>
                </ul>

                <ul class="nav flex-column px-3">
                    <li class="nav-item d-flex align-items-center">
                        <span class="oi oi-person"></span>
                        <a href="#" class="nav-link my-1">کاربر</a>
                    </li>
                </ul>


            </div>
        </nav>

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


        <main role="main" class="col-lg-9 ml-sm-auto col-lg-10 px-4">



            <div class="container">


                <div class="row">

                    <div class="col-md-8 col-md-offset-2">

                        <div class="panel panel-default">

                            <!--        <div class="oi-align-left">-->
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">نام</th>
                                    <th scope="col">رمز عبور</th>
                                    <th scope="col">ویرایش</th>
                                    <th scope="col">حذف</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                while ($r = $query->fetch(PDO::FETCH_OBJ))
                                {
                                    $i++;
                                    ?>
                                    <tr>
                                        <th><?php echo $i;  ?></th>
                                        <td><?php echo $r->username;  ?></td>
                                        <td><?php echo $r->password;  ?></td>
                                        <td><i class="fas fa-user-edit"></i></td>
                                        <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                    </tr>
                                    <?php
                                }
                                ?>


                                </tbody>
                            </table>


                            <!--        </div>-->
                            <?php

                            }else {
                                echo "no result";
                            }

                            ?>

                            <div class="ml-3 mr-auto">
                                <input type="button" value="اضافه کردن" class="btn btn-sm btn-danger"
                                       onClick="document.location.href='logout.php'" />
                            </div>






                        </div>

                    </div>

                </div>

            </div>


            <div class="table-responsive">


            </div>


        </main>
    </div>
</div>











</body>