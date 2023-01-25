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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/scroll.js"></script>
    
</head>

<body id="page-top">

    <header>
        <?php include 'template/nav.php'; ?>
    </header>

    <nav class="navbar navbar-light navbar-expand-md sticky-top py-3" style="box-shadow: 2px 6px 11px rgb(67,67,67);background: #003e7e; padding: 0 !important;">
        <div class=".container">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: var(--bs-white);font-weight: bold;"><i class="fas fa-home" style="font-size: 20px;color: var(--bs-white);"></i></a></li>
                    <li class="nav-item" style="background: #0064cc;"><a class="nav-link active" href="#" style="color: var(--bs-white);font-weight: bold;">HTML</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-weight: bold;color: var(--bs-white);">CSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--bs-white);font-weight: bold;">PHP</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper" style="background: rgb(70, 70, 70);">
        <nav class="navbar navbar-dark bg-dark align-items-start sidebar sidebar-dark accordionbg-gradient-primary p-0" style="background: rgb(70, 70, 70);">
            <div id="overflow" class="d-flex flex-column p-0 sidebar_mm ">
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar" style="width: 13rem;">
                    <li class="nav-item">
                        <h5 style="padding-left: 10px;margin-top: 5px;">HTML základ</h5>
                        <hr><a class="nav-link active" href="index.html" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px; font-size: 16px;"><span>HTMl Domov</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Úvod</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Program</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Základ</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Elementy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Atribúty</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Nádpisy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Paragrafy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Štýlovanie</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Formatovanie</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Zakomentovávanie</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML CSS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Linky</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Obrázky</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Videa</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Ikony</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Tabuľky</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Listy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Triedy</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Id</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Charset</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML Symboly</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px;font-size: 16px;"><span>HTML </span></a></li>
                    <li class="nav-item">
                        <h5 style="padding-left: 10px;margin-top: 5px;">HTML základ</h5>
                        <hr><a class="nav-link active" href="index.html" style="padding: 16px;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 10px; font-size: 16px;"><span>HTMl Domov</span></a>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="margin-right: 50px;margin-left: 15px;">
                <div class="container-fluid" style="margin-top: 20px;">
                    <h1 style="color: var(--bs-gray-900);font-weight: bold;">HTML tutoriál</h1>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Čo to je HTML?</h5>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">HTML je štandardný značkovací jazyk pre webové stránky.</span><br></p>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">Pomocou HTML si môžeme vytvoriť svoj vlastný web.</span><br></p>
                    <p><span style="color: rgb(77, 77, 77);">HTML sa dá veľmi ľahko naučiť</span><br></p><button class="btn btn-primary" type="button" style="background: var(--bs-gray-900);">Začať&nbsp;&nbsp;<i class="fas fa-hand-point-right"></i></button>
                    <hr>
                    <h3 style="color: var(--bs-gray-900);font-weight: bold;">Živý kompilátor HTML kódu</h3>
                    <p><span style="color: rgb(77, 77, 77); background-color: rgb(255, 255, 255);">Pomocou nášho compilátora si môžte kód vyskúšať hneď a ihneď uvidíte vaše výsledky.</span><br></p>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Príklad</h5>
                    <h1 style="color: var(--bs-gray-900);font-weight: bold;">HTML tutoriál</h1>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Čo to je HTML?</h5>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">HTML je štandardný značkovací jazyk pre webové stránky.</span><br></p>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">Pomocou HTML si môžeme vytvoriť svoj vlastný web.</span><br></p>
                    <p><span style="color: rgb(77, 77, 77);">HTML sa dá veľmi ľahko naučiť</span><br></p><button class="btn btn-primary" type="button" style="background: var(--bs-gray-900);">Začať&nbsp;&nbsp;<i class="fas fa-hand-point-right"></i></button>
                    <hr>
                    <h3 style="color: var(--bs-gray-900);font-weight: bold;">Živý kompilátor HTML kódu</h3>
                    <p><span style="color: rgb(77, 77, 77); background-color: rgb(255, 255, 255);">Pomocou nášho compilátora si môžte kód vyskúšať hneď a ihneď uvidíte vaše výsledky.</span><br></p>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Príklad</h5>
                    <h1 style="color: var(--bs-gray-900);font-weight: bold;">HTML tutoriál</h1>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Čo to je HTML?</h5>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">HTML je štandardný značkovací jazyk pre webové stránky.</span><br></p>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">Pomocou HTML si môžeme vytvoriť svoj vlastný web.</span><br></p>
                    <p><span style="color: rgb(77, 77, 77);">HTML sa dá veľmi ľahko naučiť</span><br></p><button class="btn btn-primary" type="button" style="background: var(--bs-gray-900);">Začať&nbsp;&nbsp;<i class="fas fa-hand-point-right"></i></button>
                    <hr>
                    <h3 style="color: var(--bs-gray-900);font-weight: bold;">Živý kompilátor HTML kódu</h3>
                    <p><span style="color: rgb(77, 77, 77); background-color: rgb(255, 255, 255);">Pomocou nášho compilátora si môžte kód vyskúšať hneď a ihneď uvidíte vaše výsledky.</span><br></p>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Príklad</h5>
                    <h1 style="color: var(--bs-gray-900);font-weight: bold;">HTML tutoriál</h1>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Čo to je HTML?</h5>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">HTML je štandardný značkovací jazyk pre webové stránky.</span><br></p>
                    <p style="margin-bottom: 0;"><span style="color: rgb(77, 77, 77);">Pomocou HTML si môžeme vytvoriť svoj vlastný web.</span><br></p>
                    <p><span style="color: rgb(77, 77, 77);">HTML sa dá veľmi ľahko naučiť</span><br></p><button class="btn btn-primary" type="button" style="background: var(--bs-gray-900);">Začať&nbsp;&nbsp;<i class="fas fa-hand-point-right"></i></button>
                    <hr>
                    <h3 style="color: var(--bs-gray-900);font-weight: bold;">Živý kompilátor HTML kódu</h3>
                    <p><span style="color: rgb(77, 77, 77); background-color: rgb(255, 255, 255);">Pomocou nášho compilátora si môžte kód vyskúšať hneď a ihneď uvidíte vaše výsledky.</span><br></p>
                    <h5 style="color: var(--bs-gray-900);font-weight: bold;">Príklad</h5>
                </div>
            </div>
            <!-- <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer> -->
            <?php include 'template/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>