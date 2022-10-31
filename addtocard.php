<?php
$name     =  $_REQUEST['name'];
$price    =  $_REQUEST['price'];
$img      =  $_REQUEST['image'];
$id       =  $_REQUEST['id'];
$db       = 'mysql:host=localhost;dbname=project';
$con      =  new PDO($db,'root','12345');
$query2   =  "INSERT INTO addtocard (`name`,`image`,`id`) VALUE ('$name','$image', $id )";
$sql      =  $con->prepare($query2);
$result   =  $sql->execute();
header('location:addtocart.php');
?>

 