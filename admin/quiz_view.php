<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');
include('../scripts/del_class.php');

$admin_id = $_SESSION['admin_id'];

$ids = isset($_GET["id"]) ? $_GET["id"] : "";

if(!isset($admin_id)){
    header('location:../login.php');
 };

?>



<!DOCTYPE html>
<html lang="sk">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCodeAcademy • Admin Panel | home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/416491/timeline.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="template/footer/footer.css">


    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.1/raphael.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/js/sb-admin-2.js"></script>
    <script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/script.js"></script>

    <?php 
	$qry = $conn->query("SELECT * FROM quiz_list where id = ".$_GET['id'])->fetch_array();

    include '../scripts/save_question.php';

	?>
</head>

<body>

    <div id="wrapper">

        <!-- nav -->
        <?php include 'template/nav/nav.php' ?>

        <div>
            <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <h2 style="width: 343px;"><?php echo $qry['quiz_name'] ?></h2>
                        <button data-toggle="modal" data-target="#addstudent" class="btn btn-primary" type="button"><i
                                class="fas fa-plus" style="padding-right: 10px;"></i>Pridať študenta/tku</button>
                        <button data-toggle="modal" data-target="#modal-1" class="btn btn-primary" type="button"><i
                                class="fas fa-plus" style="padding-right: 10px;"></i>Pridať novú otázku</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
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
                                        <button data-toggle="modal" data-target="#modal-<?php echo $row['id'] ?>"
                                            class="btn btn-primary" type="button"><i class="fas fa-edit"
                                                style="padding-right: 10px;"></i>Upraviť</button>
                                        <button class="btn btn-danger" type="button"><i class="fas fa-trash"
                                                style="padding-right: 10px;"></i>Vymazať</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
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
                                        <a href="../scripts/del_class.php?id=<?php echo $row['id']?>" type="button"
                                            class="btn btn-danger" data-id="<?php echo $row['id']?>"><i
                                                class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></a>
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

        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pridať novú otázku</h4>
                    </div>
                    <form method="post" action="">
                        <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                        <div class="form-group">
									<label>Otázka</label>
									<input type="hidden" name="qid" value="<?php echo $_GET['id'] ?>" />
									<input type="hidden" name="id" />
									<textarea rows='3' name="question" required="required" class="form-control" ></textarea>
								</div>
									<label>Možnosti:</label>

								<div class="form-group">
									<textarea rows="2" name ="question_opt[0]" required="" class="form-control" ></textarea>
									<span>
									<label><input type="radio" name="is_right[0]" class="is_right" value="1"> <small>Odpoveď na otázku</small></label>
									</span>
									<br>
									<textarea rows="2" name ="question_opt[1]" required="" class="form-control" ></textarea>
									<label><input type="radio" name="is_right[1]" class="is_right" value="1"> <small>Odpoveď na otázku</small></label>
									<br>
									<textarea rows="2" name ="question_opt[2]" required="" class="form-control" ></textarea>
									<label><input type="radio" name="is_right[2]" class="is_right" value="1"> <small>Odpoveď na otázku</small></label>
									<br>
									<textarea rows="2" name ="question_opt[3]" required="" class="form-control" ></textarea>
									<label><input type="radio" name="is_right[3]" class="is_right" value="1"> <small>Odpoveď na otázku</small></label>
								</div>
                            <button class="btn btn-primary" type="submit" name="submit">Save</button>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" role="dialog" tabindex="-1" id="addstudent">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pridať študenta/tku</h4>
                    </div>
                    <form method="post" action="../scripts/quiz_student.php">
                        <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                            <label class="form-label">Študenti</label>
                            <input type="hidden" name="quiz_id" value="<?php  echo $ids ?>">
                            <select style="margin-bottom: 10px;" name="student">
                                <option value="" selected="" disabled="">Vyberte tu</option>
                                <optgroup label="Zoznam študentov">
                                    <?php 
                                        $sql = "SELECT * FROM students left join users on students.user_id = users.id";
                                        $res = mysqli_query($conn, $sql);

                                        while($rows = mysqli_fetch_array($res))
                                        { ?>
                                    <option value="<?php echo $rows['id'];?>">
                                        <?php echo $rows['full_name']?></option>
                                    <?php
                                        }
                                    ?>
                                </optgroup>
                            </select>
                            <button class="btn btn-primary" type="submit" name="submit">Save</button>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->

        <?php include 'template/footer/footer.php' ?>

</body>

</html>