<?php 
 $db        = 'mysql:host=localhost;dbname=project';
 $con      =  new PDO($db,'root','12345');
 $query    = 'SELECT * FROM prod1';
 $sql      =  $con->prepare($query);
 $result   =  $sql->execute();
 $products =  $sql -> fetchAll(PDO::FETCH_ASSOC);
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./addtocart.php">orders</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



<?php var_dump($_REQUEST);?>

      <div class="container-fluid bg-danger">
        <div class="row d-flex justify-content-center flex-wrap ">
        <?php foreach($products as $product):?>    
        <div class="col-4 bg-dark p-5">
           <form action="">
                <div class="card " style="width: 18rem;">
                <img src='./img/<?php echo $product['image'] ?>' class="card-img-top" alt="...">
                <input type="hidden" name="image" value="<?php echo $product['image'];?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name'] ?></h5>
                    <input type="hidden" name="name" value="<?php echo $product['name'];?>">
                    <p class="card-text"><?php echo $product['price'] ?></p>
                    <input type="hidden" name="price" value="<?php echo $product['price'];?>">
                   
                    <input type="hidden" name="id" value="<?php echo $product['id'];?>">
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