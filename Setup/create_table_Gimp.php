<?php

include('connection_config.php');

$conn = new mysqli($servername, $username, $password,"Video");

$sql="CREATE TABLE GIMP(
	ID INT(7) 	NOT NULL PRIMARY KEY,
	Name VARCHAR(60) NOT NULL,
	Url VARCHAR(50) NOT NULL,
	Img VARCHAR(20) NOT NULL
	)";
$conn->query($sql);
$img='Images/GIMP.png';

$Names=array('Learn GIMP Tutorial - Day 1 - Size Crop Rotate and Flip ',
'Learn GIMP Tutorial - Day 2 - Logo Design ',
'Learn GIMP Tutorial - Day 3 - Selection Tools ',
'Learn Gimp Tutorial - Day 4 - Path Tool ',
'Learn GIMP Tutorial - Day 5 - Create a Vignette with Quickmask ',
'Learn GIMP Tutorial - Day 6 - How to Remove Red Eye ',
'Learn GIMP Tutorial - Day 7 - How to Draw a Straight Line in Gimp ',
'Learn GIMP Tutorial - Day 8 - Layer Mask in Gimp ',
'Learn GIMP Tutorial - Day 9 - How to Swap Faces in GIMP ',
'Learn GIMP Tutorial - Day 10 - How to Clean Up Faces ',
'Learn GIMP Tutorial - Day 11 - User Interface and Toolbar Layout ',
'Learn GIMP Tutorial - Day 12 - Threshold Aliasing and Curves ',
'Learn Gimp Tutorial - Day 13 - Change Background Color ',
'Learn GIMP Tutorial - Day 14 - Sketch Effect ',
'Learn GIMP Tutorial - Day 15 - Custom Brushes ',
'Gimp Tutorial - 16 - Water Reflection in GIMP ',
'GIMP Tutorial - 17 - HDR Photo With GIMP ');

$Links=array('https://www.youtube.com/embed/bqF4X1bs6NA',
'https://www.youtube.com/embed/ywQ9zJKJQSI',
'https://www.youtube.com/embed/LxzWcB1JOlo',
'https://www.youtube.com/embed/bG3mo0UvM3k',
'https://www.youtube.com/embed/7Uur9IWiPX0',
'https://www.youtube.com/embed/WsUNWfXjIzI',
'https://www.youtube.com/embed/_WoGVIbyROE',
'https://www.youtube.com/embed/GHPj_upb4Fw',
'https://www.youtube.com/embed/1LZxnCPUICA',
'https://www.youtube.com/embed/_9LTLuMaMCI',
'https://www.youtube.com/embed/UyXtj5unYbM',
'https://www.youtube.com/embed/F7yX_301Gmk',
'https://www.youtube.com/embed/BpFo1DzGQ18',
'https://www.youtube.com/embed/vH_TN73QGMU',
'https://www.youtube.com/embed/Vfi2tv-lqdk',
'https://www.youtube.com/embed/B9ort7B7K3s',
'https://www.youtube.com/embed/CEKAze4aEd8');

for($i=0;$i<17;$i++)
{
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO GIMP (ID,Name,Url,Img)
VALUES ($i+59,'$Names[$i]','$Links[$i]','$img')";
$conn->query($sql);
}

?>
