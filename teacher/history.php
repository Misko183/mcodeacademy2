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
    <title>História kvízov | MCodeAcademy</title>
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
                        <li class="active" style="width: 100%;">
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
                        <div class="row">
                            <div class="col-10">
                                <h1>Triedy</h1>
                            </div>
                            <div class="col-2">
                                <a data-bs-target="#add_quiz" data-bs-toggle="modal" data-toggle="modal"
                                    data-target="#add_quiz" class="btn btn-primary btn-sm d-none d-sm-inline-block"
                                    role="button" href="#">
                                    <i class="fa fa-plus" style="font-size: 18px;margin-right: 10px;"></i>
                                    &nbsp;Pridať nový kvíz
                                </a>
                            </div>

                        </div>

                        <div class="row">
                        <div class="col-md-12 alert alert-primary">Quiz Records</div>
                        <br>
                        <div class="col-md-4 offset-md-4 mb-4">
                            <select class="form-control select2"
                                onchange="location.replace('history.php?quiz_id='+this.value)">
                                <option value="all"
                                    <?php echo isset($_GET['quiz_id']) && $_GET['quiz_id'] == 'all' ? 'selected' : '' ?>>
                                    All
                                </option>
                                <?php 
				$where =''; 
				if($_SESSION['login_user_type'] == 'teacher'){
				$where = ' where user_id = '.$_SESSION['teacher_id'].' '; 
				 }
				$quiz = $conn->query("SELECT * FROM quiz_list order by quiz_name asc");
				while($row = $quiz->fetch_assoc()){
				?>
                                <option value="<?php echo $row['id'] ?>"
                                    <?php echo isset($_GET['quiz_id']) && $_GET['quiz_id'] == $row['id']  ? 'selected' : '' ?>>
                                    <?php echo $row['quiz_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-4" style="width: 60%;margin: auto;">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead
                                        style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
                                        <tr>
                                            <th>#</th>
                                            <th>Student Name</th>
                                            <th>Quiz</th>
                                            <th>Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
					                    $where = '';
					                    if($_SESSION['user_id'] == 'teacher'){
					                    	$where = ' where q.user_id = '.$_SESSION['teacher_id'].' ';
					                    }
					                    if(isset($_GET['quiz_id']) && $_GET['quiz_id'] != 'all'){
					                    	if(empty($where)){
					                    	$where = ' where q.id = '.$_GET['quiz_id'].' ';
                                            
					                    	}else{
					                    	$where = ' and q.id = '.$_GET['quiz_id'].' ';
                                            
					                    	}
					                    }
					                    $qry = $conn->query("SELECT h.*,u.full_name as students,q.quiz_name FROM history h INNER JOIN users u on h.user_id = u.id INNER JOIN quiz_list q on h.quiz_id = q.id order by u.name asc; ");
					                    $i = 1;
					                    if($qry->num_rows > 0){
					                    	while($row= $qry->fetch_assoc()){
							
						            ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo ucwords($row['students']) ?></td>
                                            <td><?php echo $row['quiz_name'] ?></td>
                                            <td class="text-center"><?php echo $row['score'].'/'.$row['total_score']  ?>
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

        <div id="change_subject" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upraviť predmet</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="../scripts/save_subject.php" id="class-frm">
                        <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                            <label class="form-label">Názov predmetu</label>
                            <input type="text" style="margin-bottom: 10px;" name="subject_name">
                            <label class="form-label">trieda</label>
                            <select style="margin-bottom: 10px;" name="class">
                                <optgroup label="Zoznam tried">
                                    <?php 
                                        $sql = "SELECT * FROM class";
                                        $res = mysqli_query($conn, $sql);

                                        while($rows = mysqli_fetch_array($res))
                                        { ?>
                                    <option value="<?php echo $rows['id'];?>">
                                        <?php echo $rows['class'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </optgroup>
                            </select>
                            <label class="form-label">Vyučujúci</label>
                            <select style="margin-bottom: 10px;" name="teacher">
                                <optgroup label="Zoznam učiteľov">
                                    <?php 
                                        $sql = "SELECT * FROM users WHERE user_type = 'teacher'";
                                        $res = mysqli_query($conn, $sql);

                                        while($rows = mysqli_fetch_array($res))
                                        { ?>
                                    <option value="<?php echo $rows['id'];?>">
                                        <?php echo $rows['full_name'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </optgroup>
                            </select>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit" name="submit">Save</button>
                            </div>
                        </div>
                        <input type="hidden" name="id">
                    </form>
                </div>
            </div>
        </div>
        <div id="add_quiz" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pridať nový kvíz</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="../scripts/teacher_save_quiz.php">
                        <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                            <label class="form-label">Názov kvízu</label>
                            <input type="text" style="margin-bottom: 10px;" name="quiz_name">
                            <label class="form-label>">Počet bodov za otázku</label>
                            <input type="number" style="margin-bottom: 10px;" name="qpoints">
                            <label class="form-label">Trieda</label>
                            <select style="margin-bottom: 10px;" name="class">
                                <option value="" selected="" disabled="">Vyberte tu</option>
                                <optgroup label="Zoznam tried">
                                    <?php 
                                        $sql = "SELECT * FROM class";
                                        $res = mysqli_query($conn, $sql);

                                        while($rows = mysqli_fetch_array($res))
                                        { ?>
                                    <option value="<?php echo $rows['id'];?>">
                                        <?php echo $rows['class'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </optgroup>
                            </select>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit" name="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="change_quiz" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upraviť kvíz</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="../scripts/update_quiz.php" id="quiz-frm">
                        <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                            <label class="form-label">Názov kvízu</label>
                            <input type="text" style="margin-bottom: 10px;" name="quiz_name">
                            <label class="form-label>">Počet bodov za otázku</label>
                            <input type="number" style="margin-bottom: 10px;" name="qpoints">
                            <label class="form-label">Trieda</label>
                            <select style="margin-bottom: 10px;" name="class">
                                <option value="" selected="" disabled="">Vyberte tu</option>
                                <optgroup label="Zoznam tried">
                                    <?php 
                                        $sql = "SELECT * FROM class";
                                        $res = mysqli_query($conn, $sql);

                                        while($rows = mysqli_fetch_array($res))
                                        { ?>
                                    <option value="<?php echo $rows['id'];?>">
                                        <?php echo $rows['class'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </optgroup>
                            </select>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit" name="submit">Aktualizovať</button>
                            </div>
                        </div>
                        <input type="hidden" name="id">
                    </form>
                </div>
            </div>
        </div>
    </div>





    <?php include 'template/footer/footer.php' ?>

    <script>
    $(document).ready(function() {
        $('#table').DataTable({
            "language": {
                "sProcessing": "spracovanie...",
                "sLengthMenu": "Zobraziť _MENU_ záznamov",
                "sZeroRecords": "Neboli nájdené žiadne výsledky",
                "sEmptyTable": "V tejto tabuľke nie sú dostupné žiadne údaje",
                "sInfo": "Zobrazené záznamy od _START_ do _END_ z celkom _TOTAL_ záznamov",
                "sInfoEmpty": "Zobrazené záznamy od 0 do 0 z celkom 0 záznamov",
                "sInfoFiltered": "(Filtrovanie celkom _MAX_ záznamov)",
                "sInfoPostFix": "",
                "sSearch": "Vyhľadať:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Načítanie...",
                "oPaginate": {
                    "sFirst": "najprv",
                    "sLast": "Posledný",
                    "sNext": "Ďalšie",
                    "sPrevious": "Predchádzajúce"
                },
                "oAria": {
                    "sSortAscending": ": Aktiváciou zoradíte stĺpec vo vzostupnom poradí",
                    "sSortDescending": ": Aktiváciou zoradíte stĺpec v zostupnom poradí"
                }
            }
        });
        $('.edit_quiz').click(function() {
            var id = $(this).attr('data-id')
            $.ajax({
                url: '../scripts/get_quiz.php?id=' + id,
                error: err => console.log(err),
                success: function(resp) {
                    if (typeof resp != undefined) {
                        resp = JSON.parse(resp)
                        $('[name="id"]').val(resp.id)
                        $('[name="quiz_name]').val(resp.quiz_name)
                        $('[name="qpoints]').val(resp.qpoints)
                        $('[name="class]').val(resp.class_id)
                        $('#change_quiz').modal('show')
                    }
                }
            })
        })
        $('#quiz-frm').submit(function(e) {
            e.preventDefault();
            $('#class-frm [name="submit"]').attr('disabled', true)
            $('#class-frm [name="submit"]').html('Ukladá sa...')
            $.ajax({
                url: '../scripts/update_quiz.php?id=',
                method: 'POST',
                data: $(this).serialize(),
                error: err => {
                    console.log(err)
                    alert('An error occured')
                    $('#class-frm [name="submit"]').removeAttr('disabled')
                    $('#class-frm [name="submit"]').html('Save')
                },
                success: function(resp) {
                    alert('Údaje boli úspešne uložené');
                    location.reload()
                }
            })
        })
        $('.remove_quiz').click(function() {
            var id = $(this).attr('data-id')
            var conf = confirm('Ste si istý/á že chcete vymazať tieto údaje?.');
            if (conf == true) {
                $.ajax({
                    url: '../scripts/del_quiz.php?id=' + id,
                    error: err => console.log(err),
                    success: function(resp) {
                        location.reload()
                    }
                })
            }
        })
    });
    </script>
    <script type="text/javascript"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>