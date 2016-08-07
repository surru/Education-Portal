<?php

include('connection_config.php');

for ($i=1; $i <= 294; $i++) {
	# code...
	$conn = new mysqli($servername, $username, $password,"Comments");
	$sql="CREATE TABLE Comment$i(
	Cmt VARCHAR(500) NOT NULL,
	Username VARCHAR(30) NOT NULL,
	Time TIMESTAMP
	)";
$conn->query($sql);
}

?>