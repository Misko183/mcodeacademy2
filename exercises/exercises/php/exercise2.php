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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <title>PHP cvičenia | MCodeAcademy</title>
    <link rel="shortcut icon" href="../../../assets/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Brand-icons.css" />
</head>
<body style="border-top-style: none;">
<?php include 'template/nav.php'; ?>
    <div class="row g-0">
        <div class="col-xxl-2 d-xl-flex justify-content-xl-center" style="height: 100vh;">
            <ul class="nav nav-tabs d-flex flex-column align-items-xl-center"
                style="width: 100%; box-shadow: 1px 0px 4px">
                <li class="nav-item d-flex flex-row">
                    <a class="nav-link active" href="../" style="
                font-size: 18px;
                border-style: none;
                border-top-style: none;
              "><i class="fas fa-home" style="font-size: 24px"></i></a>
                </li>
                <li class="nav-item" style="
              background: var(--bs-gray-700);
              width: 100%;
              padding-left: 15px;
            ">
                    <h4 style="color: rgb(255, 255, 255)">PHP syntax</h4>
                </li>
                <li class="nav-item" style="width: 100%; text-align: center; color: var(--bs-gray)">
                    <a class="nav-link" href="index.php" style="
                color: var(--bs-gray-700);
                font-weight: bold;
                letter-spacing: 2px;
              ">Cvičenie 1</a>
                </li>
                <li class="nav-item" style="
              width: 100%;
              text-align: center;
              background: var(--bs-cyan);
              color: rgb(255, 255, 255);
            ">
                    <a class="nav-link" href="exercise2.php" style="
                color: rgb(255, 255, 255);
                font-weight: bold;
                letter-spacing: 2px;
              ">Cvičenie 2</a>
                </li>
            </ul>
        </div>
        <div class="col-xxl-8" style="margin-left:25px;margin-top:50px;">
            <h1>Cvičenie:</h1>
            <p>Napíšte správnu úvodnú a zatvorenú značku pre PHP skripty.</p>
            <div class="d-flex flex-column" style="
            border-radius: 10px;
            background: rgba(145, 145, 145, 0.27);
            padding-top: 10px;
            padding-left: 15px;
            padding-bottom: 60px;
            padding-right: 21px;
          ">
                <p>
                <form action="" method="post">
                    <input type="text" name="answer1" style="max-width: 40px;"><br>
                    echo "Ahoj Svet";<br>
                    <input type="text" name="answer2" style="max-width: 30px;">
                    </p>
                    <input class="btn btn-info" type="submit" name="submit" style="margin-left: 13px"
                value="Odoslať odpoveď">
                    <button class="btn btn-dark ms-auto" type="button" name="show_answer" onclick="showAnswer()">
                        Ukáž odpoveď
                    </button>
                    <p id="correct_answer" style="display: none;">Správna odpoveď je <code>&lt;?php a ?&gt;</code></p>
            </div>
            </form>
            <?php
  if (isset($_POST['submit'])) {
    $answer = $_POST['answer1'];
    $asnwer2 = $_POST['answer2'];
    if ($answer == "<?php" && $asnwer2 == "?>") { echo "
<p style='color:green'>Správne!</p>
"; } else { echo "<p style='color:red'>Nesprávne!</p>
"; } } 
?>
        </div>
    </div>
    <?php include 'template/footer.php'; ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
    function showAnswer() {
        document.getElementById("correct_answer").style.display = "block";
    }
    </script>
</body>

</html>