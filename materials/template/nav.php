<?php 
    $link = "http://localhost" . $SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>

<nav class="navbar navbar-dark navbar-expand-md bg-dark py-3 sticky-top">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="../index.php"><span
                class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
                style="background: #ffffff00;"><img src="../assets/img/logo.png" width="40" height="40"></span><span
                style="font-weight: bold;">Mcode Academy</span></a><button data-bs-toggle="collapse"
            class="navbar-toggler" data-bs-target="#navcol-6"><span class="visually-hidden">Toggle
                navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-6">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link active" href=""
                        style="font-weight: bold;">Materialy</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="../exercises" style="font-weight: bold;">Cvičenia</a></li>
                <?php 
                if($_SESSION['user_type']  == 'admin') {
                ?>
                <li class="nav-item"><a class="nav-link" href="../admin/index.php" style="font-weight: bold;">Admin panel</a></li>
                <?php
                }
                ?>
                <?php 
                if($_SESSION['user_type']  == 'student') {
                ?>
                <li class="nav-item"><a class="nav-link" href="../student/" style="font-weight: bold;">Profil</a></li>
                <?php
                }
                ?>
                <?php 
                if($loggeding = false) { return 0
                ?>
                
                <?php
                }elseif($_SESSION['user_type'] == 'user') {
                ?>
                <li class="nav-item"><a class="nav-link" href="../profile.php" style="font-weight: bold;">Profil</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="d-none d-md-block">
            <?php    
                $user = $_SESSION["name"];
                $user_type = $_SESSION["user_type"];

                if($_SESSION['user_type'] == 'user' || $_SESSION['user_type'] == 'admin' || $_SESSION['user_type'] == 'teacher' || $_SESSION['user_type'] == 'student') { 
                ?>
                <span style="color: white; margin-right: 15px;"><?php echo $user;?><?php //echo $user_type;?></span>
            <a class="btn btn-primary" role="button" data-bss-hover-animate="pulse" href="../scripts/logout.php?continue=<?php echo $link; ?>"
                style="background: linear-gradient(0deg, #5b77e7 0%, #49b5d2 49%, #26e8a8 99%);color: rgb(254,254,254);font-weight: bold;border-width: 0px;border-radius: 11px;padding-right: 18px;padding-left: 18px;text-align: center;">Odhlásiť
                sa <i class="fa fa-sign-out" aria-hidden="true"></i></a>
            <?php
                }else { ?>
                    <a class="btn btn-primary" role="button" data-bss-hover-animate="pulse"
                    href="../login.php?continue=<?php echo $link; ?>"
                    style="background: linear-gradient(0deg, #5b77e7 0%, #49b5d2 49%, #26e8a8 99%);color: rgb(254,254,254);font-weight: bold;border-width: 0px;border-radius: 11px;padding-right: 18px;padding-left: 18px;text-align: center;">Login</a>
                <?php } ?>

        </div>
    </div>
</nav>