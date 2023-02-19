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

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9863063720030996"
     crossorigin="anonymous"></script>

</head>

<body>

    <?php include 'template/nav/nav.php'; ?>

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

    <div class="con">
        <div class="row" style="margin-right:50px;">
            <div
                class="col-md-12 d-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-center">
                <h1 style="font-weight: bold;">Nauč sa programovať lepšie</h1>
                <p style="font-size: 27px; color: #212529">S naším systémom dokážete všetko</p>
            </div>
        </div>
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
                <a href="#">Skúsiť PHP</a>
                <a href="#">PHP Referencie</a>
            </div>
        </div>
    </div>

    <div id="cvicenia"
        class="cvicenia d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center"
        data-bss-parallax-bg="true" style="
            height: 300px;
            margin-bottom: 50px;
            background: url(&quot;assets/img/parralax.png&quot;) center / cover;">
    </div>

    <!-- <div class="body">
            <div class="boxik">

                <div class="crd">
                    <div class="imgBx">
                        <i class="fab fa-html5" style="font-size: 50px;"></i>
                        <h3>Cvičenia</h3>
                    </div>
                    <div class="text">
                        <p>Môžeš si otestovať svoj skill ktorý si sa naučil.</p>
                        <div class="column">
                            <a href="#">Cvičiť</a>
                            <p>Comming Soon...</p>
                        </div>
                    </div>

                </div>

                <div class="row" style="">
                <div
                    class="col-md-12 d-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-center">
                    <h1 style="font-weight: bold;">Cvičenia a kvízy</h1>
                    <p style="font-size: 27px; color: #212529">Otestuj svoj skill</p>
                </div>
            </div>

                <div class="crd">
                    <div class="imgBx">
                        <i class="fab fa-css3-alt" style="font-size: 50px;"></i>
                        <h3>Kvízy</h3>
                    </div>
                    <div class="text">
                        <p>Otestuj svoje znalosti na kvíze ktorý je PRO úrovni.</p>
                        <div class="column">
                            <a href="#">Vyskúšaj ma!</a>
                            <p>Comming Soon...</p>
                        </div>
                    </div>
                </div>

            </div>
    </div> -->

    <div class="con">
        <div class="ttls"></div>
        <div class="ttls"></div>
        <div class="ttls"></div>
        <div class="ttls"></div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>cvičenia</h2>
                <p>Môžeš si preskúšať svoj skill ktorý si sa naučil.</p>
                <a href="#">Cvičiť</a>
                <p>Comming soon..</p>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>kvízy</h2>
                <p>Otestuj svoje znalosti na kvíze ktorý je PRO úrovni</p>
                <a href="#">Vyskúšaj ma!</a>
                <p>Comming soon..</p>
            </div>
        </div>
        <div class="row" style="margin-right:50px;">
            <div
                class="col-md-12 d-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-center">
                <h1 style="font-weight: bold;">Cvičenia a kvízy</h1>
                <p style="font-size: 27px; color: #212529">Otestuj svoj skill</p>
            </div>
        </div>
    </div>


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