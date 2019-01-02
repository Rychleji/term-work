<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/styl.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>HC Dynamo Pardubice - Ticket reservation system</title>
</head>
<body>
<header>
    <div class="user-area">
        <div class="full-width-wrapper">
            <a href="<?= BASE_URL . "?page=login" ?>">Login</a>
            <a href="<?= BASE_URL . "?page=signup" ?>">Sign up</a>
        </div>
    </div>
    <div class="header-box-bg">
        <div class="header-box">
            <div id="header-logo-box">
                <img id="header-logo" src="img/logo-dynamo.png" alt="Dynamo Logo"></div>
            <div id="header-web-title">Dynamo Pardubice</div>
            <nav id="nav">
                <a id="first" href="<?= BASE_URL ?>">HOME</a>
                <a id="second" href="<?= BASE_URL . "?page=teams" ?>">TEAMS</a>
                <a id="third" href="<?= BASE_URL . "?page=matches" ?>">MATCHES</a>
                <a id="fourth" href="<?= BASE_URL . "?page=contacts" ?>">CONTACTS</a>
                <hr>
            </nav>
        </div>
    </div>
</header>
<?php
if (!isset($_GET["page"])) {
    include "pages/landing.php";
}
?>
<main>
    <?php
    if (isset($_GET["page"])) {
        $file = "./pages/" . $_GET["page"] . ".php";
        if (file_exists($file)) {
            include $file;
        }
    } else {
        include "./pages/default.php";
    }
    ?>
</main>
<footer>
    <div class="full-width-wrapper">
        konec stranky ..
    </div>
</footer>
</body>
</html>