<?php

// server
// $hostName = "sql106.infinityfree.com";
// $dbUser = "if0_35587290";
// $dbPass = "ZDlOIFihzSEs";
// $dbName = "if0_35587290_easy";

// localhost 

$hostName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "easypeasycode";




$conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong!");
}
