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
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" href="template/nav/nav.css">
    <link rel="stylesheet" href="template/footer/footer.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">

	<link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src = "../assets/js/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
   
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
                    <div class="nav flex-column nav-pills">
                        <a class="nav-link" href="index.php">
                            <i class="fa fa-home text-center mr-1"></i>
                            Účet
                        </a>
                        <a class="nav-link" href="change_password.php">
                            <i class="fa fa-key text-center mr-1"></i>
                            Zmena hesla
                        </a>
                        <a class="nav-link" href="quiz_list.php">
                            <i class="fa fa-user text-center mr-1"></i>
                            Kvízy
                        </a>
                        <a class="nav-link active">
                            <i class="fa fa-user text-center mr-1"></i>
                            Odpoveďový hárok
                        </a>
                    </div>
                </div>
                <div class="p-4 p-md-5" style="width:100%;">
                    <div class="col-md-12 alert alert-primary">
                        <?php echo $quiz['quiz_name'] ?>|<?php echo $quiz['qpoints'] .' Points Each Question' ?>
                    </div>
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
                                        <label><input type="radio" name="option_id[<?php echo $row['id'] ?>]"
                                                value="<?php echo $orow['id'] ?>">
                                            <xmp style="margin: 0;"><?php echo $orow['option_txt'] ?></xmp></label>
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
    </section>

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


    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>