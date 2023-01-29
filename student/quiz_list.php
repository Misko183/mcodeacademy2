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

?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title>List kvízov | MCodeAcademy</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" href="template/nav/nav.css">
    <link rel="stylesheet" href="template/footer/footer.css">

    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">


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
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link" href="index.php">
                            <i class="fa fa-home text-center mr-1"></i>
                            Účet
                        </a>
                        <a class="nav-link" href="change_password.php">
                            <i class="fa fa-key text-center mr-1"></i>
                            Zmena hesla
                        </a>
                        <a class="nav-link active">
                            <i class="fa fa-user text-center mr-1"></i>
                            Kvízy
                        </a>
                    </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="col-md-12 alert alert-primary"><strong>List kvízov</strong></div>
                    <br>
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
    </section>

    <?php include 'template/footer/footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>