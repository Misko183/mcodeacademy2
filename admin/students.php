<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');
include('../scripts/del_student.php');

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:../login.php');
 };

?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Študenti | MCodeAcademy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'template/sidebar.php' ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'template/nav.php' ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Študenti</h3>
                        <a data-bs-target="#add_student" data-bs-toggle="modal" class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-plus-square" style="font-size: 18px;margin-right: 10px;"></i>&nbsp;Pridať novú/ého študentku/ta</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4" style="width: 60%;margin: auto;">
                            <div class="table-responsive">
                                <table class="table" id="table">
                                    <thead
                                        style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
                                        <tr>
                                            <th>ID</th>
                                            <th>Meno</th>
                                            <th>Trieda</th>
                                            <th>Akcia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
					                        $qry = $conn->query("SELECT students.*,users.full_name,class.class FROM `students` LEFT JOIN `users` ON students.user_id = users.id LEFT JOIN `class` on students.class_id = class.id");
                                            if($qry || $qry ->num_rows > 0){
                                            while($row= $qry->fetch_assoc()){
						                ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['full_name']; ?></td>
                                            <td><?php echo $row['class']; ?></td>
                                            <td>
                                                <button class="btn btn-primary remove_student" type="button"
                                                    data-id="<?php echo $row['user_id']; ?>"
                                                    style="background: var(--bs-danger);">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                                <button class="btn btn-primary edit_student" type="button"
                                                    data-id="<?php echo $row['id']; ?>"
                                                    style="background: var(--bs-warning);">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
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
                            <h4 class="modal-title">Pridať novú/ého študentku/ta</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="../scripts/save_student.php">
                            <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                                <label class="form-label">Celé meno</label>
                                <input type="text" style="margin-bottom: 10px;" name="full_name">
                                <label class="form-label">Email</label>
                                <input type="text" style="margin-bottom: 10px;" name="email">
                                <label for="class" class="form-label">Trieda</label>
                                <select style="margin-bottom: 10px;" name="class">
                                    <option value="" selected="" disabled="">Vyberte tu</option>
                                    <optgroup label="Zoznam tried">
                                        <?php 
                                            $sql = "SELECT * FROM class";
                                            $res = mysqli_query($conn, $sql);

                                            while($rows = mysqli_fetch_array($res))
                                            { 
                                        ?>
                                        <option value="<?php echo $rows['id'];?>">
                                            <?php 
                                            echo $rows['class'];
                                        ?></option>
                                        <?php
                                            }
                                        ?>
                                    </optgroup>
                                </select>
                                <label class="form-label">nickname</label>
                                <input type="text" style="margin-bottom: 10px;" name="nickname">
                                <label class="form-label">heslo</label>
                                <input type="password" style="margin-bottom: 10px;" name="password">
                                <button class="btn btn-primary" type="submit" name="submit">Save</button>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="rename_student" class="modal fade" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Upraviť študentku/ta</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="../scripts/update_student.php" id="class-frm">
                            <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                                <label class="form-label">Celé meno</label>
                                <input type="text" style="margin-bottom: 10px;" name="full_name">
                                <label class="form-label">Email</label>
                                <input type="text" style="margin-bottom: 10px;" name="email">
                                <label for="class" class="form-label">Trieda</label>
                                <select style="margin-bottom: 10px;" name="class">
                                    <option value="" selected="" disabled="">Vyberte tu</option>
                                    <optgroup label="Zoznam tried">
                                        <?php 
                                            $sql = "SELECT * FROM class";
                                            $res = mysqli_query($conn, $sql);

                                            while($rows = mysqli_fetch_array($res))
                                            { 
                                        ?>
                                        <option value="<?php echo $rows['id'];?>">
                                            <?php 
                                            echo $rows['class'];
                                        ?></option>
                                        <?php
                                            }
                                        ?>
                                    </optgroup>
                                </select>
                                <label class="form-label">nickname</label>
                                <label class="form-label"></label>
                                <input type="text" style="margin-bottom: 10px;" name="nickname">
                                <label class="form-label">heslo</label>
                                <input type="password" style="margin-bottom: 10px;" name="password">
                                <button class="btn btn-primary" type="submit" name="submit">Aktualizovať</button>
                                <input type="hidden" name="id">
                                <input type="hidden" name="user_id">
                                <input type="hidden" name="class_id">       
                            </div>
                        </form>
                        <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                    </div>
                </div>
            </div>
            <?php include 'template/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
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
        $('.edit_student').click(function() {
            var id = $(this).attr('data-id')
            $.ajax({
            url: '../scripts/get_student.php?id='+id,
            error: err => console.log(err),
            success: function(resp) {
                if (typeof resp != undefined) {
                    resp = JSON.parse(resp)
                    $('[name="id"]').val(resp.id)
                    $('[name="user_id"]').val(resp.user_id)
                    $('[name="class_id"]').val(resp.class_id)
                    $('[name="full_name"]').val(resp.full_name)
                    $('[name="email"]').val(resp.email)
                    $('[name="class"]').val(resp.class)
                    $('[name="nickname"]').val(resp.name)
                    $('[name="password"]').val(resp.password)
                    $('#rename_student').modal('show')
                 }
                }
            })
        })
        $('#class-frm').submit(function(e){
			e.preventDefault();
			$('#class-frm [name="submit"]').attr('disabled',true)
			$('#class-frm [name="submit"]').html('Ukladá sa...')
			$.ajax({
				url:'../scripts/update_student.php?id=',
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
					alert('An error occured')
					$('#class-frm [name="submit"]').removeAttr('disabled')
					$('#class-frm [name="submit"]').html('Save')
				},
				success:function(resp){
					alert('Údaje boli úspešne uložené');
					location.reload()					
				}
			})
		})
        $('.remove_student').click(function(){
			var id = $(this).attr('data-id')
			var conf = confirm('Ste si istý/á že chcete vymazať tieto údaje?.');
			if(conf == true){
				$.ajax({
				url:'../scripts/del_student.php?id='+id,
				error:err=>console.log(err),
				success:function(resp){
				    location.reload()
                }
			})
			}
		})
    });
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>