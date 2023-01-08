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
    <header>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <span
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
                        style="background: #ffffff00;">
                        <img src="../assets/img/logo.png" width="40" height="40">
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
    <div class="col-md-6" style="max-width:250px;padding-right: 0;width: 20%;height: 100vh;position: fixed;overflow-y: scroll;">
            <nav class="navbar navbar-light navbar-expand-md ">
                <div class="container-fluid ">
                    <div class="collapse navbar-collapse " id="navcol-1">
                        <ul class="navbar-nav d-flex flex-column">
                            <li class="nav-item"><h5>HTML základ</h5></li>
                                <li class="nav-item"><a class="nav-link active" href="#">HTML Domov</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Úvod</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Program</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Základ</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Elementy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Atribúty</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Nádpisy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Paragrafy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Štýlovanie</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Formatovanie</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Zakomentovávanie</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML CSS</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Linky</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Obrázky</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Videa</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Ikony</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Tabuľky</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Listy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Triedy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Id</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Charset</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HTML Symboly</a></li>
                                <li><hr></li>
                                <li><h5>HTML Referencie</h5></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Tag list</a></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Atribúty</a></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Atribúty</a></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Atribúty</a></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Atribúty</a></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Atribúty</a></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Atribúty</a></li>
                                <li class="nav-item"><a href="" class="nav-link">HTML Atribúty</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-6" style="width: 80%;margin-left: 18%;z-index:0;">
        <div class="content">
                <div class="title">
                        <h1>HTML tutoriál</h1>
                </div>

                <section class="first">
                    <h5>Čo to je HTML?</h5>
                    <p>HTML je štandardný značkovací jazyk pre webové stránky</p>
                    <p>Pomocou HTML si môžeme vytvoriť svoj vlastný web</p>
                    <p>HTML sa dá veľmi ľahko naučiť</p>
                    <button>začať <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </section>

                <section class="second">
                    <h5>Živý compilátor kódu</h5>
                    <p>Pomocou nášho compilátora si môžte kód vyskúšať hneď a ihneď uvidíte vaše výsledky</p>
                    <div class="compilator">
                        <h5>Príklad</h5>
                        <textarea id=code name=code>
 <!doctype html>
<html>
<head>
        <meta charset=utf-8>
        <title>Mcodeacademy</title>
        <style>
                p {font-family: monospace;}
        </style>
</head>
<body>
        <h1>McodeAcademy HTML tutoriál</h1>
        <p>Tu sa naučíte všetko z HTML</p>    
</body>
</html>
                                        </textarea>
                        <iframe id=preview></iframe>
                        <script>
                        var delay;
                        // Initialize CodeMirror editor with a nice html5 canvas demo.
                        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
                            mode: "htmlmixed",
                            lineNumbers: true,
                            theme: "mbo",
                        });
                        editor.on("change", function() {
                            clearTimeout(delay);
                            delay = setTimeout(updatePreview, 300);
                        });

                        function updatePreview() {
                            var previewFrame = document.getElementById('preview');
                            var preview = previewFrame.contentDocument || previewFrame.contentWindow.document;
                            preview.open();
                            preview.write(editor.getValue());
                            preview.close();
                        }
                        setTimeout(updatePreview, 300);
                        </script>
                    </div>
                </section>
                <section class="referencie">
                    <h5>HTML Referencie</h5>
                    <p>Na MCodeAcademy nájdete kompletné referencie o HTML prvkoch, atribútoch, udalostiach, názvoch
                        farieb, entitách, znakových sadách, kódovaní URL, jazykových kódoch, HTTP správach, podpore
                        prehliadačov a ďalších:</p>
                </section>
            </div>
        </div>
    </div>

</body>

</html>