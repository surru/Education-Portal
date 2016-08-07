<?php

include('connection_config.php');

$conn = new mysqli($servername, $username, $password,"DB");

$sql="CREATE TABLE Users(
    ID INT(7) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Email VARCHAR(50) NOT NULL,
    Password VARCHAR(20) NOT NULL,
    UserName VARCHAR(30) NOT NULL,
    MobileNumber BIGINT(10) NOT NULL,
    SecurityQ VARCHAR(20) NOT NULL,
    Answer VARCHAR(20) NOT NULL
)";
$conn->query($sql);

?>