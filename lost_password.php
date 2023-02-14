<?php 

include 'scripts/config.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    
         $user_agent = $_SERVER['HTTP_USER_AGENT'];
         $subject = "Zmena hesla";
         $contact = 'kontakt@mcodeacademy.sk';
         $html = file_get_contents('lost_password_html.html'); 
         $html = str_replace("{{EMAIL}}", $email, $html);
         $html = str_replace("{{LINK}}", $email, $html);
         $html = str_replace("{{browser_name}}", $user_agent, $html);
         $html = str_replace("{{support_url}}", $contact, $html);
         $from = "no-reply@mcodeacademy.sk";

         $mailTo =  $email;
         $headers = "From: ".$from;
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

         mail($mailTo, $subject, $html, $headers);

         header('location: login.php?message=success');

 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>MCodeAcademy • Stratené heslo</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/login2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link rel="stylesheet" href="assets/css/particles.css">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="template/nav/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">


</head>

<body>
    <?php include ('template/nav/nav.php') ?>
    <section>


        <div class="login-box">
            <h2>Zmena hesla</h2>
            <?php
                    if(isset($message)){
                    foreach($message as $message){
                       echo '
                       <div class="message">
                          <span style="color: red;">'.$message.'</span>
                          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                       </div>
                       ';
                        }
                    }
                ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="user-box">
                <input name="email" type="email" class="input" required></input>
                    <label>Email</label>
                </div>
                <button name="submit" type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Poslať email na zmenu hesla
                </button>
                <p>Máš účet a vieš heslo<span><a href="login.php"> Zaregistruj sa</a></span></p>

            </form>

        </div>
        <div style="z-index: -1;height: 93% !important;" id="particles-js"></div>
    </section>

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
    <script type="text/javascript" src="./assets/js/main.js"></script>

</body>

</html>