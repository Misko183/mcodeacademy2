<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');

$teacher_id = $_SESSION['user_id'];

if(!isset($teacher_id)){
    header('location:../login.php');
 };

$sql = "SELECT * FROM `users` WHERE id = '$teacher_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);   

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
				
	$query = "UPDATE users SET `name` = '$name', `full_name` = '$full_name', `email` = '$email' WHERE id = '$teacher_id'";
	$result = mysqli_query($conn, $query);
	if ($result) {
		$done[] = "Údaje boli zmenené";
	} else {
		$message[] = "Nepodarilo sa zmeniť údaje.";
	}
}
	
	$sql = "SELECT * FROM `users` WHERE id = '$teacher_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
	
	
?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title>Zmena hesla | MCodeAcademy</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="template/nav/nav.css">
    <link rel="stylesheet" href="template/footer/footer.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>

    <?php include 'template/nav/nav.php'; ?>

    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="../assets/img/avatar.svg" alt="" />
                        </a>
                        <h1><?php echo $row['full_name'] ?></h1>
                        <p>
                        <h6 class="__cf_email__" data-cfemail="3155544855544871455954745c50585d1f525e5c">
                            <?php echo $row['email'] ?></h6>
                        </p>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li style="width: 100%;">
                            <a href="index.php">
                                <i class="fa fa-user"></i>
                                Profil
                            </a>
                        </li>
                        <li style="width: 100%;">
                            <a href="change_password.php">
                                <i class="fa fa-calendar"></i> Zmena hesla
                            </a>
                        </li>
                        <li class="active" style="width: 100%;">
                            <a href="#"> <i class="fa fa-edit"></i> Upraviť profil</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="subject.php"> <i class="fa fa-edit"></i> Triedy</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="students.php"> <i class="fa fa-users" aria-hidden="true"></i> Študenti</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">

                <div class="panel">
                    <div class="bio-graph-heading">
                        Zmeňte si svoje informácie na také aké potrebujete.
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Zmena životopisu</h1>
                        <form action="" method="POST" autocomplete="off">
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
                                        <label>Nickname</label>
                                        <input autocomplete="off" type="text" class="form-control" name="name"
                                            value="<?php echo $row['name'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Meno Priezvisko</label>
                                        <input autocomplete="off" type="text" class="form-control" name="full_name"
                                            value="<?php echo $row['full_name'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input autocomplete="off" type="email" class="form-control" name="email"
                                            value="<?php echo $row['email'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <!-- <input type="submit" name="submit" class="btn btn-primary" value="Aktualizovať"> -->
                                <button name="submit" class="btn btn-info pull-right">Aktualizovať</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript"></script>


        <?php include 'template/footer/footer.php' ?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>