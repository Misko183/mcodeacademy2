<?php 

include 'configa.php';

$student_id = $_REQUEST['student'];
$id = $_REQUEST['quiz_id'];

$sql = "INSERT INTO `quiz_student_list`(`quiz_id`, `user_id`) VALUES ('$id', '$student_id')";

// echo $id;
// echo $student_id;

if(mysqli_query($conn, $sql)){
    // echo "<h3>data stored in a database successfully."
    //     . " Please browse your localhost php my admin"
    //     . " to view the updated data</h3>";
        header("Location: ../teacher/quiz_view.php?id=$id");
} else{
    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
}

?>