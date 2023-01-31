<?php

include 'configa.php';

$qry = $conn->query("SELECT * FROM `users` where users.id = '".$_GET['id']."' ");
if($qry){
    echo json_encode($qry->fetch_array());
}

?>