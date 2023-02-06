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


$quiz = $conn->query("SELECT * FROM quiz_list where id =".$_GET['id']." order by RAND()")->fetch_array();

?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title><?php echo $quiz['quiz_name'] ?> | Odpoveďový hárok</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="template/nav/nav.css">
    <link rel="stylesheet" href="template/footer/footer.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />

    <link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src = "../assets/js/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

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
                        <li style="width: 100%;">
                            <a href="quiz_list.php"> <i class="fa fa-list" aria-hidden="true"></i> List kvízov</a>
                        </li>
                        <li class="active" style="width: 100%;">
                            <a href=""> <i class="fa fa-file-text-o" aria-hidden="true"></i>
 Kvíz: <?php echo $quiz['quiz_name']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        Dúfam že dosiahneš 100% z tvojho kvízu....držím palce ❤
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Životopis</h1>
                        <div class="row">
                            <div class="p-4 p-md-5" style="width:100%;">
                                <div class="col-md-12 alert alert-primary">
                                    <?php echo $quiz['quiz_name'] ?> | <?php echo $quiz['qpoints'] .' Bodov za každú otázku' ?>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <form action="" id="answer-sheet">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['student_id'] ?>">
                                    <input type="hidden" name="quiz_id" value="<?php echo $quiz['id'] ?>">
                                    <input type="hidden" name="qpoints" value="<?php echo $quiz['qpoints'] ?>">
                                    <?php
					$question = $conn->query("SELECT * FROM questions where qid = '".$quiz['id']."' order by order_by asc ");
					$i = 1 ;
					while($row =$question->fetch_assoc()){
						$opt = $conn->query("SELECT * FROM question_opt where question_id = '".$row['id']."' order by RAND() ");
					?>

                                    <ul class="q-items list-group mt-4 mb-4">
                                        <li class="q-field list-group-item">
                                            <strong><?php echo ($i++). '. '; ?> <?php echo $row['question'] ?></strong>
                                            <input type="hidden" name="question_id[<?php echo $row['id'] ?>]"
                                                value="<?php echo $row['id'] ?>">
                                            <br>
                                            <ul class='list-group mt-4 mb-4'>
                                                <?php while($orow = $opt->fetch_assoc()){ ?>

                                                <li class="answer list-group-item">
                                                    <label><input type="radio"
                                                            name="option_id[<?php echo $row['id'] ?>]"
                                                            value="<?php echo $orow['id'] ?>">
                                                        <xmp style="margin: 0;"><?php echo $orow['option_txt'] ?></xmp>
                                                    </label>
                                                </li>
                                                <?php } ?>

                                            </ul>

                                        </li>
                                    </ul>

                                    <?php } ?>
                                    <button class="btn btn-block btn-primary">Odoslať</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include 'template/footer/footer.php' ?>

    <script>
    $(document).ready(function() {
        $('.answer').each(function() {
            $(this).click(function() {
                $(this).find('input[type="radio"]').prop('checked', true)
                $(this).css('background', '#00c4ff3d')
                $(this).siblings('li').css('background', 'white')
            })


        })
        $('#answer-sheet').submit(function(e) {
            e.preventDefault()
            $('#answer-sheet [type="submit"]').attr('disabled', true)
            $('#answer-sheet [type="submit"]').html('Saving...')
            $.ajax({
                url: '../scripts/submit_answer.php',
                method: 'POST',
                data: $(this).serialize(),
                error: err => console.log(err),
                success: function(resp) {
                    if (typeof resp != undefined) {
                        resp = JSON.parse(resp)
                        if (resp.status == 1) {
                            alert('You completed the quiz your score is ' + resp.score)
                            location.replace('view_answer.php?id=<?php echo $_GET['id'] ?>')
                        }
                    }
                }
            })
        })

    })
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>