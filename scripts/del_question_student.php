<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";

$sql = "DELETE FROM `quiz_student_list` WHERE user_id = '$id'";

if(mysqli_query($conn, $sql)){
}else {header('location:' . $_GET["continue"]);}
?>