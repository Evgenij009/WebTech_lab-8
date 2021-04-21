<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = trim(strip_tags($_GET['lang']));
    $date = time() + 30 * 24 * 60 * 60;
    setcookie('lang', trim(strip_tags($_GET['lang'])), $date);
} else if ($_COOKIE['lang']) {
    $_SESSION['lang'] = $_COOKIE['lang'];
} else {
    $_SESSION['lang'] = 'en';
}
if (isset($_SESSION['lang']))
    $dict = parse_ini_file($_SESSION['lang'] . '.ini');

?>
<!DOCTYPE html>
<html>

<head>
    <title>lab-8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include("header.php") ?>

    <div class="basic">
        <div class="container">
            <p><?php echo $dict['TEXT_PAGE2'] ?></p>
        </div>
    </div>

</body>

</html>