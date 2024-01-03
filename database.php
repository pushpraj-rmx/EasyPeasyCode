<?php
    $hostName = "sql106.infinityfree.com";
    $dbUser = "if0_35587290";
    $dbPass = "ZDlOIFihzSEs";
    // $dbName = "easypeasycode";
    $dbName = "if0_35587290_easy";	
    $conn = mysqli_connect($hostName,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die("Something went wrong!");
    }
?>