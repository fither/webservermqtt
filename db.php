<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mqttProject";

    $server = "remotemysql.com";
    $username = "RDWcL5eTnF";
    $password = "XCrbtxKB9a";
    $dbname = "RDWcL5eTnF";

    $conn = new mysqli($server, $username, $password, $dbname);

    if($conn->connect_error){
        die("Baglanti hatasi: " . $conn->connect_error);
    }

?>