<?php
include_once ('connection.php');
include_once ('header.php');
include_once ('sidebar.php');


if($_SESSION['user_logged']) {


    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];

        $img = $_POST['image'];
        $query = "INSERT INTO players (name,image,role) VALUES ('$name','$img','$role')";
        $check = mysqli_query($conn, $query);
        if ($check) {
            echo "inserted";

        } else {
            echo "problem";
        }

    }

    ?>
    <h2 style="text-align: center">Add a player</h2>
    <form action="" method="post" class="contact">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
        <label>role</label>
        <input type="text" name="role" class="form-control">
        <input type="submit" name="save" class="btn btn-primary">

    </form>
    <?php

}
else{
    header("Location: index.php");
}

include_once ('footer.php');
?>