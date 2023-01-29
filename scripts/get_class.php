<?php

include 'configa.php';

$qry = $conn->query("SELECT * FROM `class`");
if($qry){
    echo json_encode($qry->fetch_array());
}

?>