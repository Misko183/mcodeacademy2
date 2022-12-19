<?php

include 'config.php';

unset($_SESSION["email"]);
unset($_SESSION["user_id"]);
unset($_SESSION["admin_id"]);
unset($_SESSION["name"]);
unset($_SESSION["user_type"]);

session_start();
session_unset();
session_destroy();

header('location:../login.php');

?>