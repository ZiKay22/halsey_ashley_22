<?php
include_once "connect.php";
if (isset($_POST["delete"])) 
{ $id=$_GET["id"];

$sql = "DELETE FROM `s_d` WHERE id='$id' ";

mysqli_query($conn, $sql); mysqli_close($conn);
header("Location:../index.php"); }
else{
header("Location:../404.php");

}
?>