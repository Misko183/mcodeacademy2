<?php

//initially
$comment = null;

//if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {
	$comment = $_POST['preview-form-comment'];
}

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <title>Document</title>

    <!-- link css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <!-- css styling  -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/sidebars.css">
    <!-- javascripts  -->
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="../../assets/js/header.js"></script>
    <script src="../assets/js/sidebars.js"></script>

    <!-- codemirror -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/codemirror/lib/codemirror.css">
    <script type="text/javascript" src="../assets/plugins/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="../assets/js/default.js"></script>
    <link rel="stylesheet" href="../assets/plugins/codemirror/theme/mbo.css">
    <script src="../assets/plugins/codemirror/addon/display/"></script>

    <style>
    * {
        outline: 1px solid red;
    }
    </style>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">

</head>

<body>
    <header>
        <?php include 'template/nav.php'; ?>
    </header>

    <nav class="navbar navbar-light navbar-expand-md sticky-top bg-primary py-3"
        style="box-shadow: 2px 6px 11px rgb(67,67,67);">
        <div>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper">
        <nav class="navbar navbar-dark bg-dark bg-gradient align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="width: 170px;">
            <div class="container-fluid d-flex flex-column p-0">
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <h5 style="padding-left: 10px;margin-top: 5px;">HTML základ</h5>
                        <hr><a class="nav-link active" href="index.html"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"><span>HTMl
                                Domov</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"><span>HTML
                                Úvod</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="table.html"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"><span>HTML
                                Program</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"><span>HTML
                                Základ</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"><span>HTML
                                Elementy</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid" style="margin-top: 20px;">

                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>



</body>

</html>