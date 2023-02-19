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
    <title>Syntax PHP | McodeAcademy</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">


    <!-- codemirror -->

    <link rel="stylesheet" href="../assets/plugins/codemirror/lib/codemirror.css">
    <script src="../assets/plugins/codemirror/lib/codemirror.js"></script>

    <script src="../assets/plugins/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="../assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="../assets/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../assets/plugins/codemirror/mode/javascript/javascript.js"></script>
    <script src="../assets/plugins/codemirror/mode/css/css.js"></script>
    <script src="../assets/plugins/codemirror/mode/clike/clike.js"></script>
    <script src="../assets/plugins/codemirror/mode/php/php.js"></script>
    <link rel="stylesheet" href="../assets/plugins/codemirror/theme/midnight.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sidebar-content.css">


</head>

<body>
    <?php include 'template/nav.php' ?>
    <div class="row g-0">
        <div class="col-md-4 col-lg-3 col-xl-2 col-xxl-2 sidebarr"
            style="background: rgb(33,37,41);color: var(--bs-white);width: fit-content;padding-right: 2rem;"
            data-bs-target="#navcol-1">
            <nav class="navbar navbar-light navbar-expand-md" style="color: var(--bs-gray-400);width: 100%;">
                <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler"
                        data-bs-target="#navcol-1" style="color: var(--bs-gray-300);"><span
                            class="visually-hidden">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="width: 100%;">
                        <ul class="navbar-nav flex-column" style="color: var(--bs-white);width: 100%;">
                            <li class="nav-item d-flex flex-column mx-auto justify-content-xxl-center"
                                style="color: #ffffff;width: 100%;font-size: 16px;">
                                <i class="fab fa-php"
                                    style="font-size: 108px;text-align: center;color: rgb(122,121,164);"></i>
                                <hr
                                    style="border-radius: 56px;box-shadow: 5px 2px 7px rgb(255,255,255);color: rgb(255,255,255);border: 1px solid rgb(255,255,255);margin-top: 0;">
                            </li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="index.php" style="color: var(--bs-white);"><span
                                        style="color: var(--bs-white);">PHP Domov</span></a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="uvod.php" style="color: var(--bs-white);">PHP Úvod</a></li>

                            
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="install.php" style="color: var(--bs-white);">PHP Inštalácia</a></li>
                                    <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="syntax.php" style="color: #797ab2;font-weight: bold;">PHP Syntax<i
                                        class="fas fa-star" style="color: var(--bs-yellow);margin-left: 4px;"></i></a>
                            </li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="comments.php" style="color: var(--bs-white);">PHP Komentáre</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="variables.php" style="color: var(--bs-white);">PHP Premenné</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="echo.php" style="color: var(--bs-white);">PHP Echo / Print</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="data.php" style="color: var(--bs-white);">PHP Typy údajov</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="strings.php" style="color: var(--bs-white);">PHP Reťazce</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="numbers.php" style="color: var(--bs-white);">PHP Čisla</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="math.php" style="color: var(--bs-white);">PHP Matematika</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="constant.php" style="color: var(--bs-white);">PHP Konštanty</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="operators.php" style="color: var(--bs-white);">PHP Operátori</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="if.php" style="color: var(--bs-white);">PHP If...Else...Elseif</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="switch.php" style="color: var(--bs-white);">PHP Prepínač</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="loops.php" style="color: var(--bs-white);">PHP Slúčky</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="functions.php" style="color: var(--bs-white);">PHP Funkcie</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="array.php" style="color: var(--bs-white);">PHP Polia&nbsp;</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="superglobals.php" style="color: var(--bs-white);">PHP Superglobals</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="regex.php" style="color: var(--bs-white);">PHP RegEx</a></li>
                            <li class="nav-item" style="color: #ffffff;width: 100%;font-size: 16px;margin-top: 15px;">
                                <h4 style="font-weight: bold;color: #ffffff;border-color: #ffffff;">PHP referencie</h4>
                                <p>Comming soon</p>
                                <hr
                                    style="border-radius: 56px;box-shadow: 5px 2px 7px rgb(255,255,255);color: rgb(255,255,255);border: 1px solid rgb(255,255,255);">
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-8 col-lg-9 col-xl-9 col-xxl-9 text-center content"
            style="padding-right: 15px;padding-left: 15px;">
            <section class="text-center py-4 py-xl-5">
                <div class="container">
                    <div class="text-white bg-dark border rounded border-0 p-4 p-md-5"
                        style="background: url(&quot;assets/img/parralax.png&quot;) center;height: 143px;"></div>
                </div>
            </section>
            <h1 class="text-start" style="font-weight: bold;margin-bottom: 36px;">PHP syntax</h1>
            <div>
                <div class="container">
                    <div class="row g-0" style="margin-bottom: 27px;">
                        <div class="col" style="text-align: left;"><a href="install.php"
                                style="letter-spacing: 3px;color: var(--bs-cyan);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;"><i
                                    class="fas fa-angle-left"
                                    style="font-size: 24px;margin-top: 0px;margin-right: 5px;"></i>Predchádzajúce</a>
                        </div>
                        <div class="col" style="text-align: right;"><a href="comments.php"
                                style="letter-spacing: 3px;color: var(--bs-cyan);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;">Ďalej<i
                                    class="fas fa-angle-right"
                                    style="font-size: 24px;margin-top: 0px;margin-left: 5px;"></i></a></div>
                    </div>
                </div>
            </div>
            <hr>
            <p style="text-align: left;">Na serveri sa spustí PHP skript a výsledok v obyčajnom HTML sa odošle späť do prehliadača.</p>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Základná syntax PHP</h3>
            <p style="text-align: left;">PHP skript môže byť umiestnený kdekoľvek v dokumente.</p>
            <p style="text-align: left;">PHP skript začína na &lt;?php a končí na ?></p>
            <div class="border">
                <p>&lt;?php</p>
                <p>//tu je kód PHP</p>
                <p>?></p>
            </div>
            <p style="text-align: left;">Predvolená prípona súboru pre súbory PHP je ".php".</p>
            <p style="text-align: left;">Súbor PHP zvyčajne obsahuje značky HTML a nejaký skriptovací kód PHP. </p>
            <p style="text-align: left;">Nižšie uvádzame príklad jednoduchého súboru PHP so skriptom PHP, ktorý používa vstavanú funkciu PHP "echo" na výstup textu "Ahoj svet!" na webovej stránke: </p>
            <p style="text-align: left;"><b>Výsledok zobrazíte malou zmenou v kóde.</b>Môžte si vyskúšať.</p>
            <section style="text-align: left;">
                <div class="compilator">
                    <div class="container">
                        <div class="row">
                            <div class="textarea" style="max-width: 450px;">
                                <textarea id="code1" style="max-height: 180px">

