<?php

include 'configa.php';

$qry = $conn->query("SELECT * FROM `subject` where subject.id = '".$_GET['id']."' ");
if($qry){
    echo json_encode($qry->fetch_array());
}

?>