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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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
    <!-- footer -->
    <link rel="stylesheet" href="template/footer/footer.css">

    <!-- javascripts  -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assets/js/header2.js"></script>


    <link rel="stylesheet" href="./assets/css/header2.css">
    <script src="assets/js/header2.js"></script>
    <link rel="stylesheet" href="assets/css/particles.css">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="./assets/css/cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>


    <!-- navigation -->

    <?php include 'template/nav/nav.php'; ?>

    <!-- Header -->
    <!-- <div class="jumbotron cd-intro">

        <div class="container cd-intro-content mask">

            <div class="hr animated fadeIn">
                <img src="assets/img/logo.png" alt="Maple Leaf logo">
                <hr>
            </div>

            <h1 data-content="Mcode Academy"><span>Mcode Academy</span></h1>
            <p>Domov pre lepšie programovanie</p>

            <div class="action-wrapper">
                <p>
                    <a href="#materials" class="cd-btn main-action" role="button">Začať sa učiť!</a>
                    <a href="#cvicenia" class="cd-btn" id="btn-purchase" target="_blank" role="button">Otestovať sa</a>
                </p>
            </div>
        </div>
    </div> -->

    <!-- header -->

    <section class="header2">
        <h1 class="h1">MCODE ACADEMY</h1>
        <h3 class="h3 span loader">
            <span class="m span">D</span><span class="m span">O</span><span class="m span">M</span><span
                class="m span">O</span><span class="m span">V</span><span class="m span">&nbsp;</span><span
                class="m span">P</span><span class="m span">R</span><span class="m span">E</span><span
                class="m span">&nbsp;</span><span class="m span">L</span><span class="m span">E</span><span
                class="m span">P</span><span class="m span">Š</span><span class="m span">I</span><span
                class="m span">E</span><span class="m span">&nbsp;</span><span class="m span">P</span><span
                class="m span">R</span><span class="m span">O</span><span class="m span">G</span><span
                class="m span">R</span><span class="m span">A</span><span class="m span">M</span><span
                class="m span">O</span><span class="m span">V</span><span class="m span">A</span><span
                class="m span">N</span><span class="m span">I</span><span class="m span">E</span>
        </h3>
        <p style="z-index:999;margin-top:25px">
            <a href="#materials" role="button" class="animated-button1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Začať sa učiť!
            </a>
            <a href="#cvicenia" id="btn-purchase" role="button" class="animated-button2">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Otestovať sa
            </a>
        </p>
        <div id="particles-js"></div>

    </section>

    <!-- content -->

    <!-- <div class="container" style="margin-top: 100px;" id="materials">
        <div class="row">
            <div
                class="col-md-12 d-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-center">
                <h1 style="font-weight: bold;">Nauč sa programovať lepšie</h1>
                <p style="font-size: 27px; color: #212529">presne to čo preberáte v škole a veci naviac</p>
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
    </div> -->

    <!-- cards -->

    <!-- <div class="con">
        <div class="box">
            <span></span>
            <div class="content">
                <h2>HTML</h2>
                <p>je štandartný
                    značkovací jazyk pre webové stránky. Pomocou HTML si môžete vytvoriť svoj vlastný web.
                    HTML sa dá ľahko naučiť - bude sa vám to pačiť!</p>
                <a href="materials/html/index.php">Skúsiť HTML</a>
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
    </div> -->


    <div class="body">
            <div class="row" style="margin-right:50px;">
                <div
                    class="col-md-12 d-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-center">
                    <h1 style="font-weight: bold;">Nauč sa programovať lepšie</h1>
                    <p style="font-size: 27px; color: #212529">presne to čo preberáte v škole a veci naviac</p>
                </div>
            </div>
            <div class="boxik">

                <div class="crd">
                    <div class="imgBx">
                        <i class="fab fa-html5" style="font-size: 50px;"></i>
                        <h3>HTML5</h3>
                    </div>
                    <div class="text">
                        <p>je štandartný
                            značkovací jazyk pre webové stránky. Pomocou HTML si môžete vytvoriť svoj vlastný web.
                            HTML sa dá ľahko naučiť - bude sa vám to pačiť!</p>
                        <div class="column">
                            <a href="materials/html/index.php">Skúsiť HTML</a>
                            <a href="#">HTML Referencie</a>
                        </div>
                    </div>

                </div>

                <div class="crd">
                    <div class="imgBx">
                        <i class="fab fa-css3-alt" style="font-size: 50px;"></i>
                        <h3>CSS3</h3>
                    </div>
                    <div class="text">
                        <p>CSS je jazyk,
                            ktorý používaame na úpvau štýlu HTML dokumentu HTML. Tento tutoriál vás naučí CSS
                            od základných až po pokročilé.</p>
                        <div class="column">
                            <a href="#">Skúsiť CSS</a>
                            <a href="#">CSS Referencie</a>
                        </div>
                    </div>
                </div>

                <div class="crd">
                    <div class="imgBx">
                        <i class="fab fa-php" style="font-size: 50px;"></i>
                        <h3>PHP</h3>
                    </div>
                    <div class="text">
                        <p>PHP je
                            serverový skriptovací jazyk a výkonný nástroj na vytváranie dynamických a interaktívnych
                            webových stránok. PHP je široko používaný jazyk.</p>
                        <div class="column">
                            <a href="#">Súsiť PHP</a>
                            <a href="#">PHP Referencie</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- parralax -->

    <div id="cvicenia"
        class="cvicenia d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center"
        data-bss-parallax-bg="true" style="
            height: 573px;
            background: url(&quot;assets/img/parralax.png&quot;) center / cover;">
        <div class="container" style="-webkit-backdrop-filter: blur(3px);backdrop-filter: blur(3px)">
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
                    <!-- <a href="">
                        <button class="btn btn-primary d-sm-flex justify-content-sm-center align-items-sm-center"
                            type="button"
                            style="height: 180px;width: 320px;background: rgba(25,135,84,0.9);margin: 5px;font-size: 38px;font-weight: bold;color: white;">Cvičenia
                        </button>
                    </a> -->
                    <!-- <button class="btn btn-primary" type="button"
                        style="height: 180px;width: 320px;background: rgba(25,135,84,0.9);margin: 5px;font-size: 38px;font-weight: bold;color: white;">Cvičenia
                        <br>
                        <p style="font-size: 16px; color: grey;">comming soon</p> 
                    </button> -->
                    <div class="card">
                        <div class="header">
                            <div class="img-box">
                                <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M892.1 938.7H131.9c-17.8 0-35.1-3.5-51.4-10.4-15.6-6.6-29.7-16.1-41.9-28.2C26.5 888 17 873.9 10.3 858.2 3.5 841.8 0 824.5 0 806.8V217.2c0-17.8 3.5-35 10.4-51.3 6.6-15.7 16.1-29.8 28.2-41.9 12.2-12.2 26.3-21.7 42-28.3 16.2-6.9 33.5-10.4 51.3-10.4h83.4c23.6 0 42.7 19.1 42.7 42.7s-19.1 42.7-42.7 42.7h-83.4c-6.3 0-12.4 1.2-18.1 3.6-5.6 2.4-10.6 5.7-14.9 10-4.3 4.3-7.6 9.2-10 14.8-2.4 5.7-3.6 11.8-3.6 18.1v589.6c0 6.3 1.2 12.4 3.7 18.1 2.3 5.5 5.7 10.5 10 14.8 4.3 4.2 9.2 7.6 14.8 9.9 5.8 2.4 11.9 3.7 18.1 3.7h760.2c6.3 0 12.4-1.2 18.1-3.6 5.6-2.4 10.6-5.7 14.9-10 4.3-4.3 7.6-9.2 10-14.8 2.4-5.7 3.6-11.8 3.6-18.1V217.2c0-6.3-1.2-12.4-3.7-18.1-2.3-5.5-5.7-10.5-10-14.8-4.3-4.2-9.2-7.6-14.8-9.9-5.8-2.4-11.9-3.7-18.1-3.7h-83.4c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7h83.4c17.8 0 35.1 3.5 51.4 10.4 15.6 6.6 29.7 16.1 41.9 28.2 12.1 12.1 21.6 26.2 28.3 41.9 6.9 16.3 10.4 33.6 10.4 51.4v589.6c0 17.8-3.5 35-10.4 51.3-6.6 15.7-16.1 29.8-28.2 41.9-12.2 12.2-26.3 21.7-42 28.3-16.3 6.9-33.6 10.4-51.4 10.4z"
                                        fill="#3688FF" />
                                    <path
                                        d="M229.8 714.8c-6.1 0-12.3-1.3-18.1-4.1-21.3-10-30.5-35.5-20.4-56.8L467.5 67.1c10-21.3 35.5-30.5 56.8-20.4 21.3 10 30.5 35.5 20.4 56.8L268.5 690.3c-7.3 15.4-22.7 24.5-38.7 24.5zM810.7 448H640c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7h170.7c23.6 0 42.7 19.1 42.7 42.7S834.2 448 810.7 448zM810.7 704h-384c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7h384c23.6 0 42.7 19.1 42.7 42.7S834.2 704 810.7 704z"
                                        fill="#5F6379" />
                                </svg>
                            </div>
                            <h1 class="title">Cvičenia</h1>
                        </div>

                        <div class="content">
                            <p>
                                Precvič si to čo si sa naučil/a...
                            </p>

                            <a class="btn-link">Comming soon...</a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center align-items-xxl-center">
                    <!-- <a href="">
                        <button class="btn btn-primary" type="button"
                            style="height: 180px;width: 320px;background: rgba(13,202,240,0.9);margin: 5px;font-size: 38px;font-weight: bold;color: white;">Kvízy                          
                        </button>
                    </a>          -->
                    <!-- <button class="btn btn-primary" type="button"
                        style="height: 180px;width: 320px;background: rgba(13,202,240,0.9);margin: 5px;font-size: 38px;font-weight: bold;color: white;">Kvízy
                        <br>
                        <p style="font-size: 16px; color: grey;">comming soon</p>
                    </button> -->
                    <div class="card">
                        <div class="header">
                            <div class="img-box">
                                <svg height="50px" width="50px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 392.598 392.598" xml:space="preserve">
                                    <path style="fill:#FFFFFF;" d="M281.598,370.747c2.263-44.283,18.23-87.919,45.576-124.121c18.554-24.501,28.38-53.721,28.38-84.558
	c0-77.382-62.966-140.348-140.348-140.348S74.858,84.687,74.858,162.069v33.551c0,2.069-0.646,4.073-1.681,5.883L39.69,254.255
	h24.242c6.012,0,10.925,4.848,10.925,10.925v25.083c0,6.659,5.43,12.154,12.154,12.154h26.246c6.012,0,10.925,4.848,10.925,10.925
	v57.406H281.598L281.598,370.747z" />
                                    <path style="fill:#FFC10D;" d="M145.969,348.962V280.63H96.644v-48.162H79.319l17.325-27.345v-43.055
	c0-65.358,53.139-118.562,118.562-118.562s118.497,53.204,118.497,118.626c0,26.053-8.275,50.683-23.984,71.37
	c-25.729,33.939-42.279,74.02-47.968,115.459H145.969L145.969,348.962z" />
                                    <path style="fill:#194F82;" d="M215.206,0C125.8,0,53.072,72.727,53.072,162.133v30.448l-34.909,55.079
	c-3.62,5.689-3.879,12.994-0.646,18.877c3.232,5.947,9.503,9.568,16.226,9.568h19.265v14.222c0,18.683,15.192,33.939,33.939,33.939
	h15.386v57.406c0,6.012,4.848,10.925,10.925,10.925h178.877c6.012,0,10.925-4.848,10.925-10.925
	c0-43.184,14.739-86.497,41.503-121.859c21.398-28.251,32.776-62.125,32.776-97.681C377.339,72.727,304.547,0,215.206,0z
	 M327.173,246.626c-27.345,36.137-43.378,79.838-45.576,124.121H124.183v-57.406c0-6.012-4.848-10.925-10.925-10.925H87.012
	c-6.659,0-12.154-5.43-12.154-12.154V265.18c0-6.012-4.848-10.925-10.925-10.925H39.69l33.487-52.752
	c1.099-1.745,1.681-3.814,1.681-5.883v-33.552c0-77.382,62.966-140.347,140.347-140.347s140.218,62.966,140.218,140.347
	C355.424,192.97,345.727,222.125,327.173,246.626z" />
                                    <path style="fill:#56ACE0;"
                                        d="M312.499,145.455c0.065,9.632-4.008,18.101-11.119,23.79c-4.202,3.297-7.628,7.24-10.408,11.572
	c-15.774-3.943-20.687-11.119-21.204-11.83c-2.844-5.107-9.374-7.046-14.61-4.331c-5.301,2.78-7.37,9.438-4.59,14.739
	c0.905,1.681,8.792,15.192,32.905,21.85c-0.323,2.263-0.453,4.59-0.453,6.853c0,11.184-2.651,21.398-7.499,28.574
	c-4.331,6.594-9.891,9.826-16.485,9.826h-1.034c-18.23-0.84-18.23-0.84-17.842-20.881c0.065-2.457,0.065-5.172,0.065-8.016
	l0.065-0.453c0.711-4.655,2.78-18.747-6.594-29.673c-6.788-7.887-17.648-11.895-32.517-11.895c-7.434,0-14.545-2.78-20.04-7.758
	c-6.4-5.818-16.291-7.176-24.048-3.426c-11.636,5.818-26.57,2.844-35.297-6.853c-5.689-6.4-8.339-14.675-7.434-23.337
	c1.487-13.059,11.895-24.048,24.824-26.053c1.939-0.323,3.879-0.388,5.818-0.323c5.495,8.598,19.329,21.204,54.109,27.345
	c0.646,0.065,1.293,0.129,1.939,0.129c5.172,0,9.826-3.685,10.731-9.05c1.099-5.947-2.909-11.572-8.792-12.671
	c-30.19-5.301-38.077-15.192-39.693-18.101c0.646-15.903,13.77-28.574,29.737-28.574c4.59,0,8.986,1.034,13.059,3.038
	c11.313,5.56,24.954,6.271,37.883,2.069c2.909-0.905,6.012-1.487,9.115-1.487c16.485,0,29.802,13.382,29.802,29.802
	c0,1.228-0.065,2.651-0.388,4.331c-0.776,5.495,2.651,10.667,7.952,12.024C303.448,120.242,312.499,132.073,312.499,145.455z" />
                                    <g>
                                        <path style="fill:#194F82;" d="M304.741,99.297c-0.776-27.798-23.661-50.166-51.588-50.166c-5.43,0-10.731,0.84-15.838,2.457
		c-7.499,2.392-15.386,2.069-21.527-0.905c-7.111-3.491-14.675-5.236-22.626-5.236c-24.76,0-45.511,17.455-50.489,40.792
		c-2.133,0.065-4.396,0.259-6.594,0.646c-22.497,3.491-40.663,22.497-43.184,45.188c-1.616,14.675,3.103,29.35,12.8,40.275
		c9.826,10.925,23.79,17.131,38.465,17.131c7.952,0,15.58-1.745,22.432-5.301c9.503,8.663,21.85,13.446,34.974,13.446
		c7.758,0,13.188,1.552,15.709,4.331c2.844,3.297,1.939,9.568,1.552,12.218c-0.259,1.487-0.323,2.521-0.323,3.168
		c0,2.909-0.065,5.624-0.065,8.21c-0.453,24.889,2.004,41.244,38.659,42.99c0.711,0,1.164,0.065,2.004,0.065
		c13.899,0,26.182-6.982,34.586-19.523c7.176-10.796,11.184-25.277,11.184-40.986c0-8.469,3.814-16.614,10.214-21.721
		c12.347-9.891,19.394-24.566,19.394-40.339C334.349,125.802,322.519,107.701,304.741,99.297z M301.379,169.244
		c-4.202,3.297-7.628,7.24-10.408,11.572c-15.774-3.943-20.687-11.119-21.204-11.83c-2.844-5.107-9.374-7.046-14.61-4.331
		c-5.301,2.78-7.37,9.438-4.59,14.739c0.905,1.681,8.792,15.192,32.905,21.85c-0.323,2.263-0.453,4.59-0.453,6.853
		c0,11.184-2.651,21.398-7.499,28.574c-4.331,6.594-9.891,9.826-16.485,9.826l0,0h-1.034c-18.23-0.84-18.23-0.84-17.842-20.881
		c0.065-2.457,0.065-5.172,0.065-8.016l0.065-0.453c0.711-4.655,2.78-18.747-6.594-29.673c-6.788-7.887-17.648-11.895-32.517-11.895
		c-7.434,0-14.545-2.78-20.04-7.758c-6.4-5.818-16.291-7.176-24.048-3.426c-11.636,5.818-26.57,2.844-35.297-6.853
		c-5.689-6.4-8.339-14.675-7.434-23.337c1.487-13.059,11.895-24.049,24.824-26.053c1.939-0.323,3.879-0.388,5.818-0.323
		c5.495,8.598,19.329,21.204,54.109,27.345c0.646,0.065,1.293,0.129,1.939,0.129c5.172,0,9.826-3.685,10.731-9.051
		c1.099-5.947-2.909-11.572-8.792-12.671c-30.19-5.301-38.077-15.192-39.693-18.101c0.646-15.903,13.77-28.574,29.737-28.574
		c4.59,0,8.986,1.034,13.059,3.038c11.313,5.56,24.954,6.271,37.883,2.069c2.909-0.905,6.012-1.487,9.115-1.487
		c16.485,0,29.802,13.382,29.802,29.802c0,1.228-0.065,2.651-0.388,4.331c-0.776,5.495,2.651,10.667,7.952,12.024
		c12.994,3.556,22.044,15.386,22.044,28.768C312.563,155.087,308.49,163.556,301.379,169.244z" />
                                        <path style="fill:#194F82;"
                                            d="M245.202,87.725c-5.624,2.004-8.663,8.275-6.659,13.899c0.065,0.129,5.689,16.614-1.034,29.673
		c-3.685,7.176-10.602,12.218-20.945,15.192c-5.818,1.681-9.115,7.758-7.434,13.511c2.521,6.788,7.952,8.792,13.511,7.434
		c16.291-4.784,27.798-13.576,34.327-26.376c10.99-21.527,2.392-45.77,2.069-46.739C257.097,88.63,250.89,85.721,245.202,87.725z" />
                                    </g>
                                </svg>
                            </div>
                            <h1 class="title">Kvízy</h1>
                        </div>

                        <div class="content">
                            <p>
                                otestuj sa na naších kvízoch.
                            </p>

                            <a class="btn-link">Comming soon...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php include 'template/footer/footer.php' ?>


    <script>
    particlesJS("particles-js", {
        particles: {
            number: {
                value: 80,
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: ["#03dac6", "#ff0266", "#000000"]
            },
            shape: {
                type: "circle",
                stroke: {
                    width: 0,
                    color: "#000000"
                },
                polygon: {
                    nb_sides: 5
                },
                image: {
                    src: "img/github.svg",
                    width: 100,
                    height: 100
                },
            },
            opacity: {
                value: 0.5,
                random: false,
                anim: {
                    enable: false,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false
                },
            },
            size: {
                value: 5,
                random: true,
                anim: {
                    enable: false,
                    speed: 20,
                    size_min: 0.1,
                    sync: false
                },
            },
            line_linked: {
                enable: true,
                distance: 189,
                color: "#fff",
                opacity: 0.4,
                width: 1,
            },
            move: {
                enable: true,
                speed: 3,
                direction: "none",
                random: false,
                straight: false,
                out_mode: "out",
                bounce: false,
                attract: {
                    enable: false,
                    rotateX: 600,
                    rotateY: 1200
                },
            },
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: {
                    enable: true,
                    mode: "repulse"
                },
                onclick: {
                    enable: true,
                    mode: "push"
                },
                resize: true,
            },
            modes: {
                grab: {
                    distance: 400,
                    line_linked: {
                        opacity: 1
                    }
                },
                bubble: {
                    distance: 400,
                    size: 40,
                    duration: 2,
                    opacity: 8,
                    speed: 3
                },
                repulse: {
                    distance: 200,
                    duration: 0.4
                },
                push: {
                    particles_nb: 4
                },
                remove: {
                    particles_nb: 2
                },
            },
        },
        retina_detect: true,
    });
    var count_particles, stats, update;
    stats = new Stats();
    stats.setMode(0);
    stats.domElement.style.position = "absolute";
    stats.domElement.style.left = "0px";
    stats.domElement.style.top = "0px";
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector(".js-count-particles");
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
    </script>
</body>

</html>