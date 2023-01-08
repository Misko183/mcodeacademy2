<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');

$student_id = $_SESSION['student_id'];

if(!isset($student_id)){
    header('location:../login.php');
 };

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Študent | MCodeAcademy</title>


    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="d-xxl-flex justify-content-xxl-center align-items-xxl-center">
<div class="container-fluid admin">
		<div class="col-md-12 alert alert-primary">My Quiz List</div>
		<br>
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered" id='table'>
					<colgroup>
						<col width="10%">
						<col width="30%">
						<col width="20%">
						<col width="20%">
						<col width="20%">
					</colgroup>
					<thead>
						<tr>
							<th>#</th>
							<th>Quiz</th>
							<th>Score</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$qry = $conn->query("SELECT * from  quiz_list where id in (SELECT quiz_id FROM quiz_student_list where user_id ='".$_SESSION['student_id']."' ) order by  quiz_name asc ");
					$i = 1;
					if($qry->num_rows > 0){
						while($row= $qry->fetch_assoc()){
							$status = $conn->query("SELECT * from history where quiz_id = '".$row['id']."' and user_id ='".$_SESSION['student_id']."' ");
							$hist = $status->fetch_array();
						?>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $row['quiz_name'] ?></td>
						<td><?php echo $status->num_rows > 0 ? $hist['score'].'/'.$hist['total_score'] : 'N/A' ?></td>
						<td><?php echo $status->num_rows > 0 ? 'Taken' : 'Pending' ?></td>
						<td>
							<center>
							 	<?php if($status->num_rows <= 0): ?>
							 	<a class="btn btn-sm btn-outline-primary" href="./answer_sheet.php?id=<?php echo $row['id']?>"><i class="fa fa-pencil"></i> Take Quiz</a>
								<?php else: ?>
								<a class="btn btn-sm btn-outline-primary" href="./view_answer.php?id=<?php echo $row['id']?>"><i class="fa fa-eye"></i> View</a>
							<?php endif; ?>
							</center>
						</td>
					</tr>
					<?php
					}
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>