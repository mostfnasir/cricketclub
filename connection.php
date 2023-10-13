<?php
$server = "localhost";
$user= "root";
$pass = "root";
$dbname="bsl";
$conn = mysqli_connect("$server",$user,$pass,$dbname);
if (!$conn){
    die("connection error".mysqli_connect_error());
}
else {

}