<!DOCTYPE html>
<html>
<body>
    <h1>Moja prvá stránka PHP</h1>
<?php 
echo "<?php\necho \"Ahoj, svet!\";\n?>"; 
?>
</body>
</html>
</textarea>
                            </div>
                            <div class="preview" style="max-width: 450px">
                                <div id="preview1"></div>
                            </div>

                        </div>
                    </div>



                    <script>
                    var delay;

                    // Initialize CodeMirror editor with a nice html5 canvas demo.
                    var editor1 = CodeMirror.fromTextArea(document.getElementById("code1"), {
                        mode: "application/x-httpd-php",
                        lineNumbers: true,
                        theme: "midnight",
                        styleActiveLine: true,
                        matchBrackets: true,
                        selectionPointer: true,
                    });
                    editor1.on("change", function() {
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "codemirror/run.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                document.getElementById("preview1").innerHTML = this.responseText;
                            }
                        };
                        xhr.send("code=" + encodeURIComponent(editor1.getValue()));
                    });
                    </script>
                </div>
        </section>
        <p style="text-align: left;"><b>Poznámka:</b>Príkazy PHP sa končia bodkočiarkou (;).</p>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">PHP rozlišovanie malých a veľkých písmen</h3>
            <p style="text-align: left;">V PHP kľúčové slová (napr. if, else, while, echo atď.), triedy, funkcie a užívateľom definované funkcie nerozlišujú veľké a malé písmená.</p>
            <p style="text-align: left;"> V nižšie uvedenom príklade sú všetky tri echo vyhlásenia nižšie rovnaké a zákonné: </p>
            <p style="text-align: left;"><b>Výsledok zobrazíte malou zmenou v kóde.</b>Môžte si vyskúšať.</p>
            <section style="text-align: left;">
                <div class="compilator">
                    <div class="container">
                        <div class="row">
                            <div class="textarea" style="max-width: 450px;">
                                <textarea id="code2" style="max-height: 180px">

