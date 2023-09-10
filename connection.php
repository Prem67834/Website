<?php
$dbhost="localhost";
$dbuser="root";
$dbname="login_sample_db";
$dbpassword="";
if(!$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){
    die("failed to connect !!!!");
}
?>