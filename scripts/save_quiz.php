<?php 

include 'configa.php';

$quizname = $_REQUEST['quiz_name'];
$qpoints = $_REQUEST['qpoints'];
$class = $_REQUEST['class'];

$sql = "INSERT INTO `quiz_list`(`quiz_name`, `qpoints`, `class_id`) VALUES ('$quizname','$qpoints','$class')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

        $bbc = "SELECT id FROM quiz_list WHERE quiz_name = '$quizname'";
        $result = mysqli_query($conn, $bbc);
        while( $rs=$result->fetch_object() )$id=$rs->id;

        header("Location: ../admin/quiz_view.php?id={$id}");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// mysqli_close($conn);

//header("Location: ../admin/classes.php");