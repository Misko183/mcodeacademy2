<?php

include 'configa.php';

extract($_POST);

$password = md5($_REQUEST['password']);

// echo $id;
// echo $class;

echo $user_type;
echo $password;

$sql2 = "UPDATE `users` set `name`='$nickname',`email`='$email',`full_name`='$full_name',`password`='$password', `user_type`='$user_type' WHERE id = $id";

$sql3 = "INSERT INTO `students` (`user_id`) VALUES ('$id')";
$sql4 = "INSERT INTO `teachers` (`user_id`) VALUES ('$id')";
$sql5 = "INSERT INTO `admins` (`user_id`) VALUES ('$id')";




if($user_type == "student"){
    mysqli_query($conn, $sql3); 
    mysqli_query($conn, $sql2);
}elseif($user_type == "teacher"){
    mysqli_query($conn, $sql4); 
    mysqli_query($conn, $sql2);
}elseif($user_type == "admin"){
    mysqli_query($conn, $sql5);
    mysqli_query($conn, $sql2);
}else{
    echo "Error";
}
?>