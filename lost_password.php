<?php 

include 'scripts/config.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    
         $user_agent = $_SERVER['HTTP_USER_AGENT'];
         $subject = "Zmena hesla";
         $contact = 'kontakt@mcodeacademy.sk';
         $html = file_get_contents('lost_password_html.html'); 
         $html = str_replace("{{EMAIL}}", $email, $html);
         $html = str_replace("{{LINK}}", $email, $html);
         $html = str_replace("{{browser_name}}", $user_agent, $html);
         $html = str_replace("{{support_url}}", $contact, $html);
         $from = "no-reply@mcodeacademy.sk";

         $mailTo =  $email;
         $headers = "From: ".$from;
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

         mail($mailTo, $subject, $html, $headers);

         header('location: login.php?message=success');

 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>MCodeAcademy • Stratené heslo</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link rel="stylesheet" href="assets/css/login.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

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
				<h2 class="title">Zmena hesla</h2>
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
            	<input name="submit" type="submit" class="btn" value="Poslať email na zmenu hesla">

				<p>Ešte nemáš účet?<span><a href="register.php">Zaregistruj sa</a></span></p>
				<p>Už máš účet a vieš heslo?<span><a href="login.php">Prihlás sa</a></span></p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./assets/js/main.js"></script>

</body>

</html>