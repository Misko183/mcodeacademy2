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
    <title>Uvod do PHP | McodeAcademy</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
                                style="color: #ffffff;width: 100%;font-size: 16px;"><i class="fab fa-php"
                                    style="font-size: 108px;text-align: center;color: rgb(122,121,164);"></i>
                                <hr
                                    style="border-radius: 56px;box-shadow: 5px 2px 7px rgb(255,255,255);color: rgb(255,255,255);border: 1px solid rgb(255,255,255);margin-top: 0;">
                            </li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="index.php" style="color: var(--bs-white);">PHP Domov</a></li>
                            <li class="nav-item" style="font-weight: bold;"><a class="nav-link active" href="uvod.php"
                                    style="color: #797ab2;">PHP Úvod<i class="fas fa-star"
                                        style="color: var(--bs-yellow);margin-left: 4px;"></i></a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="install.php" style="color: var(--bs-white);"><span
                                        style="color: var(--bs-white);">PHP&nbsp;</span>Inštalácia</a></li>
                            <li class="nav-item" style="color: var(--bs-gray-400);"><a class="nav-link active"
                                    href="syntax.php" style="color: var(--bs-white);">PHP Syntax</a></li>
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
            <h1 class="text-start" style="font-weight: bold;margin-bottom: 36px;">PHP úvod</h1>
            <div>
                <div class="container">
                    <div class="row g-0" style="margin-bottom: 27px;">
                        <div class="col-sm-7 col-md-8" style="text-align: left;"><a href="index.php"
                                style="letter-spacing: 3px;color: var(--bs-cyan);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;"><i
                                    class="fas fa-angle-left"
                                    style="font-size: 24px;margin-top: 0px;margin-right: 5px;"></i>Predchádzajúce</a>
                        </div>
                        <div class="col" style="text-align: right;"><a href="install.php"
                                style="letter-spacing: 3px;color: var(--bs-cyan);background: #212529;padding: 15px;border-radius: 15px;font-size: 24px;">Ďalej<i
                                    class="fas fa-angle-right"
                                    style="font-size: 24px;margin-top: 0px;margin-left: 5px;"></i></a></div>
                    </div>
                </div>
            </div>
            <hr>
            <p style="text-align: left;">PHP kód sa spúšťa na serveri.</p>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Čo by ste už mali vedieť</h3>
            <p style="text-align: left;">Skôr ako budete pokračovať, mali by ste mať základné znalosti o nasledujúcich
                veciach:</p>
            <ul>
                <li style="text-align: left;">HTML</li>
                <li style="text-align: left;">CSS</li>
                <li style="text-align: left;">JavaScript</li>
            </ul>
            <p style="text-align: left;">Ak chcete najskôr študovať HTML a CSS, návody nájdete na našej domovskej
                stránke.</p>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Čo je PHP?</h3>
            <ul style="text-align: left;">
                <li>PHP je skratka pre "PHP: Hypertext Preprocessor"</li>
                <li>PHP je široko používaný skriptovací jazyk s otvoreným zdrojovým kódom</li>
                <li>PHP skripty sa spúšťajú na serveri</li>
                <li>PHP je zadarmo na stiahnutie a&nbsp;používanie</li>
            </ul>
            <section></section>
            <hr>
            <div style="background: rgba(13,202,240,0.48);padding: 27px;border-radius: 19px;">
                <h5 style="text-align: left;font-weight: bold;margin-bottom: 15px;">PHP je úžasný a popúlarný jazyk!
                </h5>
                <p style="text-align: left;margin-bottom: 0;">Je dostatočne výkonný na to, aby bol jadrom najväčšieho
                    blogovacieho systému na webe (WordPress)!</p>
                <p style="text-align: left;margin-bottom: 0;">Je dostatočne hlboký na to, aby prevádzkoval veľké
                    sociálne siete!</p>
                <p style="text-align: left;margin-bottom: -50px;">Je tiež dosť jednoduché byť prvým jazykom na strane
                    servera pre začiatočníkov! <br><br><br></p>
            </div>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Čo je súbor PHP?</h3>
            <ul style="text-align: left;">
                <li>PHP súbory môžu obsahovať text, HTML, CSS, JavaScript a PHP kód</li>
                <li>PHP kód sa spustí na serveri a výsledok sa vráti prehliadaču ako obyčajný HTML</li>
                <li>PHP súbory majú príponu ".php"</li>
            </ul>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Čo dokáže PHP?</h3>
            <ul style="text-align: left;">
                <li>PHP dokáže generovať dynamický obsah stránky </li>
                <li>PHP dokáže vytvárať, otvárať, čítať, zapisovať, mazať a zatvárať súbory na serveri</li>
                <li>PHP dokáže zbierať údaje z formulárov </li>
                <li>PHP môže odosielať a prijímať cookies </li>
                <li>PHP môže pridávať, mazať, upravovať údaje vo vašej databáze </li>
                <li>PHP možno použiť na riadenie prístupu používateľov </li>
                <li>PHP dokáže šifrovať dáta </li>
            </ul>
            <p style="text-align: left;">S PHP nie ste obmedzený na výstup HTML. Môžete vydávať obrázky alebo súbory
                PDF. Môžete tiež vytlačiť ľubovoľný text, napríklad XHTML a XML. </p>
            <hr>
            <h3 style="text-align: left;font-weight: bold;margin-bottom: 15px;">Prečo PHP?</h3>
            <ul style="text-align: left;">
                <li>PHP beží na rôznych platformách (Windows, Linux, Unix, Mac OS X atď.) </li>
                <li>PHP je kompatibilné s takmer všetkými dnes používanými servermi (Apache, IIS atď.) </li>
                <li>PHP podporuje širokú škálu databáz </li>
                <li>PHP je zadarmo. Stiahnite si ho z oficiálneho zdroja PHP: www.php.net </li>
                <li>PHP sa ľahko učí a funguje efektívne na strane servera </li>
            </ul>
        </div>
        <div class="col-md-2 col-lg-3 col-xl-1 col-xxl-1"></div>
    </div>
    <?php include 'template/footer.php' ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>