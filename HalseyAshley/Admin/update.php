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
  <div class="a">
    <div class="subm">
<div class="forms">
<form method="POST" action="../update-process.php/?id=<?php echo $_GET['id'];?>">
<br>
<input type="text" name="name" placeholder="Name" required>
<br>
<input type="text" name="s_url" placeholder="Song Url" required>
<br>
<div class="submit">
<input type="submit" name="update">
</div>
<br>
</div>
</div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>