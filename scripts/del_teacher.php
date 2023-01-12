<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$sql = "DELETE FROM `users` WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
}else {header("Location: ../admin/teachers.php");}

?>