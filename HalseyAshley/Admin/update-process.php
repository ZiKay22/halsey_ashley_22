<?php
include_once "connect.php";
if (isset($_POST["update"])) { 
    $id=$_GET["id"];
    $name=$_POST["name"];
	$s_url=$_POST["s_url"];
$sql= "UPDATE `s_d` SET
`name` = '$name',
`s_url` = '$s_url' WHERE id='$id' ";
mysqli_query ($conn, $sql);
mysqli_close($conn);
header("Location:../index.php");
}
else{
header("Location:404.php");
}
?>