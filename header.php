
<!Doctype>
<html>
<head>
    <title>BSL Cricket Club</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <div class="logo"><img src="img/logo2.png"/></div>
            </div>
            <div class="col-sm-8">
                <div class="heading"><h1>BSL UNITED CLUB</h1></div>
                <?php

                session_start();
                if (isset($_SESSION['user_logged'])) {
                    echo 'You are logged in as: <b>'.$_SESSION['user_logged'].'</b>';
                } else {
                    ?>
                    <a style="float: right" href="adminlogin.php">Admin LogIn</a>
                    <?php
                }
                ?>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="showplayer.php">Players</a></li>
                    <li><a href="fixture.php">Fixture</a></li>
                    <li><a href="#">Photos</a></li>
                </ul>

            </div>
        </div>
    </div>
</header>
<?php
if (isset($_SESSION['user_logged'])) {
    include_once('sidebar.php');
}?>