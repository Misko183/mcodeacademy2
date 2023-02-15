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
    <title>Komentára PHP | McodeAcademy</title>
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


</head>

<body>
    <?php include 'template/nav.php' ?>
    <div class="row g-0">
        <div class="col-md-4 col-lg-3 col-xl-2 col-xxl-2"
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
                                    href="uvod.php" style="color: var(--bs-white);">Úvod do PHP</a></li>


                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="install.php" style="color: var(--bs-white);">PHP Inštalácia</a></li>
                                    <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="syntax.php" style="color: var(--bs-white);">PHP Syntax</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="comments.php" style="color: #797ab2;font-weight: bold;">PHP Komentáre<i
                                        class="fas fa-star" style="color: var(--bs-yellow);margin-left: 4px;"></i></a>
                            </li>
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
        <div class="col-md-8 col-lg-9 col-xl-9 col-xxl-9 text-center"
            style="margin-left: 0px;padding-right: 15px;padding-left: 15px;">
            <section class="text-center py-4 py-xl-5">
                <div class="container">
                    <div class="text-white bg-dark border rounded border-0 p-4 p-md-5"
                        style="background: url(&quot;assets/img/parralax.png&quot;) center;height: 143px;"></div>
                </div>
            </section>
            <h1 class="text-start" style="font-weight: bold;margin-bottom: 36px;">PHP Komentáre</h1>
            <div>
                <div class="container">
                    <div class="row g-0" style="margin-bottom: 27px;">
                        <div class="col" style="text-align: left;"><a href="syntax.php"
                                style="letter-spacing: 3px;color: var(--bs-cyan);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;"><i
                                    class="fas fa-angle-left"
                                    style="font-size: 24px;margin-top: 0px;margin-right: 5px;"></i>Predchádzajúce</a>
                        </div>
                        <div class="col" style="text-align: right;"><a href="variables.php"
                                style="letter-spacing: 3px;color: var(--bs-cyan);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;">Ďalej<i
                                    class="fas fa-angle-right"
                                    style="font-size: 24px;margin-top: 0px;margin-left: 5px;"></i></a></div>
                    </div>
                </div>
            </div>
            <hr>

            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Komentáre v PHP</h3>
            <p style="text-align: left;">Komentár v PHP kóde je riadok, ktorý sa nevykonáva ako súčasť programu. Jeho jediným účelom je prečítať si ho niekto, kto sa pozerá na kód.</p>
            <p style="text-align: left;">Komentáre možno použiť na: </p>
            <ul>
                <li style="text-align: left;">Umožnite ostatným pochopiť váš kód </li>
                <li style="text-align: left;">Pripomeňte si, čo ste urobili – Väčšina programátorov zažila návrat k svojej vlastnej práci o rok alebo dva neskôr a museli znova zistiť, čo urobili. Komentáre vám môžu pripomenúť, čo ste si mysleli, keď ste písali kód</li>
            </ul>
            <p style="text-align: left;">PHP supports several ways of commenting:</p>
            <p style="text-align: left;"><b>Výsledok zobrazíte malou zmenou v kóde.</b>Môžte si vyskúšať.</p>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Syntax pre jednoriadkové komentáre:</h3>
            <section style="text-align: left;">
                <div class="compilator">
                    <div class="container">
                        <div class="row">
                            
                                <textarea id="code1" >

<!DOCTYPE html>
<html>
<body>

<?php 
echo "<?php\n// Toto je jednoriadkový komentár\n# Toto je tiež jednoriadkový komentár\n?>"; 
?>

</body>
</html>
</textarea>
                            
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
                    </script>
                </div>
            </section>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Syntax pre viacriadkové komentáre:</h3>
            <section style="text-align: left;">
                <div class="compilator">
                    <div class="container">
                        <div class="row">
                            
                                <textarea id="code2" >

<!DOCTYPE html>
<html>
<body>

<?php 
echo "<?php\n/* \nToto je viacriadkový blok komentárov
ktorá sa rozprestiera na viacerých miestach
linky\n*/\n?>"; 
?>

</body>
</html>
</textarea>
                            
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
                    </script>
                </div>
            </section>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Použitie komentárov na vynechanie častí kódu:</h3>
            <section style="text-align: left;">
                <div class="compilator">
                    <div class="container">
                        <div class="row">
                            
                                <textarea id="code3" >

<!DOCTYPE html>
<html>
<body>

<?php 
echo "<?php\n// Môžete tiež použiť komentáre na vynechanie častí riadku kódu\n \$x = 5 /* + 15 */ + 5;*/\n echo \$x;\n?>"; 
?>

</body>
</html>
</textarea>
                            
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
                    </script>
                </div>
            </section>

        </div>
        <div class="col-md-2 col-lg-3 col-xl-1 col-xxl-1"></div>
    </div>
    <?php include 'template/footer.php' ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>