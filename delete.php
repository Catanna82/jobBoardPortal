<?php
$id=$_GET["id"];
$query="delete from offers where id=$id";
include("connection.php");
mysqli_query($con,$query);
header("Location: edits.php");
die;
?>