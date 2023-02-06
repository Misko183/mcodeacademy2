<?php

include 'configa.php';

extract($_POST);

$password = md5($_REQUEST['password']);

// echo $id;
// echo $class;

echo $user_type;
echo $password;

$sql2 = "UPDATE `users` set `name`='$nickname',`email`='$email',`full_name`='$full_name',`password`='$password', `user_type`='$user_type' WHERE id = $id";
$sql = "INSERT INTO `students`(`user_id`) VALUES ('$user_type')";




if($user_type == "student"){
    mysqli_query($conn, $sql2); 
    mysqli_query($conn, $sql);
        
}else{
    mysqli_query($conn, $sql2);
}





?>