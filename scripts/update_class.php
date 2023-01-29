<?php

include 'configa.php';

extract($_POST);

// echo $id;
// echo $class;


$sql = "UPDATE `class` set `id` = '$id', `class` = '$class'";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('status'=>1));
}else{ 
    echo "error";
}



?>