<?php

//initially
$comment = null;

//if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {
	$comment = $_POST['preview-form-comment'];
}

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

</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <span
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
                        style="background: #ffffff00;">
                        <img src="../../assets/img/logo.png" width="40" height="40">
                    </span>
                    <span style="font-weight: bold;">Mcode Academy</span>
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-6">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-6">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link active" href="#"
                                style="font-weight: bold;">Materialy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="font-weight: bold;">Cvičenia</a></li>
                    </ul>
                </div>
                <div class="d-none d-md-block">
                    <a class="btn btn-primary" role="button" data-bss-hover-animate="pulse" href="../login.php" style="
                                        background: linear-gradient(0deg, #5b77e7 0%, #49b5d2 49%, #26e8a8 99%);
                                        color: rgb(254,254,254);
                                        font-weight: bold;
                                        border-width: 0px;
                                        border-radius: 11px;
                                        padding-right: 18px;
                                        padding-left: 18px;
                                        text-align: center;">
                        Login
                    </a>
                </div>
            </div>
        </nav>
    </header>


    <div style="margin-bottom: 46px;">
        <nav class="navbar navbar-light navbar-expand-md position-fixed" style="
                padding: 0px;
                width: 100%;
                background: #003e7e;
                color: var(--bs-gray-300);
                box-shadow: 0px 5px 9px 2px var(--bs-gray-900);
                z-index:10;">
            <div class="container-fluid">
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"
                    style="border-style: none;"><span class="visually-hidden"
                        style="border-style: none;color: var(--bs-gray-400);">Toggle navigation</span><span
                        class="navbar-toggler-icon" style="/*color: var(--bs-gray-400);*/"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="background: #003e7e;">
                    <ul class="navbar-nav">
                        <li class="nav-item d-md-flex align-items-md-center"><a class="nav-link active" href="#"><i
                                    class="fas fa-home" style="color: var(--bs-gray-300);font-size: 20px;"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"
                                style="color: var(--bs-gray-300);font-size: 20px;"><strong>HTML</strong></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"
                                style="font-size: 20px;color: var(--bs-gray-300);"><strong>CSS</strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-6"
            style="color:white; background-color:rgb(70, 70, 70);width: 20%;max-width:223px;padding-right: 0;padding-left:0;height: 100vh;position: fixed;overflow-y: scroll;">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid" style="padding-right: 0;">
                    <div class="collapse navbar-collapse " id="navcol-1">
                        <ul class="navbar-nav d-flex flex-column">
                        <li class="nav-item"><h5>HTML základ</h5></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link now" href="#"><span>HTML Domov</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="uvod.php"><span>HTML Úvod</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="program.php"><span>HTML Program</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="zaklad.php"><span>HTML Základ</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="elementy.php"><span>HTML Elementy</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="atributy.php"><span>HTML Atribúty</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="nadpisy.php"><span>HTML Nádpisy</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="paragrafy.php"><span>HTML Paragrafy</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="stylovanie.php"><span>HTML Štýlovanie</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="formatovanie.php"><span>HTML Formatovanie</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="koment.php"><span>HTML Zakomentovávanie</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="css.php"><span>HTML CSS</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="linky.php"><span>HTML Linky</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="obrazky.php"><span>HTML Obrázky</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="videa.php"><span>HTML Videa</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="ikony.php"><span>HTML Ikony</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="tabulky.php"><span>HTML Tabuľky</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="listy.php"><span>HTML Listy</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="triedy.php"><span>HTML Triedy</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="id.php"><span>HTML Id</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="charset.php"><span>HTML Charset</span></a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" class="nav-link" href="symboly.php"><span>HTML Symboly</span></a></li>
                            <li><hr></li>
                            <li><h5>HTML Referencie</h5></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Tag list</a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;" href="" class="nav-link">HTML Atribúty</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-6" style="width: 80%;margin-left: 15%;z-index:0;">
            <div class="content">
                <div class="title">
                    
                <div class="first">
                    
                </div>
                <div class="second">
                    
                </div>
                <div class="third">
                    
                </div>
                <div class="fourth">
                    
                </div>

            </div>
        </div>
    </div>

</body>

</html>