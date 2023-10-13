<?php
include_once ('connection.php');
include_once ('header.php');
include_once ('sidebar.php');

?>
<link rel="stylesheet" type="text/css" href="style.css">
<section>
    <div class="container">
        <div class="row">
            <?php


            //  $query="select * from playerrecord where id=$id";
            $id = $_GET['player'];
            $query = "SELECT * from players WHERE id=$id";
            $record = mysqli_query($conn, $query);



            while ($name = mysqli_fetch_assoc($record)) {

                $playerimg = $name['image'];
                $playername=$name['name'];



            }

            ?>

            <img src="img/<?php echo $playerimg ?>" alt="player" width="200" height="200"><br>





            <table class="table">
                <thead>
                <tr>
                    <th scope="col">date</th>
                    <th scope="col">Match no</th>
                    <th scope="col">Run</th>
                    <th scope="col">Wicket</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM `playerrecord` where `player_id`=$id";
                $record = mysqli_query($conn, $query);

                $matchno = 0;
                $totalrun = 0;
                $totalwic = 0;
                $bestscroe = 0;
                while ($name = mysqli_fetch_assoc($record)) {
                    $record_id = $name['id'];
                    $totalrun = $totalrun+ $name['run'];
                    $totalwic = $totalwic+ $name['wicket'];


                    ?>
                    <tr>
                        <th><?php echo $name['din'] ?> </th>
                        <th><?php echo $matchno = $matchno + 1 ?> </th>
                        <th><?php echo $name['run'] ?> </th>
                        <th><?php echo $name['wicket'] ?> </th>
                        <th><a href="AddPlayerRecord.php?player=<?=$id?>&edit_id=<?=$record_id?>">Edit</a> </th>
                        <th><a href="admin_show_record.php?player=<?=$id?>&edit_id=<?=$record_id?>">Delete</a> </th>

                    </tr>


                    <?php

                }

                echo "<b>".$playername."<b>". "<br>";
                echo"  total run= ". $totalrun."<br>";
                echo"  total wicket= ". $totalwic."<br>";
                if ($matchno!=0){
                    $avr = $totalrun/$matchno;
                    echo "  Batting avg = ".$avr;
                }
                else
                {
                    echo "  Batting avg = 0.0";
                }
                ?>

                </tbody>

            </table>

<?php

if (isset($_GET['player']) && !empty($_GET['edit_id'])) {
    $player_id = $_GET['player'];
    $edit_id=$_GET['edit_id'];
    $delquery="DELETE FROM `playerrecord` WHERE player_id=$player_id AND id=$edit_id";
    $delchek=mysqli_query($conn,$delquery);

   if (!$delquery){
       echo "jhamela ase";
   }
}
?>

        </div>
</section>
