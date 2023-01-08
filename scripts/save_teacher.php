<?php 

include 'configa.php';

$fullname = $_REQUEST['full_name'];
$nickname = $_REQUEST['nickname'];
$email = $_REQUEST['email'];
$password = md5($_REQUEST['pass']);

$sql = "INSERT INTO `users` (`name`, `email`, `full_name`, `password`, `user_type`) VALUES ('$nickname', '$email', '$fullname', '$password', 'teacher')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
        header("Location: ../admin/teachers.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}


// mysqli_close($conn);

//header("Location: ../admin/classes.php");