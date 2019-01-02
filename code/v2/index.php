<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/styl.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>HC Dynamo Pardubice - Systém rezervace vstupenek</title>
</head>
<body>
<header>
    <div class="user-area">
        <div class="full-width-wrapper">
            <button id="login-btn">Login</button>
            <button id="signup-btn">Sign up</button>
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
<div id="user-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="document.getElementById('user-modal').style.display='none'">×</span>
        <img src="img/logo-dynamo.png">
        <h2>User login</h2>
        <form action="action_page.php">
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="psw" required>
            <button type="submit" class="modalbtn">Login</button>
        </form>
    </div>
</div>
<script src="script/modal.js"></script>
<?php
if (!isset($_GET["page"])) {
    include "pages/landing.php";
}
?>
<!--<section id="matches-bg">
    <script src="script/countdown.js"></script>
    <div class="flex-wrap-evenly">
        <div class="upcoming-match">
            <div id="upcoming-date">
                20 Nov 2018 / 17:30 / Tipsport Arena
            </div>
            <div id="upcoming-teams">
                HC Dynamo Pardubice - HC Sparta Praha
            </div>
            <div id="counter">
                <div class="digit">
                    <span id="days">00</span>
                    <span>D</span>
                </div>
                <div class="digit">
                    <span id="hours">00</span>
                    <span>H</span>
                </div>
                <div class="digit">
                    <span id="minutes">00</span>
                    <span>M</span>
                </div>
                <div class="digit">
                    <span id="seconds">00</span>
                    <span>S</span></div>
            </div>
            <a href="">Buy tickets</a>
        </div>
    </div>
</section>-->
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