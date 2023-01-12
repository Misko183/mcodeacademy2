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
    <title>Študenti | MCodeAcademy</title>
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
                        <h3 class="text-dark mb-0">Učitelia</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
                    <button 
                        class="btn btn-primary d-flex mx-auto" 
                        type="button" 
                        style="box-shadow: 4px 3px 7px 2px rgb(106,106,106);margin-bottom: 21px;" 
                        data-bs-target="#add_student" 
                        data-bs-toggle="modal">
                        <i class="fas fa-plus-square" style="font-size: 24px;margin-right: 10px;"></i>
                        Pridať novú/ého učiteľku/a
                    </button>
                    <div class="row">
                        <div class="col-lg-6 mb-4" style="width: 60%;margin: auto;">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead style="border-style: solid;border-bottom-width: 5px;border-bottom-color: rgb(69,69,69);">
                                        <tr>
                                            <th>ID</th>
                                            <th>Trieda</th>
                                            <th>Akcia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
					                        $qry = $conn->query("SELECT * FROM users where user_type = 'teacher'");
                                            if($qry || $qry ->num_rows > 0){
                                            while($row= $qry->fetch_assoc()){
						                ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php if($row['user_type'] == 'teacher'){echo $row['full_name'];} ?></td>
                                            <td>
                                                <a 
                                                    data-id="<?php echo $row['id']?>" 
                                                    href="../scripts/del_teacher.php?id=<?php echo $row['id']?>" 
                                                    class="btn btn-primary" 
                                                    type="button" 
                                                    style="margin-right: 10px;background: var(--bs-danger);">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                                <button 
                                                    class="btn btn-primary" 
                                                    type="button"
                                                    data-id="<?php echo $row['id']?>" 
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
                            <h4 class="modal-title">Pridať novú/ého učiteľku/a</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="../scripts/save_teacher.php">
                            <div class="modal-body d-xxl-flex flex-column justify-content-xxl-center inner-modal">
                                <label class="form-label">Celé meno</label>
                                <input type="text" style="margin-bottom: 10px;" name="full_name">
                                <label class="form-label">Nickname</label>
                                <input type="text" style="margin-bottom: 10px;" name="nickname">
                                <label class="form-label">email</label>
                                <input type="email" style="margin-bottom: 10px;" name="email">
                                <label class="form-label">Heslo</label>
                                <input type="password" style="margin-bottom: 10px;" name="pass">
                                    <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" name="submit">Save</button>
                                    </div>
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
</body>

</html>