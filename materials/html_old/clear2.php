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
        /* outline: 1px solid red; */
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
                        <hr><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link now" href="#"><span>HTML Domov</span></a>
                    </li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="uvod.php"><span>HTML Úvod</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="program.php"><span>HTML Program</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="zaklad.php"><span>HTML Základ</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="elementy.php"><span>HTML Elementy</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="atributy.php"><span>HTML Atribúty</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="nadpisy.php"><span>HTML Nádpisy</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="paragrafy.php"><span>HTML Paragrafy</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="stylovanie.php"><span>HTML Štýlovanie</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="formatovanie.php"><span>HTML Formatovanie</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="koment.php"><span>HTML Zakomentovávanie</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="css.php"><span>HTML CSS</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="linky.php"><span>HTML Linky</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="obrazky.php"><span>HTML Obrázky</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="videa.php"><span>HTML Videa</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="ikony.php"><span>HTML Ikony</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="tabulky.php"><span>HTML Tabuľky</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="listy.php"><span>HTML Listy</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="triedy.php"><span>HTML Triedy</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="id.php"><span>HTML Id</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="charset.php"><span>HTML Charset</span></a></li>
                    <li class="nav-item"><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link" href="symboly.php"><span>HTML Symboly</span></a></li>
                    <li>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <h5 style="padding-left: 10px;margin-top: 5px;">HTML základ</h5>
                        <hr><a
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;"
                            class="nav-link now" href="#"><span>HTML Domov</span></a>
                    </li>
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
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid" style="margin-top: 20px;">
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
                            <p>Na MCodeAcademy nájdete kompletné referencie o HTML prvkoch, atribútoch, udalostiach,
                                názvoch
                                farieb, entitách, znakových sadách, kódovaní URL, jazykových kódoch, HTTP správach,
                                podpore
                                prehliadačov a ďalších:</p>
                        </section>
                    </div>
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