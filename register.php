<?php

include 'scripts/config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'Používateľ už existuje!';
   }else{
      if($pass != $cpass){
         $message[] = 'Hesla sa nezhodujú!';
      } else {
         $insert = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert->execute([$name, $email, $cpass]);
         if($insert){
            $message[] = 'Úspešne zaregistoraný/á!';
            header('location:login.php');
         }
      }
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
    <title>MCodeAcademy • Register</title>

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
				<h2 class="title">Vitaj</h2>
                <p>Registrácia</p>
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
           		   		<h5>Username</h5>
           		   		<input name="name" type="text" class="input" required></input>
           		   </div>
           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input name="email" type="text" class="input" required></input>
           		   </div>
           		</div>
                   <div class="input-div one">
           		   <div class="i">
                      <i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Heslo</h5>
           		   		<input name="pass" type="password" class="input" required></input>
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
                      <i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Zopakujte heslo</h5>
           		   		<input name="cpass" type="password" class="input" required></input>
           		   </div>
           		</div>
                <button name="submit" type="submit" class="btn">
                                Registrovať sa
                            </button>

				<span>Už máš účet?<a href="login.php">Prihlás sa</a></span>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./assets/js/main.js"></script>




</body>

</html>