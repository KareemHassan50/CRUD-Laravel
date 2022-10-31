<?php
$name     =  $_REQUEST['name'];
$price    =  $_REQUEST['price'];
$img      =  $_REQUEST['image'];
$db       = 'mysql:host=localhost;dbname=project';
$con      =  new PDO($db,'root','12345');
// $query    = "SELECT * FROM prod1";
$query1   = "insert into prod1 (`name`,`price`,`image`) VALUES ('$name' , $price , '$img')";
// $sql      =  $con->prepare($query);
$sql1      =  $con->prepare($query1);
// $result   =  $sql->execute();
$result1   =  $sql1->execute();
// $products =  $sql -> fetchAll(PDO::FETCH_ASSOC);
header("location:show.php")

?>
