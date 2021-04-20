<?php
session_start();
header("Content-Type:text/html;charset=UTF-8");

if ($_GET['lang']) {
    $_SESSION['lang'] = trim(strip_tags($_GET['lang']));
    setcookie('lang', trim(strip_tags($_GET['lang'])), $date);
} else if ($_COOKIE['lang']) {
    $_SESSION['lang'] = $_COOKIE['lang'];
} else {
    $_SESSION['lang'] = 'en';
}


// $lang = isset($_GET["lang"]) ? $_GET["lang"] : "ru";
// $array = parse_ini_file($lang . ".ini");
// echo $array["HELLO"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>lab-8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="header__inner">
                <div class="lang">
                    <label for="lang">Choose language<label>
                            <select name="lang">
                                <option value="en">EN</option>
                                <option value="ru">RU</option>
                            </select>
                </div>

                <nav class="nav">
                    <a href="#" class="nav__link">Main</a>
                    <a href="page1.php" class="nav__link">Page1</a>
                    <a href="page2.php" class="nav__link">Page2</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="basic">
        <div class="container">
        </div>
    </div>

</body>

</html>