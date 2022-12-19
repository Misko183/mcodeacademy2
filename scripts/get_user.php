<?php
include 'config.php';
$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);
$classes = [];

while ($class = $result->fetch_assoc()) {
    array_push($classes, $class);
}
