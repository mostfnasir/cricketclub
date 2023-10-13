<?php

include_once ('header.php');
if(isset($_SESSION['user_logged'])){
    header("Location: AdminDashboard.php");
exit;
}
$uname = 'admin';
$upass = 'bsl123';
if(isset($_POST['save'])){
    $name = $_POST['user'];
    $pass=$_POST['pass'];
    if($uname==$name && $upass==$pass){
        $_SESSION['user_logged'] = $uname;
        header("Location: AdminDashboard.php");
    }
}


?>
<body style="height:">
<form action="" method="post" class="contact">
    <label>User Name</label>
    <input type="text" name="user" class="form-control">
    <label>Password</label>
    <input type="password" name="pass" class="form-control">

    <input type="submit" name="save" class="btn btn-primary">

</form>
</body>
<?php
include_once ('footer.php');
?>