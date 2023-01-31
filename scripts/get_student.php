<?php

include 'configa.php';

$qry = $conn->query("SELECT students.*,users.full_name,users.email,users.password,users.name,class.class FROM `students` LEFT JOIN `users` ON students.user_id = users.id LEFT JOIN `class` on students.class_id = class.id where students.id ='".$_GET['id']."'");
if($qry){
    echo json_encode($qry->fetch_array());
}

?>