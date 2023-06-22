<!DOCTYPE html>
<html>
<head>
<title>
Admin
</title>
<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="icon" type="image/x-icon" href="Admin/favicon-32x32.png">
  </head>

<body class="bg-dark">
    
      <div class="container-fluid">
       
    <div class="row">
    
    <div class="col-12 ">
<form method="POST" action="add.php">
    
<div class="input-group flex-nowrap my-3" >
 
<input type="text" name="name" placeholder="Name" class=" form-control btn btn-outline-light" required>
<input type="text" name="s_url" placeholder="Song Url" class="form-control btn btn-outline-light mx-2" required>
</div>
<div class="my-3 d-flex justify-content-center">
<input type="submit" name="add" class="btn btn-outline-light">
</div>
</form>

<?php
include_once "connect.php";
$sql = "SELECT * FROM `s_d`";
$products = mysqli_query($conn, $sql);
?>
<div class="row">
    <div class="col-12">
<table  class="table table-dark table-bordered my-3">
            <?php
                if (mysqli_num_rows($products) > 0) {
                  // output data of each row
                  while($product = mysqli_fetch_assoc($products)) {?>
                      <tr>
                        <td><?php echo $product["id"]; ?></td>
                        <td><?php echo $product["name"]; ?></td> 
                        <td><?php echo $product["s_url"]; ?></td> 
                        <td><a href='update.php/?id=<?php echo $product["id"]; ?>' class="btn btn-outline-light">UPDATE</a></td>
                        <td>
                          
                            <form action="delete.php/?id=<?php echo $product['id']; ?>" method="POST">
                                <input type="submit" name="delete" value="DELETE" class="btn btn-outline-light">
                            </form>
                  
                        </td>
                    </tr>
                <?php    
                  }
                } else {
                  echo "0 results";
                }
            ?>
      


</table>
            </div>
            </div>
            </div>
            </div>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>