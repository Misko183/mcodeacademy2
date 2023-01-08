<?php 

include 'configa.php';

$subject = $_REQUEST['subject_name'];
$class = $_REQUEST['class'];
$teacher = $_REQUEST['teacher'];

//$sql = "SELECT * FROM users where full_name = '$teacher'";
//$result = mysqli_query($conn, $sql);

// echo $subject;
// echo $class;
// echo $result;
// echo $teacher;

 $sql = "INSERT INTO `subject`(`subject_name`, `class_id`, `teacher_id`) VALUES ('$subject','$class','$teacher')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
        header("Location: ../admin/subject.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}


// mysqli_close($conn);

//header("Location: ../admin/classes.php");