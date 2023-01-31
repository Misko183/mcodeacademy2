<?php

include 'configa.php';

$qry = $conn->query("SELECT * FROM `quiz_list` WHERE quiz_list.id = '".$_GET['id']."' ");
if($qry){
    echo json_encode($qry->fetch_array());
}

?>