<?php 
include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";

$sql = "DELETE FROM `subject` WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
}else {header("Location: ../admin/subject.php");}

echo $id;

?>