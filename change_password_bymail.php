<?php 

include 'scripts/configa.php';

$email = isset($_GET["email"]) ? $_GET["email"] : "";



if(isset($_POST['submit'])){

    $pass1 = md5(mysqli_real_escape_string($conn, $_POST['pass1']));
    $pass2 = md5(mysqli_real_escape_string($conn, $_POST['pass2']));

    if($pass1 == $pass2){
        $sql = "UPDATE `users` SET `password` = '$pass1' WHERE `email`='$email'";

        if(mysqli_query($conn, $sql)){
         $user_agent = $_SERVER['HTTP_USER_AGENT'];
         $contact = 'kontakt@mcodeacademy.sk';
         $html = file_get_contents('change_password_bymail.html'); 
         $html = str_replace("{{EMAIL}}", $email, $html);
         //$html = str_replace("{{LINK}}", $email, $html);
         $html = str_replace("{{browser_name}}", $user_agent, $html);
         $html = str_replace("{{support_url}}", $contact, $html);
         $from = "no-reply@mcodeacademy.sk";


         $subject = "Zmena hesla úspenšná";
         $mailTo = $email;
         $headers = "From: ".$from;
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


         mail($mailTo, $subject, $html, $headers);
            header("Location: login.php?password=changed");
        }else {
            echo "Error $sql." . mysqli_error($conn);
        }

    } else if ($pass1 != $pass2) {
        $message[] = "Heslá sa nezhodujú";
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
    <title>MCodeAcademy • Zmena hesla</title>

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
				<h2 class="title">Zmena hesla pre <?php echo $email ?></h2>
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
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Heslo</h5>
           		    	<input name="pass1" type="password" class="input" required></input>
            	   </div>
            	</div>
                <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Heslo</h5>
           		    	<input name="pass2" type="password" class="input" required></input>
            	   </div>
            	</div>
            	<input name="submit" type="submit" class="btn" value="Prihlásiť sa">

				<p>Ešte nemáš účet?<span><a href="register.php">Zaregistruj sa</a></span></p>
				<p>Už máš účet?<span><a href="login.php">Prihlás sa</a></span></p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./assets/js/main.js"></script>

</body>

</html>