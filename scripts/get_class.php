<?php

include 'configa.php';

$qry = $conn->query("SELECT * FROM `class` where class.id = '".$_GET['id']."' ");
if($qry){
    echo json_encode($qry->fetch_array());
}

?>