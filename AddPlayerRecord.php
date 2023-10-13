<?php
include_once ('connection.php');
include_once ('header.php');
include_once ('sidebar.php');



if (isset($_POST['save'])){

    $id=$_GET['player'];
    echo $id;
    $date=$_POST['date'];
    $run=$_POST['run'];
    $wicket=$_POST['wicket'];
        echo($date);
    $query = "INSERT INTO playerrecord (run,wicket,id,din) VALUES ($run,$wicket,$id,$date)";
    $check = mysqli_query($conn,$query);
    if($check){
        echo "inserted";
    }
    else{
        echo "problem";
    }
}
if(isset($_GET['edit_id'])) {
    $player_id = $_GET['player'];
    $edit_id = $_GET['edit_id'];
    $sql = "select * from playerrecord WHERE id =$edit_id AND player_id=$player_id";
    $check = mysqli_query($conn, $sql);
    $record = mysqli_fetch_assoc($check);
    if (isset($_POST['update'])){
        $player_id = $_GET['player'];
        $id=$edit_id ;
        $date=$_POST['date'];
        $run=$_POST['run'];
        $wicket=$_POST['wicket'];
        $upquery = "UPDATE `playerrecord` SET `run`=$run,`wicket`=$wicket,`player_id`=$player_id,`din`='$date' WHERE `id`=$edit_id ";
        print_r($upquery);
        $done=mysqli_query($conn,$upquery);
        if (!$done){
            echo 'vul hosie';
        }

    }

}
?>
<form action="" method="post" class="contact">
  <label>date</label>
    <input type="date" name="date" value="<?=isset($record['din'])?$record['din']:'' ?>" class="form-control">
    <label>Run</label>
    <input type="number" name="run" value="<?=isset($record['run'])?$record['run']:'' ?>" class="form-control">
    <label>wicket</label>
    <input type="number" name="wicket" value="<?=isset($record['wicket'])?$record['wicket']:'' ?>" class="form-control">
    <input type="submit" name="<?=isset($edit_id)?'update':'save' ?>" value="<?=isset($edit_id)?'update record':'add record' ?>" class="btn btn-primary">
</form>
<?php
include_once ('footer.php');

?>