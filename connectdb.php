<?php
    $host = "localhost";
    $db = "s6014421010";
    $usr = "s6014421010";
    $pwd = "webit60";
    $port = "3306";
    $conn = mysqli_connect($host,$usr,$pwd,$db,$port);
    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
    mysqli_query($conn, 'SET NAMES \'utf8\'');
?>
