<?php
session_start();
include_once ('connection.php');
include_once ('header.php');
if (isset($_SESSION['user_logged'])) {
    include_once('sidebar.php');
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
    <div class="playertitle">
        <h2>Our players</h2>
    </div>
    <div class="row">
        <?php
        $query = "select * from players";
        $result= mysqli_query($conn,$query);
        while($name= mysqli_fetch_assoc($result)) { ?>


            <div class="col-sm-3">
                <div class="player_pic">
                    <?php echo "<a href='ShowPlayerRecord.php'><img src='img/" . $name['image'] . "' width='100%' height='200'/></a>"; ?>
                    <?php echo "<a href='ShowPlayerRecord.php?player=".$name['id']."'><h4>". $name['name']."</h4></a>"?>
                    <?php echo "<h4>" . $name['role']."</h4>"?>
                </div>
            </div>
        <?php
        } ?>



    </div>
    <?php

    $id = $name['id'];
    echo $id;
    ?>
</div>


