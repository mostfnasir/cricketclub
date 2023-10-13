<?php
include_once('connection.php');
include_once('header.php');

?>
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

                </tr>
                </thead>
                <tbody>
                <?php
                #$query = "SELECT players.id,players.name , players.image,players.role , playerrecord.id, playerrecord.matchno ,playerrecord.run, playerrecord.wicket, playerrecord.din FROM playerrecord INNER JOIN players ON players.id=playerrecord.id where playerrecord.id=$id";
                $query = "SELECT * FROM `playerrecord` where `player_id`=$id";
                $record = mysqli_query($conn, $query);

                $matchno = 0;
                $totalrun = 0;
                $totalwic = 0;
                $bestscroe = 0;
                while ($name = mysqli_fetch_assoc($record)) {

                    $totalrun = $totalrun+ $name['run'];
                    $totalwic = $totalwic+ $name['wicket'];


                    ?>
                    <tr>
                        <th><?php echo $name['din'] ?> </th>
                        <th><?php echo $matchno = $matchno + 1 ?> </th>
                        <th><?php echo $name['run'] ?> </th>
                        <th><?php echo $name['wicket'] ?> </th>

                    </tr>


                <?php

                }

                 echo $playername."<br>";
                echo"total run= ". $totalrun."<br>";
                echo"total wicket= ". $totalwic."<br>";
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



        </div>
</section>




