<?php
    $host = "localhost";
    $user = "mo0647";
    $pw = "sjsksk79513!";
    $db = "mo0647";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf8");
    // if(mysqli_connect_errno()){
    //     echo "database connect false";
    // } else {
    //     echo "database connect true";
    // }
?>