
<?php
    $db       = 'mysql:host=localhost;dbname=project';
    $con      =  new PDO($db,'root','12345');
    $query    =  "SELECT * FROM addtocard";
    $sql = $con->prepare($query);
    $result = $sql->execute();
    $orders = $sql -> fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    var_dump($orders);
    echo '</pre>';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid bg-danger">
        <div class="row d-flex justify-content-center flex-wrap ">
        <?php foreach($orders as $order):?>    
        <div class="col-4 bg-dark p-5">
           <form>
                <div class="card " style="width: 18rem;">
                <img src='./img/<?php echo $order['image'] ;?>' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $order['name'] ?></h5>
                    <button type="submit" class="btn btn-primary">ADDTOCard</button>
                </form>
                </div>
                </div>
            </div>
   <?php endforeach;?>
        </div>
      </div>
</body>
</html>