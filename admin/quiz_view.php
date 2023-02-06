<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');
// include('../scripts/del_class.php');

$admin_id = $_SESSION['admin_id'];

$ids = isset($_GET["id"]) ? $_GET["id"] : "";

if(!isset($admin_id)){
    header('location:../login.php');
 };

 $qry = $conn->query("SELECT * FROM quiz_list where id = ".$_GET['id'])->fetch_array();

    // include '../scripts/save_question.php';
    include '../scripts/del_question.php';
    include '../scripts/del_question_student.php';
    // include '../scripts/quiz_student.php';

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Predmety | MCodeAcademy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'template/sidebar.php' ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'template/nav.php' ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0"><?php echo $qry['quiz_name'] ?></h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
                    <div class="d-xl-flex mx-auto align-items-xl-center" style="width: 50%;">
                        <button 
                            class="btn btn-primary d-flex mx-auto" 
                            type="button" 
                            style="box-shadow: 4px 3px 7px 2px rgb(106,106,106);margin-bottom: 21px;" 
                            data-bs-target="#add_question" 
                            data-bs-toggle="modal">
                            <i class="fas fa-plus-square" style="font-size: 24px;margin-right: 10px;"></i>
                            Pridať novú otázku
                        </button>
                        <button 
                            class="btn btn-primary d-flex mx-auto" 
                            type="button" 
                            style="box-shadow: 4px 3px 7px 2px rgb(106,106,106);margin-bottom: 21px;" 
                            data-bs-target="#add_student" 
                            data-bs-toggle="modal">
                            <i class="fas fa-plus-square" style="font-size: 24px;margin-right: 10px;"></i>
                            Pridať študenta/tku
                        </button>
                    </div>
                    <div class="row">
    <div class="col-lg-6 mb-4" style="width: 50%;margin-top: 0;margin-right: auto;margin-bottom: auto;margin-left: auto;">
        <div class="table-responsive">
        <h5>Otázky</h5>
            <table class="table">
                
                <thead style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
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
                            <button 
                                data-toggle="modal" 
                                data-target="#modal-<?php echo $row['id'] ?>"
                                class="btn btn-primary" 
                                type="button" 
                                style="margin-right: 10px;background: var(--bs-info);">
                                <i class="fas fa-cog"></i>
                            </button>
                            <a 
                                href="../scripts/del_question.php?id=<?php echo $row['id']?>" 
                                class="btn btn-primary" 
                                type="button" 
                                style="background: var(--bs-danger);">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-6 mb-4" style="width: 50%;margin-top: 0;margin-right: auto;margin-bottom: auto;margin-left: auto;">
        <div class="table-responsive">
        <h5>Študenti</h5>
            <table class="table">
                <thead style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
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
                            <a
                                href="../scripts/del_question_student.php?id=<?php echo $row['id']?>"
                                data-id="<?php echo $row['id']?>" 
                                class="btn btn-primary" 
                                type="button" 
                                style="background: var(--bs-danger);">
                                <i class="far fa-trash-alt"></i>
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
            <div id="add_student" class="modal fade" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Pridať študenta</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="../scripts/quiz_student.php">
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
                                            <?php echo $rows['full_name']; echo $rows['class']; echo $rows['user_id'];?></option>
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
							<div class ="modal-body">
								<div id="msg"></div>
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
									<label><input type="radio" name="is_right[0]" class="is_right" value="1" required=""> <small >Správna dpoveď na otázku</small></label>
									</span>
									<br>
									<textarea rows="2" name ="question_opt[1]" required="" class="form-control" ></textarea>
									<label><input type="radio" name="is_right[1]" class="is_right " value="1" style="visibility: hidden;"> <small>Nesprávna dpoveď na otázku</small></label>
									<br>
									<textarea rows="2" name ="question_opt[2]" required="" class="form-control" ></textarea>
									<label><input type="radio" name="is_right[2]" class="is_right " value="1" style="visibility: hidden;"> <small>Nesprávna dpoveď na otázku</small></label>
									<br>
									<textarea rows="2" name ="question_opt[3]" required="" class="form-control" ></textarea>
									<label><input type="radio" name="is_right[3]" class="is_right " value="1" style="visibility: hidden;"> <small >Nesprávna dpoveď na otázku</small></label>
								</div>
								
							</div>
							<div class="modal-footer">
								<button  class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Uložiť</button>
							</div>
						</form>
                    </div>
                </div>
            </div>
            <?php include 'template/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script>
            $(document).ready(function(){
		$('#new_question').click(function(){
			$('#msg').html('')
			$('#manage_question .modal-title').html('Add New Question')
			$('#manage_question #question-frm').get(0).reset()
			$('#manage_question').modal('show')
		})
		$('.is_right').each(function(){
			$(this).click(function(){
				$('.is_right').prop('checked',false);
				$(this).prop('checked',true);
			})
		})
		$('#question-frm').submit(function(e){
			e.preventDefault();
			$('#question-frm [name="submit"]').attr('disabled',true)
			$('#question-frm [name="submit"]').html('Ukladá sa...')
			$('#msg').html('')

			$.ajax({
				url:'../scripts/save_question.php',
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
					alert('An error occured')
					$('#quiz-frm [name="submit"]').removeAttr('disabled')
					$('#quiz-frm [name="submit"]').html('Save')
				},
				success:function(resp){
						if(resp == 1){
							alert('Data successfully saved');
							location.reload()
						}
				}
			})
		})
	})
        </script>
</body>

</html>