<?php

session_start();

header("Content-Type: text/html;charset=UTF-8");

include('../scripts/configa.php');
include('../scripts/del_class.php');

$admin_id = $_SESSION['admin_id'];

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


</head>

<body>

    <div id="wrapper">

        <!-- nav -->
        <?php include 'template/nav/nav.php' ?>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 style="width: 343px;">Zoznam predmetov</h2>
                        <button data-toggle="modal" data-target="#modal-1" class="btn btn-primary" type="button"><i
                                class="fas fa-plus" style="padding-right: 10px;"></i>Pridať nový predmet</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Predmet</th>
                                    <th>Trieda</th>
                                    <th>Vyučujúci</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
					$qry = $conn->query("SELECT * FROM subject LEFT JOIN class ON subject.class_id = class.id LEFT JOIN users ON subject.teacher_id = users.id;");
                    $i = 1;
					if($qry || $qry ->num_rows > 0){
						while($row = $qry->fetch_assoc()){
						?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $row['subject_name'] ?></td>
                                    <td><?php echo $row['class'] ?></td>
                                    <td><?php if($row['user_type'] == 'teacher'){ echo $row['full_name']; }?></td>
                                    <td>
                                        <a href="../scripts/del_class.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger"
                                            data-id="<?php echo $row['id']?>"><i
                                                class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></a>
                                        <button type="button" class="btn btn-warning"
                                            data-id="<?php echo $row['id']?>"><i
                                                class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
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
                        <h4 class="modal-title">Pridať nový predmet</h4>
                    </div>
                    <form method="post" action="../scripts/save_subject.php">
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
                                </select >
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
                                </select >
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