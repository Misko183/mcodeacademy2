<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";

$sql = "DELETE FROM `questions` WHERE id = '$id'";
if(mysqli_query($conn, $sql)){
}else {}
$sql = "DELETE FROM `question_opt` WHERE question_id = '$id'";
if(mysqli_query($conn, $sql)){
}else {}



// echo $id;
?>