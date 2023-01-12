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
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <title>Document</title>

    <!-- link css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <!-- css styling  -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sidebars.css">
    <!-- javascripts  -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="assets/js/sidebars.js"></script>

    <!-- codemirror -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/lib/codemirror.css">
    <script type="text/javascript" src="assets/plugins/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="assets/js/default.js"></script>
    <link rel="stylesheet" href="assets/plugins/codemirror/theme/mbo.css">
    <script src="assets/plugins/codemirror/addon/display/"></script>

</head>

<body>
    <?php include 'template/nav.php'; ?>

    <div class="con">
        <div class="box">
            <span></span>
            <div class="content">
                <h2>HTML</h2>
                <p>je štandartný
                    značkovací jazyk pre webové stránky. Pomocou HTML si môžete vytvoriť svoj vlastný web.
                    HTML sa dá ľahko naučiť - bude sa vám to pačiť!</p>
                <a href="html/index.php">Skúsiť HTML</a>
                <a href="#">HTML Referencie</a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>CSS</h2>
                <p>CSS je jazyk,
                    ktorý používaame na úpvau štýlu HTML dokumentu HTML. Tento tutoriál vás naučí CSS
                    od základných až po pokročilé.</p>
                <a href="#">Skúsiť CSS</a>
                <a href="#">CSS Referencie</a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>PHP</h2>
                <p>PHP je
                    serverový skriptovací jazyk a výkonný nástroj na vytváranie dynamických a interaktívnych
                    webových stránok. PHP je široko používaný jazyk.</p>
                <a href="#">Súsiť PHP</a>
                <a href="#">PHP Referencie</a>
            </div>
        </div>
    </div>


</body>

</html>