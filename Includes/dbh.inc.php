<?php

$serverName= "localhost";
$dBUserName= "root";
$dBPassword= "";
$dBName= "hack_bd";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}