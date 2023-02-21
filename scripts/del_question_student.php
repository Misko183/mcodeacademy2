<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$ids = isset($_GET["quiz_id"]) ? $_GET["quiz_id"] : "";

$sql = "DELETE FROM `quiz_student_list` WHERE user_id = '$id'";

// echo $id;

if(mysqli_query($conn, $sql)){
    header("location: ../admin/quiz_view.php?id=$ids" );
    echo "suffessfull";
}else {
    header('location:' . $_GET["continue"]);
    echo "error";
}



?>