<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$ids = isset($_GET["quiz_id"]) ? $_GET["quiz_id"] : "";

$sql = "DELETE FROM `quiz_student_list` WHERE user_id = '$id'";

if(mysqli_query($conn, $sql)){
}else {header('location:' . $_GET["continue"]);}

header("location: ../teacher/quiz_view?id=$ids" );
?>