<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$ids = isset($_GET["quiz_id"]) ? $_GET["quiz_id"] : "";

$sql = "DELETE FROM `questions` WHERE id = '$id'";
if(mysqli_query($conn, $sql)){
}else {}
$sql = "DELETE FROM `question_opt` WHERE question_id = '$id'";
if(mysqli_query($conn, $sql)){
}else {}

header("location: ../teacher/quiz_view.php?id=$ids");

// echo $id;
?>