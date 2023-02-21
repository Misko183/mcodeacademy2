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

    $qry = $conn->query("SELECT * FROM quiz_list where id = ".$_GET['id'])->fetch_array();
    $ids = isset($_GET["id"]) ? $_GET["id"] : "";

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

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />


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
                        <li  style="width: 100%;">
                            <a href="subject.php"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Triedy</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="students.php"> <i class="fa fa-users" aria-hidden="true"></i> Študenti</a>
                        </li>
                        <li  style="width: 100%;">
                            <a href="quiz_list.php"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Kvízy</a>
                        </li>
                        <li class="active" style="width: 100%;">
                            <a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Výsledky kvízu</a>
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
                    <div class="container-fluid">
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h3 class="text-dark mb-0"><?php echo $qry['quiz_name'] ?></h3>
                        </div>
                        <div class="d-xl-flex mx-auto align-items-xl-center" style="width: 50%;">
                            <button class="btn btn-primary d-flex mx-auto" type="button"
                                style="box-shadow: 4px 3px 7px 2px rgb(106,106,106);margin-bottom: 21px;"
                                data-target="#add_question" data-toggle="modal">
                                <i class="fa fa-plus" style="font-size: 24px;margin-right: 10px;"></i>
                                Pridať novú otázku
                            </button>
                            <button class="btn btn-primary d-flex mx-auto" type="button"
                                style="box-shadow: 4px 3px 7px 2px rgb(106,106,106);margin-bottom: 21px;"
                                data-target="#add_student" data-toggle="modal">
                                <i class="fa fa-plus" style="font-size: 24px;margin-right: 10px;"></i>
                                Pridať študenta/tku
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4"
                                style="width: 50%;margin-top: 0;margin-right: auto;margin-bottom: auto;margin-left: auto;">
                                <div class="table-responsive">
                                    <h5>Otázky</h5>
                                    <table class="table">

                                        <thead
                                            style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
                                            <tr>
                                                <th>Otázka</th>
                                                <th>Akcia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
					    $qry = $conn->query("SELECT * FROM questions where qid = ".$_GET['id']." order by order_by asc");
					     while($row=$qry->fetch_array()){
					?>
                                            <tr>
                                                <td><?php echo $row['question'] ?></td>
                                                <td>
                                                    <!-- <button data-toggle="modal"
                                                        data-target="#modal-<?php //echo $row['id'] ?>"
                                                        class="btn btn-primary" type="button"
                                                        style="margin-right: 10px;background: var(--bs-info);">
                                                        <i class="fa fa-cog"></i>
                                                    </button> -->
                                                    <a href="../scripts/del_question.php?id=<?php echo $row['id']?>&quiz_id=<?php echo $_GET['id'] ?>"
                                                        class="btn btn-primary" type="button"
                                                        style="background: var(--bs-danger);">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4"
                                style="width: 50%;margin-top: 0;margin-right: auto;margin-bottom: auto;margin-left: auto;">
                                <div class="table-responsive">
                                    <h5>Študenti</h5>
                                    <table class="table">
                                        <thead
                                            style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
                                            <tr>
                                                <th>Meno</th>
                                                <th>Akcia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
					    $qry = $conn->query("SELECT u.*,q.id as qid FROM users u left join quiz_student_list q on u.id = q.user_id where q.quiz_id = ".$_GET['id']." order by u.name asc");
					    if($qry || $qry ->num_rows > 0){
						while($row= $qry->fetch_assoc()){
					?>
                                            <tr>
                                                <td><?php echo $row['full_name'] ?></td>
                                                <td>
                                                    <a href="../scripts/teacher_del_question_student.php?id=<?php echo $row['id']?>&quiz_id=<?php echo $_GET['id']?>"
                                                        data-id="<?php echo $row['id']?>" class="btn btn-primary"
                                                        type="button" style="background: var(--bs-danger);">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
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
        <!-- Trigger the modal with a button -->

    </div>

    <div id="add_student" class="modal fade" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Pridať študenta</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="../scripts/teacher_quiz_student.php">
                            <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                                <label class="form-label">Študenti</label>
                                <input type="hidden" name="quiz_id" value="<?php  echo $ids ?>">
                                <select style="margin-bottom: 10px;" name="student">
                                    <option value="" selected="" disabled="">Vyberte tu</option>
                                    <optgroup label="Zoznam študentov">
                                        <?php 
                                            $sql = "SELECT students.*,users.full_name,class.class FROM `students` LEFT JOIN class on students.class_id = class.id LEFT JOIN `users` on students.user_id = users.id";
                                            $res = mysqli_query($conn, $sql);

                                            while($rows = mysqli_fetch_array($res))
                                            { ?>
                                        <option value="<?php echo $rows['user_id'];?>">
                                            <?php echo $rows['full_name']; echo $rows['class']; echo $rows['user_id'];?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                    </optgroup>
                                </select>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" name="submit">Uložiť</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="add_question" class="modal fade" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Pridať novú otázku</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id='question-frm'>
                            <div class="modal-body">
                                <div id="msg"></div>
                                <div class="form-group">
                                    <label>Otázka</label>
                                    <input type="hidden" name="qid" value="<?php echo $_GET['id'] ?>" />
                                    <input type="hidden" name="id" />
                                    <textarea rows='3' name="question" required="required"
                                        class="form-control"></textarea>
                                </div>
                                <label>Možnosti:</label>

                                <div class="form-group">
                                    <textarea rows="2" name="question_opt[0]" required=""
                                        class="form-control"></textarea>
                                    <span>
                                        <label><input type="radio" name="is_right[0]" class="is_right" value="1"
                                                required=""> <small>Správna dpoveď na otázku</small></label>
                                    </span>
                                    <br>
                                    <textarea rows="2" name="question_opt[1]" required=""
                                        class="form-control"></textarea>
                                    <label><input type="radio" name="is_right[1]" class="is_right " value="1"
                                            style="visibility: hidden;"> <small>Nesprávna dpoveď na
                                            otázku</small></label>
                                    <br>
                                    <textarea rows="2" name="question_opt[2]" required=""
                                        class="form-control"></textarea>
                                    <label><input type="radio" name="is_right[2]" class="is_right " value="1"
                                            style="visibility: hidden;"> <small>Nesprávna dpoveď na
                                            otázku</small></label>
                                    <br>
                                    <textarea rows="2" name="question_opt[3]" required=""
                                        class="form-control"></textarea>
                                    <label><input type="radio" name="is_right[3]" class="is_right " value="1"
                                            style="visibility: hidden;"> <small>Nesprávna dpoveď na
                                            otázku</small></label>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" name="save"><span
                                        class="glyphicon glyphicon-save"></span> Uložiť</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




    <?php include 'template/footer/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script>
    $(document).ready(function() {
        $('#new_question').click(function() {
            $('#msg').html('')
            $('#manage_question .modal-title').html('Add New Question')
            $('#manage_question #question-frm').get(0).reset()
            $('#manage_question').modal('show')
        })
        $('.is_right').each(function() {
            $(this).click(function() {
                $('.is_right').prop('checked', false);
                $(this).prop('checked', true);
            })
        })
        $('#question-frm').submit(function(e) {
            e.preventDefault();
            $('#question-frm [name="submit"]').attr('disabled', true)
            $('#question-frm [name="submit"]').html('Ukladá sa...')
            $('#msg').html('')

            $.ajax({
                url: '../scripts/save_question.php',
                method: 'POST',
                data: $(this).serialize(),
                error: err => {
                    console.log(err)
                    alert('An error occured')
                    $('#quiz-frm [name="submit"]').removeAttr('disabled')
                    $('#quiz-frm [name="submit"]').html('Save')
                },
                success: function(resp) {
                    if (resp == 1) {
                        alert('Data successfully saved');
                        location.reload()
                    }
                }
            })
        })
    })
    </script>

    <script type="text/javascript"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>