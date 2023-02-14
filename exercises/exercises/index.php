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
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Brand-icons.css" />
</head>
<body style="border-top-style: none;">
<?php include 'template/nav.php'; ?>
<div class="container" style="margin-top: 15%;margin-bottom:15%;">
        <div class="row">
            <div class="col d-xxl-flex justify-content-xxl-end align-items-xxl-center"><a href="html/" class="btn btn-primary" type="button" style="font-size: 30px;letter-spacing: 8px;background: var(--bs-teal);">HTML</a></div>
            <div class="col-xxl-2 d-xxl-flex justify-content-xxl-center align-items-xxl-center"><button class="btn btn-primary" type="button" style="font-size: 30px;letter-spacing: 8px;background: var(--bs-teal);">CSS</button></div>
            <div class="col d-xxl-flex justify-content-xxl-start align-items-xxl-center"><button class="btn btn-primary" type="button" style="font-size: 30px;letter-spacing: 8px;background: var(--bs-teal);">PHP</button></div>
        </div>
    </div>
<?php include 'template/footer.php'; ?>
</body>

</html>