<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'home_munira';
$mysqli = mysqli_connect($host,$user,$pass,$db) ;
if(!$mysqli) die('sorry'.$mysqli->error);
//else echo "yes";

