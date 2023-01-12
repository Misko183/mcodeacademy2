<?php 

include 'configa.php';

$fullname = $_REQUEST['full_name'];
$nickname = $_REQUEST['nickname'];
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);
$class = $_REQUEST['class'];

$sql = "INSERT INTO `users` (`name`, `email`, `full_name`, `password`, `user_type`) VALUES ('$nickname', '$email', '$fullname', '$password', 'student')";
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
        //header("Location: ../admin/students.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
$qry = $conn->query("SELECT * FROM users where user_type = 'student' ORDER BY ID DESC LIMIT 1");
if($qry || $qry ->num_rows > 0){
    while($row= $qry->fetch_assoc()){
$id = $row['id'];
    }}
$sql = "INSERT INTO `students`(`class_id`, `user_id`) VALUES ('$class', '$id')";
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
        header("Location: ../admin/students.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// mysqli_close($conn);

//header("Location: ../admin/classes.php");