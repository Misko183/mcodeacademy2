<?php
    include 'scripts/config.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domov | Mcode Academy</title>

    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- link css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <!-- css styling  -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">

    <!-- nav css -->
    <link rel="stylesheet" href="template/nav/nav.css">

    <!-- javascripts  -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/header.js"></script>

</head>

<body style="background: #d9eee1;">


    <!-- navigation -->

    <?php include 'template/nav/nav.php'; ?>

    <!-- Header -->

    <div class="jumbotron cd-intro">
        <div class="container cd-intro-content mask">
            <div class="hr animated fadeIn">
                <img src="assets/img/logo.png" alt="Maple Leaf logo">
                <hr>
            </div>

            <h1 data-content="Mcode Academy"><span>Mcode Academy</span></h1>
            <p>Domov pre lepšie programovanie</p>

            <div class="action-wrapper">
                <p>
                    <a href="website-ul/materials/index.php" class="cd-btn main-action" role="button">Začať sa učiť!</a>
                    <a href="#" class="cd-btn" id="btn-purchase" target="_blank" role="button">Otestovať sa</a>
                </p>
            </div>
        </div>
    </div>

    <!-- content -->

    <div class="container" style="margin-top: 44px;">
        <div class="row">
            <div
                class="col-md-12 d-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-center">
                <h1 style="font-weight: bold;">Nauč sa programovať lepšie</h1>
                <p style="font-size: 27px; color: #212529">presne podľa plánov školy</p>
            </div>
        </div>
        <div class="row d-flex d-xxl-flex flex-row justify-content-xxl-center align-items-xxl-center">
            <div
                class="col-md-12 d-flex d-xxl-flex flex-row justify-content-xl-center align-items-xl-center align-items-xxl-center">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-text" placeholder="Hľadať materiál, napr.: HTML"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-lg" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards -->

    <div class="con">
        <div class="box">
            <span></span>
            <div class="content">
                <h2>HTML</h2>
                <p>je štandartný
                    značkovací jazyk pre webové stránky. Pomocou HTML si môžete vytvoriť svoj vlastný web.
                    HTML sa dá ľahko naučiť - bude sa vám to pačiť!</p>
                <a href="website-ul/materials/index.php">Skúsiť HTML</a>
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

    <!-- parralax -->

    <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center"
        data-bss-parallax-bg="true"
        style="height: 573px;background: url(&quot;assets/img/parralax.png&quot;) center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-weight: bold;text-align: center;color: rgb(255,255,255);font-size: 48px;">
                        <strong>Cvičenia a kvízy</strong>
                    </h1>
                    <p style="text-align: center;color: rgb(255,255,255);font-size: 19px;">Otestuj svoj skill</p>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-md-6 d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center align-items-xxl-center">
                    <a href="">
                        <button class="btn btn-primary d-sm-flex justify-content-sm-center align-items-sm-center"
                            type="button"
                            style="height: 180px;width: 320px;background: rgba(25,135,84,0.9);margin: 5px;font-size: 38px;font-weight: bold;color: white;">Cvičenia</button></a>
                </div>
                <div
                    class="col-md-6 d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center align-items-xxl-center">
                    <a href="">
                        <button class="btn btn-primary" type="button"
                            style="height: 180px;width: 320px;background: rgba(13,202,240,0.9);margin: 5px;font-size: 38px;font-weight: bold;color: var(--bs-gray-900);">Kvízy</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php include 'template/footer/footer.php' ?>

</body>
</html>