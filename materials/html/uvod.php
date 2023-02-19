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
    <title>Úvod do HTML | McodeAcademy</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/sidebar-content.css">

    <!-- codemirror -->

    <link rel="stylesheet" href="../assets/plugins/codemirror/lib/codemirror.css">
    <script src="../assets/plugins/codemirror/lib/codemirror.js"></script>

    <script src="../assets/plugins/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="../assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="../assets/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../assets/plugins/codemirror/mode/javascript/javascript.js"></script>
    <script src="../assets/plugins/codemirror/mode/css/css.js"></script>
    <script src="../assets/plugins/codemirror/mode/clike/clike.js"></script>
    <link rel="stylesheet" href="../assets/plugins/codemirror/theme/midnight.css">
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <?php include 'template/nav.php' ?>
    <div class="row g-0">
        <div class="col-md-4 col-lg-3 col-xl-2 col-xxl-2 sidebarr"
            style="background: rgb(33,37,41);color: var(--bs-white);width: fit-content;" data-bs-target="#navcol-1">
            <nav class="navbar navbar-light navbar-expand-md" style="color: var(--bs-gray-400);width: 100%;">
                <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler"
                        data-bs-target="#navcol-1" style="color: var(--bs-gray-300);"><span
                            class="visually-hidden">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="width: 100%;">
                        <ul class="navbar-nav flex-column" style="color: var(--bs-white);width: 100%;">
                            <li class="nav-item d-flex flex-column mx-auto justify-content-xxl-center"
                                style="color: #ffffff;width: 100%;font-size: 16px;">
                                <i class="fab fa-html5"
                                    style="font-size: 108px;text-align: center;color: rgb(227, 76, 38);"></i>
                                <hr
                                    style="border-radius: 56px;box-shadow: 5px 2px 7px rgb(255,255,255);color: rgb(255,255,255);border: 1px solid rgb(255,255,255);margin-top: 0;">
                            </li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="index.php" style="color: var(--bs-white);">HTML Domov</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);">
                                <a class="nav-link active" href="uvod.php"
                                    style="color: rgb(227, 76, 38);font-weight: bold;">HTML Úvod<i class="fas fa-star"
                                        style="color: var(--bs-yellow);margin-left: 4px;"></i></a>
                            </li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="editors.php" style="color: var(--bs-white);">HTML Editory</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="basic.php" style="color: var(--bs-white);">HTML Základ</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="elements.php" style="color: var(--bs-white);">HTML Prvky</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="attributes.php" style="color: var(--bs-white);">HTML Atribúty</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="headings.php" style="color: var(--bs-white);">HTML Nadpisy</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="paragraphs.php" style="color: var(--bs-white);">HTML Odseky</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="styles.php" style="color: var(--bs-white);">HTML Štýly</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="formatting.php" style="color: var(--bs-white);">HTML Formátovanie</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="quatations.php" style="color: var(--bs-white);">HTML Citácie</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="comments.php" style="color: var(--bs-white);">HTML Komentáre</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="colors.php" style="color: var(--bs-white);">HTML Farby</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="css.php" style="color: var(--bs-white);">HTML CSS</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="links.php" style="color: var(--bs-white);">HTML Odkazy</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="images.php" style="color: var(--bs-white);">HTML Obrázky</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="favicon.php" style="color: var(--bs-white);">HTML Favicon</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="tables.php" style="color: var(--bs-white);">HTML Tabuľky</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="lists.php" style="color: var(--bs-white);">HTML Zoznamy</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="block.php" style="color: var(--bs-white);">HTML Block & Inline</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="classes.php" style="color: var(--bs-white);">HTML Triedy</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="id.php" style="color: var(--bs-white);">HTML Id</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="iframe.php" style="color: var(--bs-white);">HTML Iframe</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="js.php" style="color: var(--bs-white);">HTML JavaScript</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="paths.php" style="color: var(--bs-white);">HTML Cesty k súborom</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="head.php" style="color: var(--bs-white);">HTML Head</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="responsive.php" style="color: var(--bs-white);">HTML Responzivíta</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="semantics.php" style="color: var(--bs-white);">HTML Sémantika</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="symbols.php" style="color: var(--bs-white);">HTML Symboly</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="emojis.php" style="color: var(--bs-white);">HTML Emoji</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="charset.php" style="color: var(--bs-white);">HTML Znaková sada</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="xhtml.php" style="color: var(--bs-white);">HTML vs XHTML</a></li>
                            <li class="nav-item" style="color: #ffffff;width: 100%;font-size: 16px;margin-top: 15px;">
                                <h4 style="font-weight: bold;color: #ffffff;border-color: #ffffff;">HTML referencie</h4>
                                <p>Comming soon</p>
                                <hr
                                    style="border-radius: 56px;box-shadow: 5px 2px 7px rgb(255,255,255);color: rgb(255,255,255);border: 1px solid rgb(255,255,255);">
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-8 col-lg-9 col-xl-9 col-xxl-9 content"
            style="padding-right: 15px;padding-left: 15px;">
            <section class="text-center py-4 py-xl-5">
                <div class="container">
                    <div class="text-white bg-dark border rounded border-0 p-4 p-md-5"
                        style="background: url(&quot;assets/img/parralax.png&quot;) center;height: 143px;"></div>
                </div>
            </section>
            <h1 class="text-start" style="font-weight: bold;margin-bottom: 36px;">HTML úvod</h1>
            <div>
                <div class="container">
                    <div class="row g-0" style="margin-bottom: 27px;">
                        <div class="col" style="text-align: left;"><a href="index.php"
                                style="text-decoration: none;letter-spacing: 3px;color: rgb(227, 76, 38);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;"><i
                                    class="fas fa-angle-left"
                                    style="font-size: 24px;margin-top: 0px;margin-right: 5px;"></i>Predchádzajúce</a></div>
                        <div class="col" style="text-align: right;"><a href="editors.php"
                                style="text-decoration: none;letter-spacing: 3px;color: rgb(227, 76, 38);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;">Ďalej<i
                                    class="fas fa-angle-right"
                                    style="font-size: 24px;margin-top: 0px;margin-left: 5px;"></i></a></div>
                    </div>
                </div>
            </div>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Čo to je HTML?</h3>
            <p style="text-align: left;">HTML je štandardný značkovací jazyk pre webové stránky.</p>
            <p style="text-align: left;">Pomocou HTML si môžeme vytvoriť svoj vlastný web.</p>
            <p style="text-align: left;">HTML sa dá veľmi ľahko naučiť</p>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Živý kompilátor HTML kódu</h3>
            <p style="text-align: left;">Pomocou nášho compilátora si môžte kód vyskúšať hneď a ihneď uvidíte vaše
                výsledky.</p>
            <section style="text-align: left;">
                <div class="compilator">
                    <div class="container">
                        <div class="row">
                            <div class="textarea" style="max-width: 450px;">
<textarea id="code" style="max-height: 180px">
<!DOCTYPE html>
<html>
<head>
<title>Názov stránky</title>
</head>
<body>

<h1>Toto je nádpis</h1>
<p>Toto je odstavec.</p>

</body>
</html></textarea>
                            </div>
                            <div class="preview" style="max-width: 450px">
                                <!-- <div id="preview"></div> -->
                                <iframe id="preview"></iframe>
                            </div>

                        </div>
                    </div>



                    <script>
                    var delay;

                    // Initialize CodeMirror editor with a nice html5 canvas demo.
                    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                        mode: "htmlmixed",
                        lineNumbers: true,
                        theme: "midnight",
                        styleActiveLine: true,
                        matchBrackets: true,
                        selectionPointer: true,
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
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">HTML cvičenia</h3>
            <p style="text-align: left;">Tento HTML tutoriál tiež obsahuje cvičenia.</p>
            <a href="../../exercises/exercises/html/" class="btn btn-secondary mb-5">Začať cvičenia</a>
        </div>
        <div class="col-md-2 col-lg-3 col-xl-1 col-xxl-1">

        </div>
    </div>
    <?php include 'template/footer.php' ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>