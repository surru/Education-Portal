<?php

session_start();
$_SESSION["Username"]="Guest";
header('Location: home.php');

?>