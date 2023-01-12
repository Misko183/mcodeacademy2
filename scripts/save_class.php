<?php 

include 'configa.php';

$class = $_REQUEST['class'];
//$sql = "SELECT * FROM users where full_name = '$teacher'";
//$result = mysqli_query($conn, $sql);

//echo $subject;
//echo $class;
//echo $result;
//echo $teacher;

$sql = "INSERT INTO `class`(`class`) VALUES ('$class')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
        header("Location: ../admin/classes.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}


// mysqli_close($conn);

//header("Location: ../admin/classes.php");