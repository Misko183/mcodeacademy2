<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');
include('../scripts/del_teacher.php');

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:../login.php');
 };

?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>História kvízov | MCodeAcademy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'template/sidebar.php' ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'template/nav.php' ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 alert alert-primary">História kvízov</div>
                        <br>
                        <div class="col-md-4 offset-md-4 mb-4">
                            <select class="form-control select2"
                                onchange="location.replace('history.php?quiz_id='+this.value)">
                                <option value="all"
                                    <?php echo isset($_GET['quiz_id']) && $_GET['quiz_id'] == 'all' ? 'selected' : '' ?>>
                                    All</option>
                                <?php 
				$where =''; 
				if($_SESSION['user_type'] == "admin"){
					
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
                                <table class="table" id="table">
                                    <thead
                                        style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
                                        <tr>
                                            <th>#</th>
                                            <th>Meno študenta</th>
                                            <th>Kvíz</th>
                                            <th>Skóre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
					$where = '';
					if($_SESSION['user_type'] == "admin"){
						
					}
					if(isset($_GET['quiz_id']) && $_GET['quiz_id'] != 'all'){
						if(empty($where)){
						$where = ' where q.id = '.$_GET['quiz_id'].' ';

						}else{
						$where = ' and q.id = '.$_GET['quiz_id'].' ';

						}
					}
					$qry = $conn->query("SELECT h.*,u.full_name as student,q.quiz_name from history h inner join users u on h.user_id = u.id inner join quiz_list q on h.quiz_id = q.id ".$where." order by u.name asc ");
					$i = 1;
					if($qry->num_rows > 0){
						while($row= $qry->fetch_assoc()){
							
						?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo ucwords($row['student']) ?></td>
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
            <?php include 'template/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>

    <script>
    $(document).ready(function() {
        $('#table').DataTable();
        $('.select2').select2({})
        $('#new_faculty').click(function() {
            $('#msg').html('')
            $('#manage_faculty .modal-title').html('Add New Faculty')
            $('#manage_faculty #faculty-frm').get(0).reset()
            $('#manage_faculty').modal('show')
        })
        $('.edit_faculty').click(function() {
            var id = $(this).attr('data-id')
            $.ajax({
                url: './get_faculty.php?id=' + id,
                error: err => console.log(err),
                success: function(resp) {
                    if (typeof resp != undefined) {
                        resp = JSON.parse(resp)
                        $('[name="id"]').val(resp.id)
                        $('[name="uid"]').val(resp.uid)
                        $('[name="name"]').val(resp.name)
                        $('[name="subject"]').val(resp.subject)
                        $('[name="username"]').val(resp.username)
                        $('[name="password"]').val(resp.password)
                        $('#manage_faculty .modal-title').html('Edit Faculty')
                        $('#manage_faculty').modal('show')

                    }
                }
            })

        })
        $('.remove_faculty').click(function() {
            var id = $(this).attr('data-id')
            var conf = confirm('Are you sure to delete this data.');
            if (conf == true) {
                $.ajax({
                    url: './delete_faculty.php?id=' + id,
                    error: err => console.log(err),
                    success: function(resp) {
                        if (resp == true)
                            location.reload()
                    }
                })
            }
        })
        $('#faculty-frm').submit(function(e) {
            e.preventDefault();
            $('#faculty-frm [name="submit"]').attr('disabled', true)
            $('#faculty-frm [name="submit"]').html('Ukladá sa...')
            $('#msg').html('')

            $.ajax({
                url: './save_faculty.php',
                method: 'POST',
                data: $(this).serialize(),
                error: err => {
                    console.log(err)
                    alert('An error occured')
                    $('#faculty-frm [name="submit"]').removeAttr('disabled')
                    $('#faculty-frm [name="submit"]').html('Save')
                },
                success: function(resp) {
                    if (typeof resp != undefined) {
                        resp = JSON.parse(resp)
                        if (resp.status == 1) {
                            alert('Data successfully saved');
                            location.reload()
                        } else {
                            $('#msg').html('<div class="alert alert-danger">' + resp.msg +
                                '</div>')

                        }
                    }
                }
            })
        })
    })
    </script>
</body>

</html>