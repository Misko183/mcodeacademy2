<?php

include 'configa.php';

extract($_POST);

echo $id;
echo $class;
echo $teacher;
echo $subject_name;

$sql = "UPDATE `subject` SET `subject_name`='$subject_name',`class_id`='$class',`teacher_id`='$teacher' WHERE id = $id";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('status'=>1));
}else{ 
    echo "error";
}



?>