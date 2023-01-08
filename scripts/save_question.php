<?php

include 'configa.php';


$id = intval($_GET["id"]);

// if(isset ($_POST['submit'])){

// $question = $_REQUEST['question'];
// $option1 = $_REQUEST['question_opt0'];
// $option2 = $_REQUEST['question_opt1'];
// $option3 = $_REQUEST['question_opt2'];
// $option4 = $_REQUEST['question_opt3'];

// $answer1 = $_REQUEST['is_right0'];
// if(empty ($answer1)){
//     $answer1 = 0;
//     //return $answer1;
// }
// $answer2 = $_REQUEST['is_right1'];
// if(empty ($answer2)){
//     $answer2 = 0;
//     //return $answer2;
// }
// $answer3 = $_REQUEST['is_right2'];
// if(empty ($answer3)){
//     $answer3 = 0;
//     //return $answer3;
// }
// $answer4 = $_REQUEST['is_right3'];
// if(empty ($answer4)){
//     $answer4 = 0;
//     //return $answer4;
// }

// $sql = "INSERT INTO questions (`question`, `qid`, `order_by`) VALUES ('$question', '$id', '0')";

// if(mysqli_query($conn, $sql)){
//     echo "<h3>data stored in a database successfully."
//         . " Please browse your localhost php my admin"
//         . " to view the updated data</h3>";
//         header("Location: ../admin/quiz_view.php?id=$id");
// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($conn);
// }

// if(isset ($answer1)){
// $sql1 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('$answer1','$id','$option1')";
// $sql2 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option2')";
// $sql3 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option3')";
// $sql4 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option4')";
// }elseif(isset ($answer2)){
// $sql1 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option1')";
// $sql2 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('$answer2','$id','$option2')";
// $sql3 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option3')";
// $sql4 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option4')";
    
// }elseif(isset ($answer3)){
// $sql1 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option1')";
// $sql2 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option2')";
// $sql3 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('$answer3','$id','$option3')";
// $sql4 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option4')";
    
// }elseif(isset ($answer4)){

// $sql1 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option1')";
// $sql2 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option2')";
// $sql3 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('0','$id','$option3')";
// $sql4 = "INSERT INTO `question_opt`('is_right', 'question_id', 'option_txt') VALUES ('$answer4','$id','$option4')";
    
// }else {
//     echo "Please select the correct answer";
// }

// if(mysqli_query($conn, $sql1 && $sql2 && $sql3 && $sql4)){
//     echo "<h3>data stored in a database successfully."
//         . " Please browse your localhost php my admin"
//         . " to view the updated data</h3>";
//         header("Location: ../admin/quiz_view.php?id=$id");
// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($conn);
// }
// }

extract($_POST);

if(isset($_POST['submit'])){

if(empty($id)){
	$last_order = $conn->query("SELECT * FROM questions where qid = $qid order by order_by desc limit 1")->fetch_array()['order_by'];
	$order_by = $last_order > 0 ? $last_order + 1 : 0;
	$data = 'question = "'.$question.'" ';
	$data .= ', order_by = "'.$order_by.'" ';
	$data .= ', qid = "'.$qid.'" ';
	$insert_question = $conn->query("INSERT INTO questions set ".$data);
	if($insert_question){
		$question_id = $conn->insert_id;
		$insert = array();
		for($i = 0 ; $i < count($question_opt);$i++){
			$is_right = isset($is_right[$i]) ? $is_right[$i] : 0;
			$insert[] = $conn->query("INSERT INTO question_opt set question_id = $question_id, option_txt = '".$question_opt[$i]."',`is_right` = $is_right ");
		}
		if(count($insert) == 4){
			echo 1;
            //header("Location: ../admin/quiz_view.php?id=$id");
		}else{
			$delete = $conn->query("DELETE FROM questions where id =".$question_id);
			$delete2 = $conn->query("DELETE FROM question_opt where question_id =".$question_id);
			echo 2;
            //header("Location: ../admin/quiz_view.php?id=$id");
			
		}

		}
	}else{

		$data = 'question = "'.$question.'" ';
		$data .= ', qid = "'.$qid.'" ';
		$update = $conn->query("UPDATE questions set ".$data." where id = ".$id);
		if($update){
			$delete= $conn->query("DELETE FROM question_opt where question_id =".$id);
			$insert = array();
			for($i = 0 ; $i < count($question_opt);$i++){
				$answer = isset($is_right[$i]) ? 1 : 0;
				$insert[] = $conn->query("INSERT INTO question_opt set question_id = $id, option_txt = '".$question_opt[$i]."',`is_right` = $answer ");
				// echo "INSERT INTO question_opt set question_id = $id, option_txt = '".$question_opt[$i]."',`is_right` = $answer <br>";
			}
			if(count($insert) == 4){
				echo 1;
                //header("Location: ../admin/quiz_view.php?id=$id");
			}else{
				$delete = $conn->query("DELETE FROM questions where id =".$id);
				$delete2 = $conn->query("DELETE FROM question_opt where question_id =".$id);
				echo 2;
                //header("Location: ../admin/quiz_view.php?id=$id");
				
			}

			}
	}

}


?>