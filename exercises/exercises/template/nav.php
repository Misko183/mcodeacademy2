<?php 
    $link = $_SERVER["REQUEST_URI"];
?>

<nav class="navbar navbar-dark navbar-expand-md bg-dark py-3 sticky-top">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="../"><span
                class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
                style="background: #ffffff00;"><img src="../../assets/img/logo.png" width="40" height="40"></span><span
                style="font-weight: bold;">Mcode Academy</span></a><button data-bs-toggle="collapse"
            class="navbar-toggler" data-bs-target="#navcol-6"><span class="visually-hidden">Toggle
                navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-6">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="../../materials"
                        style="font-weight: bold;">Materialy</a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="../" style="font-weight: bold;">Cvičenia</a></li>
                <?php 
                if(isset($_SESSION['user_type']) && $_SESSION['user_type']  == 'admin') {
                ?>
                <li class="nav-item"><a class="nav-link" href="../a../dmin/index.php" style="font-weight: bold;">Admin panel</a></li>
                <?php
                }
                ?>
                <?php 
                if(isset($_SESSION['user_type']) && $_SESSION['user_type']  == 'student') {
                ?>
                <li class="nav-item"><a class="nav-link" href="../../student/" style="font-weight: bold;">Profil</a></li>
                <?php
                }
                ?>
                <?php 
                if($loggeding = false) { return 0
                ?>
                
                <?php
                }elseif(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'user') {
                ?>
                <li class="nav-item"><a class="nav-link" href="../../profile/" style="font-weight: bold;">Profil</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="d-none d-md-block">
            <?php    
                $user = isset($_SESSION['user_type']) && $_SESSION["name"];
                $user_type = isset($_SESSION['user_type']) && $_SESSION["user_type"];

                if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'user' || isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin' || isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'teacher' || isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'student') { 
                ?>
                <span style="color: white; margin-right: 15px;"><?php echo $_SESSION["name"];?><?php //echo $user_type;?></span>
                <a 
                    role="button" 
                    data-bss-hover-animate="pulse" 
                    href="../../scripts/logout.php?continue=<?php echo $link; ?>"
                    style="color: white; border: 1px solid white; padding: 5px; border-radius: 8px; text-decoration: none">
                    Odhlásiť sa 
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            <?php
                }else { ?>
                   <a 
                        style="color: white;"
                        role="button " 
                        data-bss-hover-animate="pulse"
                        href="../../login.php?continue=<?php echo $link ?>"
                        style="">Prihlásiť sa</a>
                        <span style="color: white;">|</span>
                        <a 
                        style="color: white;"
                        role="button " 
                        data-bss-hover-animate="pulse"
                        href="../../register.php?continue=<?php echo $link ?>"
                        style="">Registrovať sa</a>
                <?php } ?>

        </div>
    </div>
</nav>