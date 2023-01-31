<?php

include 'configa.php';

$id = isset($_GET["id"]) ? $_GET["id"] : "";

extract($_POST);
$password = md5($_REQUEST['password']);

echo $class;
echo $id;



$sql = "UPDATE `users` SET `name` = '$nickname', `full_name` = '$full_name', `email` = '$email', `password` = '$password' WHERE id = '$user_id'";
$sql2 = "UPDATE `students` SET `class_id` = '$class' WHERE id = '$id'";

if($sql && $sql2){
    if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
    }else{
        echo "error";
    }
}else {
    echo "error";
}

?>