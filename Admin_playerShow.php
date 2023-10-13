<?php
include_once ('connection.php');
include_once ('header.php');
include_once ('sidebar.php');

if($_SESSION['user_logged']) {

    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div class="container">
        <div class="playertitle">
            <h2>Our players</h2>
        </div>
        <div class="row">
            <?php
            $query = "select * from players";
            $result = mysqli_query($conn, $query);
            while ($name = mysqli_fetch_assoc($result)) { ?>


                <div class="col-sm-3">
                    <div class="player_pic">
                        <?php echo "<img src='img/" . $name['image'] . "' width='100%' height='200'/>"; ?>
                        <?php echo "<h4>" . $name['name'] . "</h4>" ?>
                        <?php echo "<h4>" . $name['role'] . "</h4>" ?>
                        <?php echo "<a href='AddPlayerRecord.php?player=" . $name['id'] . "'>Add record | </a>" ?>
                        <?php echo "<a href='admin_show_record.php?player=" . $name['id'] . "'>show record | </a>" ?>
                        <?php echo "<a href='admin_playerShow.php?player=" . $name['id'] . "'>Delete Player</a>" ?>
                    </div>
                </div>
                <?php
            } ?>


        </div>
        <?php

        if (isset($_GET['player'])) {
            $id = $_GET['player'];
            $playerdelete = "delete from players WHERE id =$id";

            $check_delplayer = mysqli_query($conn, $playerdelete);
            if (!$check_delplayer) {
                echo "jhamela ase";
            }

        }
        ?>
    </div>


    <?php
}
else{
    header("Location: index.php");
} ?>