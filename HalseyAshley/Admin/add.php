<!DOCTYPE html>
<html>
<head>
<title>
Admin
</title>
</head>
<body>
	<h1>Your product is registered</h1>
	</body>
</html>
<?php
	$name=$_POST["name"];
	$s_url=$_POST["s_url"];
$db=mysqli_connect('localhost','root','root','halsey');
$sql="INSERT INTO `s_d`(`name`,`s_url`)
-- INSERT INTO `courses`(`id`, `name`, `s_url`) 
-- VALUES ('$name','$s_url')
VALUES ('$name','$s_url')";
$result=mysqli_query($db,$sql);
print_r($result);
?>