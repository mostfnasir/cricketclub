<?php


if($_SESSION['user_logged']) {
    include_once('header.php');
    ?>
    <h2 style="text-align: center">Welcome to Admin Pannel</h2>


    <?php
    include_once('sidebar.php');
    include_once('footer.php');
}else{
    header("Location: index.php");
}
?>

