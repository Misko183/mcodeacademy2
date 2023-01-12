<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";

$sql = "DELETE FROM `users` WHERE id = '$id'";
if(mysqli_query($conn, $sql)){
}else {header("Location: ../admin/students.php");}
$sql = "DELETE FROM `students` WHERE user_id = '$id'";
if(mysqli_query($conn, $sql)){
}else {header("Location: ../admin/students.php");}



?>