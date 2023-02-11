<?php
$servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'mcodeacademy';
        
        $conn = new mysqli($servername, $username, $password, $database);
        $conn->set_charset("utf8");
        
        if ($conn->connect_error){
            die("Connection faild: " . $conn->connect_error);
        }
        //echo "Connected successfully";