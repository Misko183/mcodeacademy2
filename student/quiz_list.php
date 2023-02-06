<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:../login.php');
 };

    $sql = "SELECT * FROM `users` WHERE id = '$user_id'";
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
                        <li style="width: 100%;">
                            <a href="change_bio.php"> <i class="fa fa-edit"></i> Upraviť profil</a>
                        </li>
                        <li class="active" style="width: 100%;">
                            <a href=""> <i class="fa fa-list" aria-hidden="true"></i> List kvízov</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        Tu si nájdete všetky Kvízy ktoré vám pridelili vaši učitelia.
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Životopis</h1>
                        <div class="row">
                        <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered" id='table'>
                                <colgroup>
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kvíz</th>
                                        <th>Skóre</th>
                                        <th>Status</th>
                                        <th>Akcia</th>
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
                                        <td><?php echo $status->num_rows > 0 ? $hist['score'].'/'.$hist['total_score'] : 'N/A' ?>
                                        </td>
                                        <td><?php echo $status->num_rows > 0 ? 'Spravený' : 'Čaká na spracovanie' ?></td>
                                        <td>
                                            <center>
                                                <?php if($status->num_rows <= 0): ?>
                                                <a class="btn btn-sm btn-outline-primary"
                                                    href="./answer_sheet.php?id=<?php echo $row['id']?>"><i
                                                        class="fa fa-pencil"></i> Urobiť kvíz</a>
                                                <?php else: ?>
                                                <a class="btn btn-sm btn-outline-primary"
                                                    href="./view_answer.php?id=<?php echo $row['id']?>"><i
                                                        class="fa fa-eye"></i>
                                                    Pozrieť</a>
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