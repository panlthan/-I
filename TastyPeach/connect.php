<?php 
    $host = "localhost";
    $db = "customer";
    $usr = "root";
    $pwd = "";
    $port = "3306";
    $conn = mysqli_connect($host,$usr,$pwd,$db,$port);
    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
    mysqli_query($conn, 'SET NAMES \'utf8\'');


?>