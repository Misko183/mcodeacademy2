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

</head>

<body>
<header>
    <?php include 'template/nav.php'; ?>
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
        <div class="col-md-6"
            style="color:white; background-color:rgb(70, 70, 70);width: 20%;max-width:223px;padding-right: 0;padding-left:0;height: 100vh;position: fixed;overflow-y: scroll;">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid" style="padding-right: 0;">
                    <div class="collapse navbar-collapse " id="navcol-1">
                        <ul class="navbar-nav d-flex flex-column">
                        <li class="nav-item"><h5>HTML základ</h5></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="index.php">HTML Domov</a></li>
                            <li class="nav-item" style="background-color:rgb(172, 172, 172);padding-left: 8px; padding-top: 5px;padding-bottom: 5px;">HTML Úvod</li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="program.php">HTML Program</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="zaklad.php">HTML Základ</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="elementy.php">HTML Elementy</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="atributy.php">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="nadpisy.php">HTML Nádpisy</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="paragrafy.php">HTML Paragrafy</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="stylovanie.php">HTML Štýlovanie</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="formatovanie.php">HTML Formatovanie</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="koment.php">HTML Zakomentovávanie</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="css.php">HTML CSS</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="linky.php">HTML Linky</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="obrazky.php">HTML Obrázky</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="videa.php">HTML Videa</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="ikony.php">HTML Ikony</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="tabulky.php">HTML Tabuľky</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="listy.php">HTML Listy</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="triedy.php">HTML Triedy</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="id.php">HTML Id</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="charset.php">HTML Charset</a></li>
                            <li class="nav-item"><a style="color: white;" class="nav-link" href="symboly.php">HTML Symboly</a></li>
                            <li><hr></li>
                            <li><h5>HTML Referencie</h5></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Tag list</a></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Atribúty</a></li>
                            <li class="nav-item"><a style="color: white;" href="" class="nav-link">HTML Atribúty</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-6" style="width: 80%;margin-left: 15%;z-index:0;">
            <div class="content">
                <div class="title">
                    <h5>HTML Úvod</h5>
                    <p>HTML je štandardný znakový jazyk na vytváranie webových stránok.</p>
                </div>
                <div class="first">
                    <h5>Čo je HTML?</h5>
                    <ul>
                        <li>HTML je skratka pre Hyper Text Markup Language</li>
                        <li>HTML je štandardný značkovací jazyk na vytváranie webových stránok</li>
                        <li>HTML popisuje štruktúru webovej stránky</li>
                        <li>HTML pozostáva zo série prvkov</li>
                        <li>Prvky HTML hovoria prehliadaču, ako má zobraziť obsah</li>
                        <li>Prvky HTML označujú časti obsahu, ako napríklad „toto je nadpis“, „toto je odsek“, „toto je
                            odkaz“ atď.</li>
                    </ul>
                </div>
                <div class="second">
                    <h5>Jednoduchý HTML dokument</h5>
                    <div class="compilator">
                        <h5>Príklad</h5>
                        <textarea id=code name=code>
 <!doctype html>
<html>
<head>
        <meta charset=utf-8>
        <title>Mcodeacademy</title>
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
                </div>
                <div class="third">
                    <h5>Vysvetlenie príkladu</h5>
                    <ul>
                        <li>Deklarácia <span>&lt;!DOCTYPE html&gt;</span> definuje, že tento dokument je dokument HTML5
                        </li>
                        <li>Prvok <span>&lt;html&gt;</span> je koreňový prvok stránky HTML</li>
                        <li>Element <span>&lt;head&gt;</span> obsahuje meta informácie o HTML stránke</li>
                        <li>Element <span>&lt;title&gt;</span> určuje názov stránky HTML (zobrazuje sa v záhlaví
                            prehliadača alebo na karte stránky)</li>
                        <li>Element <span>&lt;body&gt;</span> definuje telo dokumentu a je kontajnerom pre všetok
                            viditeľný obsah, ako sú nadpisy, odseky, obrázky, hypertextové odkazy, tabuľky, zoznamy atď.
                        </li>
                        <li>Element <span>&lt;h1&gt;</span> definuje veľký nadpis</li>
                        <li>Element <span>&lt;p&gt;</span> definuje odsek</li>
                    </ul>
                </div>
                <div class="fourth">
                    <h5>Čo je prvok HTML?</h5>
                    <p>Prvok HTML je definovaný počiatočnou značkou, určitým obsahom a koncovou značkou:</p>
                    <p><span>&lt;tagname&gt; Tu ide kontent... &lt;/tagname&gt;</span></p>
                    <p>Prvok HTML je všetko od počiatočnej značky po koncovú značku:</p>
                    <p><span>&lt;h1&gt; Prvok pre nádpis &lt;/h1&gt;</span></p>
                    <p><span>&lt;p&gt; Prvok pre paragraf &lt;/p&gt;</span></p>
                    <table>
                        <tr>
                            <th>Začínajúci tag</th>
                            <th>Kontent prvku</th>
                            <th>Končiaci tag</th>
                        </tr>
                        <tr>
                            <td>&lt;h1&gt;</td>
                            <td>McodeAcademy HTML tutoriál</td>
                            <td>&lt;/h1&gt;</td>
                        </tr>
                        <tr>
                            <td>&lt;p&gt;</td>
                            <td>Tu sa naučíte všetko z HTML</td>
                            <td>&lt;/p&gt;</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>