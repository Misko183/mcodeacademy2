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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link rel="stylesheet" href="assets/css/login.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>

    <div class="row mx-0 auth-wrapper">
        <!--remove bg-->
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="d-none d-sm-flex col-sm-6 col-lg-8 align-items-center p-5">
            <div class="align-items-start d-lg-flex flex-column offset-lg-2 text-white">
                <img src="" class="mb-3">
                <h1 classname="d-flex">Zmena hesla
                </h1>
                <p>McodeAcademy je pre lepším domov pre programovanie po slovensky</p>
            </div>
        </div>

        <div class="d-flex justify-content-center col-sm-6 col-lg-4 align-items-center px-5 bg-white mx-auto">
            <div class="form-wrapper">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-column">
                        <div class="mb-4">
                            <h3 class="font-medium mb-1">Zmena hesla pre <?php echo $email ?></h3>
                        </div>
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
                        <div class="mb-10">
                            <div class="form-group">
                                <label for="mail" class="">Heslo</label>
                                <input name="pass1" type="password" class="form-control" placeholder="vlož svoj email"
                                    required>
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="mail" class="">Opakovať heslo</label>
                                <input name="pass2" type="password" class="form-control" placeholder="vlož svoj email"
                                    required>
                                </input>
                            </div>

                            <button name="submit" type="submit" value="login now"
                                class="btn btn-primary btn-block mt-3 border-0">
                                Zmeniť heslo
                            </button>
                            <div class="text-center">
                                <a class="btn btn-link">
                                    Ešte nemáš účet?
                                    <a href="register.php">Zaregistruj sa</a>
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-link">
                                    Už máš účet?
                                    <a href="login.php">Prihlás sa</a>
                                </a>
                            </div>
                        </div>
                        <div class="p-5 text-center text-xs">
                            <span>
                            Copyright © 2022-2023 | vytvoril
                                <a href="https://sladecek.sk" rel="" target="_blank" title="aji">sladecek.sk</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>