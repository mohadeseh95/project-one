

<?php





//try{
//    $handler = new  PDO("mysql:host=localhost;dbname=shop","root","");
//    $handler->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//}catch (PDOException $e) {
//    echo ($e->getMessage());
//    die();
//
//}
//$query=$handler->query("SELECT * FROM users");
////$results=$query->fetch(PDO::FETCH_ASSOC);
////print_r($results);
//if($query->rowCount()){
//
//  while ($r = $query->fetch(PDO::FETCH_OBJ))
//   {
//        echo $r->username, '<br>';
//       echo $r->password, '<br>';
//    }
//    }else {
//         echo "no result";
//    }


//if ($res = $conn->query($sql)) {
//
//    /* Check the number of rows that match the SELECT statement */
//    if ($res->fetchColumn() > 0) {
//
//        /* Issue the real SELECT statement and work with the results */
//        $sql = "SELECT name FROM users";
//
//        foreach ($conn->query($sql) as $row) {
//            print "Name: " .  $row['NAME'] . "\n";
//        }
//    }
//    /* No rows matched -- do something else */
//    else {
//        print "No rows matched the query.";
////    }
//}

require 'adminpanel.user.view.php';
