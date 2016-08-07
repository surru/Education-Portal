<?php

include('connection_config.php');

$conn = new mysqli($servername, $username, $password,"Video");

$sql="CREATE TABLE Latex(
	ID INT(7) NOT NULL PRIMARY KEY,
	Name VARCHAR(60) NOT NULL,
	Url VARCHAR(50) NOT NULL,
	Img VARCHAR(20) NOT NULL
)";
$conn->query($sql);
$img='Images/latex.png';

$Names=array('LaTeX Tutorial 01 your first \"hello world\" document',
	'LaTeX Tutorial 02 bold, italic, fixed-width font, and commenting',
	'LaTeX Tutorial 03 numbered lists with and without subitems.',
	'LaTeX Tutorial 04 Subscripts and Superscripts',
	'LaTeX Tutorial 05 using the align environment',
	'LaTeX Tutorial 06 matrices',
	'LaTeX Tutorial 07 typing fractions, square roots, and integrals',
	'LaTeX Tutorial 08 the difference between in-line, centered, and aligned math',
	'LaTeX Tutorial 09 tables',
	'LaTeX Tutorial 10 inserting images into your document',
	'LaTeX Tutorial 11 finding and inserting various symbols',
	'LaTeX Tutorial 12 how to label and reference equations',
	'LaTeX Tutorial 13 Two Common LaTeX errors',
	'Using LaTeX to type up a HW assignment or Test');

$Links=array('https://www.youtube.com/embed/W_yPJsF1X18',
	'https://www.youtube.com/embed/Hg9dZatXvF8',
	'https://www.youtube.com/embed/mn9FfoYWz5k',
	'https://www.youtube.com/embed/zxJf8ufaKPM',
	'https://www.youtube.com/embed/tdBG39JD4gA',
	'https://www.youtube.com/embed/xCk31_yDm18',
	'https://www.youtube.com/embed/Xl1c_1yL47k',
	'https://www.youtube.com/embed/-tu5l_n4byk',
	'https://www.youtube.com/embed/oaUubBVJS6c',
	'https://www.youtube.com/embed/zrJ2fyDCq-U',
	'https://www.youtube.com/embed/fpyuPDgwFOY',
	'https://www.youtube.com/embed/x5A5hU3_Xao',
	'https://www.youtube.com/embed/2ndz_UtryOU',
	'https://www.youtube.com/embed/EJGvtYja4Hw');
for($i=0;$i<14;$i++)
{
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO Latex (ID,Name,Url,Img)
VALUES ($i+165,'$Names[$i]','$Links[$i]','$img')";
$conn->query($sql);
}

?>