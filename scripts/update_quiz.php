<?php

include 'configa.php';

extract($_POST);

echo $id;

$sql = "UPDATE `quiz_list` SET`quiz_name`='$quiz_name',`qpoints`='$qpoints',`class_id`='$class' WHERE id = $id";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('status'=>1));
}else{ 
    echo "error";
}



?>