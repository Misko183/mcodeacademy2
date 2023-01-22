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
    <title>MCodeAcademy • Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link rel="stylesheet" href="assets/css/register.css">

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
                <h1 classname="d-flex">Ahoj 👋 Vitaj späť
                </h1>
                <p>McodeAcademy je pre lepším domov pre programovanie po slovensky</p>
            </div>
        </div>

        <div class="d-flex justify-content-center col-sm-6 col-lg-4 align-items-center px-5 bg-white mx-auto">
            <div class="form-wrapper">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-column">
                        <div class="mb-4">

                            <h3 class="font-medium mb-1">Registrácia </h3>
                            <p class="mb-2">Je to rýchle a jednoduché.</p>
                        </div>
                        <?php
        if(isset($message)){
            foreach($message as $message){
                echo '
                <div class="message">
                    <span>'.$message.'</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>
                ';
                }
            }
        ?>
                        <div class="mb-10">
                            <div class="form-group">
                                <label for="mail" class="">Username</label>
                                <input name="name" type="text" class="form-control">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="mail" class="">Email</label>
                                <input name="email" type="text" class="form-control">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="password" class="">Heslo</label>
                                <input name="pass" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="">Zopakujte heslo</label>
                                <input name="cpass" type="password" class="form-control">
                            </div>
                            <div class="text-right"><a class="btn btn-link" href="lost_password.php">
                                    Zabudnuté heslo?
                                </a></div>
                            <button name="submit" type="submit" class="btn btn-primary btn-block mt-3 border-0">
                                Sign In
                            </button>
                            <div class="text-center"><a class="btn btn-link">
                                    Už máš účet? <a href="login.php">Prihlásiť sa</a>
                                </a></div>
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