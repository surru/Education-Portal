<?php

include('connection_config.php');

// Create Database DB
$conn = new mysqli($servername, $username, $password);
$sql="CREATE DATABASE DB";
$conn->query($sql);

// Create Database Comments
$conn = new mysqli($servername, $username, $password);
$sql="CREATE DATABASE Comments";
$conn->query($sql);

// Create Database Video
$conn = new mysqli($servername, $username, $password);
$sql="CREATE DATABASE Video";
$conn->query($sql);

?>