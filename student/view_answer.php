<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');

$id = isset($_GET["id"]) ? $_GET["id"] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	</head>
	<?php 
	$quiz = $conn->query("SELECT * FROM quiz_list where id = $id ")->fetch_array();
	$hist = $conn->query("SELECT * FROM history where quiz_id = $id and user_id = ".$_SESSION['student_id'])->fetch_array();
	?>
	<quiz_name><?php echo $quiz['quiz_name'] ?> | Answer Sheet</quiz_name>
</head>
<body>
	<style>
		/*li.answer{
			cursor: pointer;
		}
		li.answer:hover{
			background: #00c4ff3d;
		}*/
		li.answer input:checked{
			background: #00c4ff3d;
		}
	</style>
	
	<div class="container-fluid admin">
		<div class="col-md-12 alert alert-primary"><?php echo $quiz['quiz_name'] ?> | <?php echo $quiz['qpoints'] .' Points Each Question' ?></div>
		<div class="col-md-12 alert alert-success">SCORE : <?php echo $hist['score'] .' / ' .  $hist['total_score'] ?></div>
		<br>
		<div class="card">
			<div class="card-body">
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['student_id'] ?>">
					<input type="hidden" name="quiz_id" value="<?php echo $quiz['id'] ?>">
					<input type="hidden" name="qpoints" value="<?php echo $quiz['qpoints'] ?>">
					<?php
					$question = $conn->query("SELECT * FROM questions where qid = '".$quiz['id']."' order by id desc ");
					$i = 1 ;
					while($row =$question->fetch_assoc()){
						$opt = $conn->query("SELECT * FROM question_opt where question_id = '".$row['id']."' order by RAND() ");
					$answer = $conn->query("SELECT * FROM answers where quiz_id ='".$quiz['id']."' and user_id= '".$_SESSION['student_id']."' and question_id = '".$row['id']."'  ")->fetch_array();
					?>

				<ul class="q-items list-group mt-4 mb-4 ?>">
					<li class="q-field list-group-item">
						<strong><?php echo ($i++). '. '; ?> <?php echo $row['question'] ?></strong>
						<input type="hidden" name="question_id[<?php echo $row['id'] ?>]" value="<?php echo $row['id'] ?>">
						<br>
						<ul class='list-group mt-4 mb-4'>
						<?php while($orow = $opt->fetch_assoc()){ ?>

							<li class="answer list-group-item <?php echo $answer['option_id'] == $orow['id'] && $answer['is_right'] == 1 ? "bg-success" : $orow['is_right'] == 1 ? "bg-success" : "bg-danger" ?>">
								<label><input type="radio" name="option_id[<?php echo $row['id'] ?>]" value="<?php echo $orow['id'] ?>" <?php echo $answer['option_id'] == $orow['id']  ? "checked='checked'" : "" ?>> <?php echo $orow['option_txt'] ?></label>
							</li>
						<?php } ?>

						</ul>

					</li>
				</ul>

				<?php } ?>
			</div>	
		</div>
	</div>
</body>
<script>
	$(document).ready(function(){
		$('input').attr('readonly',true)
		
	})
</script>
</html>