<!DOCTYPE html>
<html>
<body>
<?php 
echo "<?php\necho \"Ahoj, Svet!<br>\";\necho \"Ahoj, Svet!<br>\";\necho \"Ahoj, Svet!<br>\";\n?>"; 
?>
</body>
</html>
</textarea>
                            </div>
                            <div class="preview" style="max-width: 450px">
                                <div id="preview2"></div>
                            </div>

                        </div>
                    </div>



                    <script>
                    var delay;

                    // Initialize CodeMirror editor with a nice html5 canvas demo.
                    var editor2 = CodeMirror.fromTextArea(document.getElementById("code2"), {
                        mode: "application/x-httpd-php",
                        lineNumbers: true,
                        theme: "midnight",
                        styleActiveLine: true,
                        matchBrackets: true,
                        selectionPointer: true,
                    });
                    editor2.on("change", function() {
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "codemirror/run.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                document.getElementById("preview2").innerHTML = this.responseText;
                            }
                        };
                        xhr.send("code=" + encodeURIComponent(editor2.getValue()));
                    });
                    </script>
                </div>
        </section>
        <p style="text-align: left;"><b>Poznámka:</b> Avšak; všetky názvy premenných rozlišujú veľké a malé písmená! </p>
        <p style="text-align: left;">Pozrite sa na príklad nižšie; iba prvý príkaz zobrazí hodnotu premennej $color! Je to preto, že $color, $COLOR a $coLOR sa považujú za tri rôzne premenné a tým pádom $COLOr a ani $coLOR nepozná:</p>
        <section style="text-align: left;">
                <div class="compilator">
                    <div class="container">
                        <div class="row">
                            <div class="textarea" style="max-width: 450px;">
                                <textarea id="code3" style="max-height: 180px">

<!DOCTYPE html>
<html>
<body>
<?php 
echo "<?php\n\$color = \"red\";\necho \"Moje auto je \" . \$color . \"<br>\";\necho \"Moje auto je \" . \$COLOR . \"<br>\";\necho \"Moje auto je \" . \$coLOR . \"<br>\";\n?>\n"; 
?>
</body>
</html>
</textarea>
                            </div>
                            <div class="preview" style="max-width: 450px">
                                <div id="preview3"></div>
                            </div>

                        </div>
                    </div>



                    <script>
                    var delay;

                    // Initialize CodeMirror editor with a nice html5 canvas demo.
                    var editor3 = CodeMirror.fromTextArea(document.getElementById("code3"), {
                        mode: "application/x-httpd-php",
                        lineNumbers: true,
                        theme: "midnight",
                        styleActiveLine: true,
                        matchBrackets: true,
                        selectionPointer: true,
                    });
                    editor3.on("change", function() {
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "codemirror/run.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                document.getElementById("preview3").innerHTML = this.responseText;
                            }
                        };
                        xhr.send("code=" + encodeURIComponent(editor3.getValue()));
                    });
                    </script>
                </div>
        </section>
        <hr>
            
    </div>
    <div class="col-md-2 col-lg-3 col-xl-1 col-xxl-1"></div>
    </div>
    <?php include 'template/footer.php' ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>