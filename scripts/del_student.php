<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";

$sql = "DELETE `users`, `students` FROM `users` INNER JOIN `students` ON users.id = students.user_id where users.id = '$id'";

if(mysqli_query($conn, $sql)){
}else {
    echo "error";
    //header("Location: ../admin/students.php");
}

?>