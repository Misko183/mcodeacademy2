<?php

include 'configa.php';

extract($_POST);
$password = md5($_REQUEST['password']);

echo $id;
// echo $class;



$sql = "UPDATE `users` set `name`='$nickname',`email`='$email',`full_name`='$full_name',`password`='$password' WHERE id = $id";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('status'=>1));
}else{ 
    echo "error";
}



?>