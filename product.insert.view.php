<?php
require_once "functions.php";

require_once 'section/header.php';
?>

<h2>product form </h2>
<body dir="rtl">
<?php

try{
    $handler = new  PDO("mysql:host=localhost;dbname=shop","root","");
    $handler->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo ($e->getMessage());
    die();

}
$query=$handler->query("SELECT * FROM category");
if($query->rowCount()){
    ?>
<form action="/project1/product.insert.php" method="POST">
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control" required old('name')>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1"  name="category">
             <?php
        $i=0;
        while ($r = $query->fetch(PDO::FETCH_OBJ))
        {
            $i++;
            ?>
            <option value="<?php echo $r->id ?>"><?php echo $r->name;?></option>
            <?php
        }
             ?>

        </select>
        <?php

        }else {
            echo "no result";
        }

        ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">description</label>
        <input type="text" class="form-control" name="description" id="exampleFormControlInput1">
    </div>
        <form action="product.insert.php" method="post" enctype="multipart/form-data"> Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="UploadImage" name="submit">
        </form>
    <div class="form-group">
        <label for="exampleFormControlInput1">price</label>
        <input type="number" class="form-control" name="price" id="exampleFormControlInput1">
    </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">send</button>
        </div>
</form>
</body>
<?php require_once 'section/footer.php' ?>