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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/scroll.js"></script>

    <!-- codemirror -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/codemirror/lib/codemirror.css">
    <script type="text/javascript" src="../assets/plugins/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="../assets/js/default.js"></script>
    <link rel="stylesheet" href="../assets/plugins/codemirror/theme/mbo.css">
    <script src="../assets/plugins/codemirror/addon/display/panel.js"></script>
    <link rel="stylesheet" href="../assets/plugins/codemirror/theme/midnight.css">
    <script src="../assets/plugins/codemirror/addon/selection/active-line.js"></script>
    <script src="../assets/plugins/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="../assets/plugins/codemirror/addon/selection/selection-pointer.js"></script>

</head>

<body id="page-top">

    <header>
        <?php include 'template/nav.php'; ?>
    </header>

    <nav class="navbar navbar-light navbar-expand-md sticky-top py-3"
        style="box-shadow: 2px 6px 11px rgb(67,67,67);background: #003e7e; padding: 0 !important;">
        <div class=".container">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#"
                            style="color: var(--bs-white);font-weight: bold;"><i class="fas fa-home"
                                style="font-size: 20px;color: var(--bs-white);"></i></a></li>
                    <li class="nav-item" style="background: #0064cc;"><a class="nav-link active" href="#"
                            style="color: var(--bs-white);font-weight: bold;">HTML</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="font-weight: bold;color: var(--bs-white);">CSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="color: var(--bs-white);font-weight: bold;">PHP</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper" style="background: rgb(70, 70, 70);">
        <nav class="navbar navbar-dark bg-dark align-items-start sidebar idebar-dark accordionbg-gradient-primary p-0"
            style="background: rgb(70, 70, 70) !important;margin-right: 40px;">
            <div id="overflow" class="d-flex flex-column p-0 sidebar_mm">
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light widthh" id="accordionSidebar">
                    <li class="nav-item">
                        <h5 style="padding-left: 10px;margin-top: 5px;font-weight: bold;">HTML základ</h5>
                        <hr>
                    </li>
                    <li class="nav-item" style=" background-color: rgb(172, 172, 172);"><a class="nav-link active"
                            href="index.html"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px; font-size: 16px;"><span>HTML
                                Domov</span></a> </li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Úvod</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Program</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Základ</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Elementy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Atribúty</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Nádpisy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Paragrafy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Štýlovanie</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Formatovanie</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Zakomentovávanie</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                CSS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Linky</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Obrázky</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Videa</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Ikony</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Tabuľky</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Listy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Triedy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Id</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Charset</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                                Symboly</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"
                            style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML
                            </span></a></li>
                    <li class="nav-item">
                        <hr>
                    </li>
                    <li class="nav-item">
                        <h5 style="padding-left: 10px;margin-top: 5px;font-weight: bold;">HTML Referencie</h5>
                        <hr>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="margin-right: 50px;margin-left: 15px;">
                <div class="container-fluid" style="margin-top: 20px;">
                    <h1 style="color: var(--bs-gray-900);font-weight: bold;">HTML tutoriál</h1>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Čo to je HTML?</h5>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">HTML je štandardný značkovací
                            jazyk pre webové stránky.</span><br></p>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">Pomocou HTML si môžeme vytvoriť
                            svoj vlastný web.</span><br></p>
                    <p><span style="color: rgb(77, 77, 77);">HTML sa dá veľmi ľahko naučiť</span><br></p><button
                        class="btn btn-primary" type="button"
                        style="background: var(--bs-gray-900);">Začať&nbsp;&nbsp;<i
                            class="fas fa-hand-point-right"></i></button>
                    <hr>
                    <h3 style="color: var(--bs-gray-900);font-weight: bold;">Živý kompilátor HTML kódu</h3>
                    <p><span style="color: rgb(77, 77, 77); background-color: rgb(255, 255, 255);">Pomocou nášho
                            compilátora si môžte kód vyskúšať hneď a ihneď uvidíte vaše výsledky.</span><br></p>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Príklad</h5>
                    <div class="compilator">
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
                        <iframe id=preview class="preview"></iframe>
                        <script>
                        var delay;

                        // Initialize CodeMirror editor with a nice html5 canvas demo.
                        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
                            mode: "htmlmixed",
                            lineNumbers: true,
                            theme: "midnight",
                            styleActiveLine: true,
                            matchBrackets: true,
                            selectionPointer: true
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
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        
                        <a href="" class="btn btn-primary">dasdasda</a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                    <button>ahoj</button>
                    </div>

                    <div class="col-lg-4 col-md-6">
                    <button>ahoj</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                    <button>ahoj</button>
                    </div>

                    <div class="col-lg-4 col-md-6">
                    <button>ahoj</button>
                    </div>

                    <div class="col-lg-4 col-md-6">
                    <button>ahoj</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                    <button>ahoj</button>
                    </div>

                    <div class="col-lg-4 col-md-6">
                    <button>ahoj</button>
                    </div>

                    <div class="col-lg-4 col-md-6">
                    <button>ahoj</button>
                    </div>
                </div>
            </div>
            <?php include 'template/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>