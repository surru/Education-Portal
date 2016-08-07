<?php

include('connection_config.php');

$conn = new mysqli($servername, $username, $password,"Video");

$sql="CREATE TABLE Java(
	ID INT(7) 	NOT NULL PRIMARY KEY,
	Name VARCHAR(60) NOT NULL,
	Url VARCHAR(50) NOT NULL,
	Img VARCHAR(20) NOT NULL
	)";
$conn->query($sql);
$img='Images/Java.png';

$Names=array('0-1. Welcome to Java',
'0-2. Is this course for you: Java',
'Java: 0-3. Using the exercise files',
'1-1. The history of Java',
'1-2. Understanding the principles of Java',
'1-3. Java compilation and syntax',
'1-4. Choosing a development environment',
'2-1. Installing Java on Windows',
'2-2. Installing Eclipse on Windows',
'2-3. Exploring Java on Mac OS X Leopard and Snow Leopard',
'2-4. Installing Java on Mac OS X Lion',
'2-5. Installing Eclipse on Mac OS X',
'3-1. Creating a Hello World application',
'3-2. Exploring the Eclipse IDE',
'3-3. Compiling and running from the command line',
'3-4 Passing arguments to the application',
'3-5. Using the Java API documentation',
'3-6. Memory management and garbage collection',
'4-1. Everything is an object',
'4-2. Declaring and initializing variables',
'4-3. Working with numbers',
'4-4. Converting numeric values',
'4-5. Understanding operators',
'4-6. Working with character values',
'4 7 Working with boolean values',
'4-8. Outputting primitive values as strings',
'4-9. Creating a simple calculator application',
'5-1. Writing conditional code',
'5-2. Using the switch statement',
'5-3. Repeating code blocks with loops',
'5-4. Creating reusable code with methods',
'5-5. Declaring methods with arguments',
'5-6. Overloading method names with different signatures',
'5-7. Passing arguments by reference or by value',
'5-8. Creating a more complex calculator application',
'6-1. Using the String class',
'6-2. Building strings with StringBuilder',
'6-3. Parsing string values',
'6-4. Working with date values',
"7-1. Understanding compile-time vs. runtime errors",
"7-2. Handling exceptions with try-catch");

$Links=array('https://www.youtube.com/embed/2FnO7MqiNyE',
'https://www.youtube.com/embed/a8AwhtSRX04',
'https://www.youtube.com/embed/_H-mEWjDFUU',
'https://www.youtube.com/embed/S6yPUuqwYK4',
'https://www.youtube.com/embed/GWvdZDS2_pQ',
'https://www.youtube.com/embed/Tt0ROwsN_4U',
'https://www.youtube.com/embed/gYLwO0ezN34',
'https://www.youtube.com/embed/tSnYkjtIQTw',
'https://www.youtube.com/embed/gHBhB-xobL8',
'https://www.youtube.com/embed/uD6bqfi1bbI',
'https://www.youtube.com/embed/8ma4skz4j_8',
'https://www.youtube.com/embed/6oCBwY-bOA8',
'https://www.youtube.com/embed/UUfmSJ1TKWc',
'https://www.youtube.com/embed/D2wgJ5smavA',
'https://www.youtube.com/embed/j7b-n9EJUMA',
'https://www.youtube.com/embed/AJu6IwMKQyw',
'https://www.youtube.com/embed/E3wCmOo5Mrc',
'https://www.youtube.com/embed/pDNdVWhRQTw',
'https://www.youtube.com/embed/CStLITAwMMw',
'https://www.youtube.com/embed/cgAY2lAwcgs',
'https://www.youtube.com/embed/MVR9uRDGlzw',
'https://www.youtube.com/embed/xhoLU8bbAxI',
'https://www.youtube.com/embed/HO3f-qKXIz8',
'https://www.youtube.com/embed/SBLcApBJIog',
'https://www.youtube.com/embed/RVrud6mkeM4',
'https://www.youtube.com/embed/vb7-zODRDco',
'https://www.youtube.com/embed/MT7FAKcBwCI',
'https://www.youtube.com/embed/JthiCEobhCI',
'https://www.youtube.com/embed/EgJHDbDaOec',
'https://www.youtube.com/embed/AKJviTAuLBo',
'https://www.youtube.com/embed/MH9SmMpN9IM',
'https://www.youtube.com/embed/23nFLkyca1c',
'https://www.youtube.com/embed/nfsw5O3lhXY',
'https://www.youtube.com/embed/b3MkobmFvP8',
'https://www.youtube.com/embed/xPylJOCUG9A',
'https://www.youtube.com/embed/OShx9q9iQPM',
'https://www.youtube.com/embed/JHjXDicqaA8',
'https://www.youtube.com/embed/NVoF8SlDJyA',
'https://www.youtube.com/embed/f93TQxGwEDA',
'https://www.youtube.com/embed/f93TQxGwEDA',
'https://www.youtube.com/embed/TCJqek-_eZ0',
'https://www.youtube.com/embed/C_3HVBEHtgM');
for($i=0;$i<42;$i++)
{
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO Java (ID,Name,Url,Img)
VALUES ($i+123,'$Names[$i]','$Links[$i]','$img')";
$conn->query($sql);
}

?>
