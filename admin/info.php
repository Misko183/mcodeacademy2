<?php

session_start();

include '../scripts/configa.php';

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:../login.php');
 };

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Domov | MCodeAcademy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'template/sidebar.php' ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'template/nav.php' ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">PHP info</h3>
                        <!-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#">
                            <i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report 
                        </a> -->
                    </div>
                    <div class="container">

                        <style type="text/css">
                        #phpinfo {}

                        #phpinfo pre {}

                        #phpinfo a:link {}

                        #phpinfo a:hover {}

                        #phpinfo table {}

                        #phpinfo .center {}

                        #phpinfo .center table {}

                        #phpinfo .center th {}

                        #phpinfo td,
                        th {}

                        #phpinfo h1 {}

                        #phpinfo h2 {}

                        #phpinfo .p {}

                        #phpinfo .e {}

                        #phpinfo .h {}

                        #phpinfo .v {}

                        #phpinfo .vr {}

                        #phpinfo img {}

                        #phpinfo hr {}
                        </style>

                        <div id="phpinfo">
                            <?php

ob_start () ;
phpinfo () ;
$pinfo = ob_get_contents () ;
ob_end_clean () ;

// the name attribute "module_Zend Optimizer" of an anker-tag is not xhtml valide, so replace it with "module_Zend_Optimizer"
echo ( str_replace ( "module_Zend Optimizer", "module_Zend_Optimizer", preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo ) ) ) ;

?>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © MCodeAcademy 2023</span><span>Created
                            by <a href="https://sladecek.sk">sladecek</a> with ❤</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>