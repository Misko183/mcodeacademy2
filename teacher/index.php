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

?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title>Profil | MCodeAcademy</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="template/nav/nav.css">
    <link rel="stylesheet" href="template/footer/footer.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

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
                        <h6>
                            <?php echo $row['email'] ?></h6>
                        </p>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active" style="width: 100%;">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Profil
                            </a>
                        </li>
                        <li style="width: 100%;">
                            <a href="change_password.php">
                                <i class="fa fa-calendar"></i> Zmena hesla
                            </a>
                        </li>
                        <li style="width: 100%;">
                            <a href="change_bio.php"> <i class="fa fa-edit"></i> Upraviť profil</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="subject.php"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Triedy</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="students.php"> <i class="fa fa-users" aria-hidden="true"></i> Študenti</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="quiz_list.php"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Kvízy</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="history.php"> <i class="fa fa-file-text" aria-hidden="true"></i> História kvízov</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        Vitajte vo vašom profile. Tu si môžete poupravovať svoje osobné údaje. (V príprave je celkové
                        vzdelávanie kde sa vám budu ukladať vaše pokroky.)
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Životopis</h1>
                        <div class="row">
                            <div class="bio-row col-md-6">
                                <p><span style="color: #00adad;font-weight: bold;">Meno Priezvisko:
                                    </span><?php echo $row['full_name']; ?></p>
                                </p>
                            </div>
                            <div class="bio-row col-md-6">
                                <p><span style="color: #00adad;font-weight: bold;">Nickname:
                                    </span><?php echo $row['name']; ?></p>
                                </p>
                            </div>
                            <div class="bio-row col-md-6">
                                <p><span style="color: #00adad;font-weight: bold;">Email:
                                    </span><?php echo $row['email']; ?></p>
                                </p>
                            </div>
                            <div class="bio-row col-md-6">
                                <p><span style="color: #00adad;font-weight: bold;">Typ používateľa:
                                    </span><?php echo $row['user_type']; ?></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <?php include 'template/footer/footer.php' ?>
    <script type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>