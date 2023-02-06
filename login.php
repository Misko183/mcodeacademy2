<?php

include 'scripts/config.php';

$loggeding = false;

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header('location: index.php');
  exit;
}

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){

      if($row['user_type'] == 'admin' || $qry->num_rows > 0){

         $_SESSION["loggedin"] = true;
         $_SESSION["loggedin_as_admin"] = true;
         $_SESSION['admin_id'] = $row['id'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['name'] = $row['name'];
         $_SESSION['user_type'] = $row['user_type'];
         
         header('location:' . $_GET["continue"]);

      }elseif($row['user_type'] == 'user'){

         $_SESSION["loggedin"] = true;
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['name'] = $row['name'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:' . $_GET["continue"]);

      }elseif($row['user_type'] == 'student'){

        $_SESSION["loggedin"] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['student_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['user_type'] = $row['user_type'];
        header('location:' . $_GET["continue"]);

     }elseif($row['user_type'] == 'teacher'){

        $_SESSION["loggedin"] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['user_type'] = $row['user_type'];
        header('location:' . $_GET["continue"]);

     }else{
         $message[] = 'používateľ nebol najdený!';
      }
      
   }else{
      $message[] = 'nesprávný email alebo heslo!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>MCodeAcademy • Login</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/login2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>


</head>

<body>
    <img class="wave" src="./assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="./assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post" enctype="multipart/form-data">
				<img src="./assets/img/avatar.svg">
				<h2 class="title">Prihlásenie</h2>
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
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input name="email" type="text" class="input" required></input>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Heslo</h5>
           		    	<input name="pass" type="password" class="input" required></input>
            	   </div>
            	</div>
            	<a href="lost_password.php">Zabudnuté heslo?</a>
            	<input name="submit" type="submit" class="btn" value="Prihlásiť sa">

				<p>Ešte nemáš účet?<span><a href="register.php">Zaregistruj sa</a></span></p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./assets/js/main.js"></script>

</body>

</html>