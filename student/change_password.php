<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');

$student_id = $_SESSION['student_id'];

if(!isset($student_id)){
    header('location:../login.php');
 };

    $sql = "SELECT * FROM `users` WHERE id = '$student_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);   

	if (isset($_POST['submit'])) {
		// Get the current and new passwords from the form
		$current_password = md5($_POST['current_password']);
		$new_password = md5($_POST['new_password']);
		$confirm_password = md5($_POST['confirm_password']);
	
		// Check if the current password is correct
		$query = "SELECT `password` FROM `users` WHERE id = '$student_id'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);

		if ($current_password == $row['password']) {
			// Check if the new password matches the confirmation password
			if ($new_password == $confirm_password) {
				// Update the password in the database
				$query = "UPDATE users SET `password` = '$new_password' WHERE id = '$student_id'";
				$result = mysqli_query($conn, $query);
				if ($result) {
					//echo "Password changed successfully!";
					$done[] = "Heslo bolo úspešne zmenené!";
				} else {
					//echo "Failed to change password.";
					$message[] = "Nepodarilo sa zmeniť heslo.";
				}
			} else {
				//echo "New password and confirmation password do not match.";
				$message[] = "Nové heslo a potvrdzovacie heslo sa nezhodujú.";
			}
		} else {
			//echo "Current password is incorrect.";
			$message[] = "Súčasné heslo je nesprávne.";
		}
	}
	
	$sql = "SELECT * FROM `users` WHERE id = '$student_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
	
	
?>
<!DOCTYPE html>
<html lang="sk">
<head>
	<meta charset="UTF-8">
	<title>Zmena hesla | MCodeAcademy</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="template/nav/nav.css">
	<link rel="stylesheet" href="template/footer/footer.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- navigation -->

	<?php include 'template/nav/nav.php'; ?>

	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Účet</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<h4 class="text-center"><?php echo $row['full_name']; ?></h4>
					</div>
					<div class="nav flex-column nav-pills">
						<a class="nav-link" href="index.php">
							<i class="fa fa-home text-center mr-1"></i> 
							Účet
						</a>
						<a class="nav-link active">
							<i class="fa fa-key text-center mr-1"></i> 
							Zmena hesla
						</a>
						<a class="nav-link" href="quiz_list.php">
							<i class="fa fa-user text-center mr-1"></i> 
							Kvízy
						</a>
					</div>
				</div>
				<div class="p-4 p-md-5" >
					<form action="" method="POST">
						<h3 class="mb-4">Zmena hesla</h3>
						<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span style="color: red;">'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
<?php
   if(isset($done)){
      foreach($done as $done){
         echo '
         <div class="message">
            <span style="color: limegreen;">'.$done.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Staré heslo</label>
								  	<input type="password" class="form-control" name="current_password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nové heslo</label>
								  	<input type="password" class="form-control" name="new_password">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Potvrďte nové heslo</label>
								  	<input type="password" class="form-control" name="confirm_password">
								</div>
							</div>
						</div>
						<div>
							<!-- <input type="submit" name="submit" class="btn btn-primary" value="Aktualizovať"> -->
							<button name="submit" class="btn btn-primary">Aktualizovať</button>
						</div>
					</form>
                </div>
			</div>
		</div>
	</section>

	<?php include 'template/footer/footer.php' ?>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>