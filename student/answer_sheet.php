<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');

$ids = isset($_GET["id"]) ? $_GET["id"] : "";

 $quiz = $conn->query("SELECT * FROM quiz_list where id =".$_GET['id']." order by RAND( )")->fetch_array();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	</head>
	<title> | Answer Sheet</title>
</head>
<body>
<div class="container-fluid admin">
		<div class="col-md-12 alert alert-primary"><?php echo $quiz['quiz_name'] ?> | <?php echo $quiz['qpoints'] .' Points Each Question' ?></div>
		<br>
		<div class="card">
			<div class="card-body">
				<form action="../scripts/submit_answer.php">
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['student_id'] ?>">
					<input type="hidden" name="quiz_id" value="<?php echo $ids ?>">
					<input type="hidden" name="qpoints" value="<?php echo $quiz['qpoints'] ?>">
					<?php
					$question = $conn->query("SELECT * FROM questions where qid = '".$quiz['id']."' order by order_by asc ");
					$i = 1 ;
					while($row =$question->fetch_assoc()){
						$opt = $conn->query("SELECT * FROM question_opt where question_id = '".$row['id']."' order by RAND() ");
					?>

				<ul class="q-items list-group mt-4 mb-4">
					<li class="q-field list-group-item">
						<strong><?php echo ($i++). '. '; ?> <?php echo $row['question'] ?></strong>
						<input type="hidden" name="question_id[<?php echo $row['id'] ?>]" value="<?php echo $row['id'] ?>">
						<br>
						<ul class='list-group mt-4 mb-4'>
						<?php while($orow = $opt->fetch_assoc()){ ?>

							<li class="answer list-group-item">
								<label><input type="radio" name="option_id[<?php echo $row['id'] ?>]" value="<?php echo $orow['id'] ?>"> <?php echo $orow['option_txt'] ?></label>
							</li>
						<?php } ?>

						</ul>

					</li>
				</ul>

				<?php } ?>
				<button class="btn btn-block btn-primary">Submit</button>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>