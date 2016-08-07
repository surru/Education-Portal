<?php

include('connection_config.php');

$conn = new mysqli($servername, $username, $password,"Video");

$sql="CREATE TABLE Python(
	ID INT(7) 	NOT NULL PRIMARY KEY,
	Name VARCHAR(60) NOT NULL,
	Url VARCHAR(50) NOT NULL,
	Img VARCHAR(20) NOT NULL
	)";
$conn->query($sql);
$img='Images/Python.png';

$Names=array('[Python] 01 Welcome',
'[Python] 02 Understanding prerequisites for Python',
'[Python] 03 Using the exercise files',
'[Python] 04 Getting started with Hello World',
'[Python] 05 Selecting code with conditionals',
'[Python] 06 Repeating code with a loop',
'[Python] 07 Reusing code with a function',
'[Python] 08 Creating sequences with generator functions',
'[Python] 09 Reusing code and data with a class',
'[Python] 10 Greater reusability with inheritance and polymorphism',
'[Python] 11 Handling errors with exceptions',
'[Python] 12 Installing Python 3 and Eclipse for Mac',
'[Python] 13 Installing Python 3 and Eclipse for Windows',
'[Python] 14 Creating a main script',
'[Python] 15 Understanding whitespace in Python',
'[Python] 16 Commenting code',
'[Python] 17 Assigning values',
'[Python] 18 Selecting code and values with conditionals',
'[Python] 19 Creating and using functions',
'[Python] 20 Creating and using objects',
'[Python] 21 Understanding variables and objects in Python',
'[Python] 22 Distinguishing mutable and immutable objects',
'[Python] 23 Using numbers',
'[Python] 24 Using strings',
'[Python] 25 Aggregating values with lists and tuples',
'[Python] 26 Creating associative lists with dictionaries',
'[Python] 27 Finding the type and identity of a variable',
'[Python] 28 Specifying logical values with True and False',
'[Python] 29 Selecting code with if and else conditional statements',
'[Python] 30 Setting multiple choices with elif',
'[Python] 31 Understanding other strategies for multiple choices',
'[Python] 32 Using the conditional expression',
'[Python] 33 Creating loops with while',
'[Python] 34 Iterating with for',
'[Python] 35 Enumerating iterators',
'[Python] 36 Controlling loop flow with break continue and else',
'[Python] 37 Performing simple arithmetic',
'[Python] 38 Operating on bitwise values',
'[Python] 39 Comparing values',
'[Python] 40 Operating on Boolean values',
'[Python] 41 Operating on parts of a container with the slice operator',
'[Python] 42 Understanding operator precedence',
'[Python] 43 Using the re module',
'
[Python] 44 Searching with regular expressions
','
[Python] 45 Replacing with regular expressions
','
[Python] 46 Reusing regular expressions with re compile
','
[Python] 47 Learning how exceptions work
','
[Python] 48 Handling exceptions
','
[Python] 49 Raising exceptions
','
[Python] 50 Defining functions
','
[Python] 51 Using lists of arguments
','
[Python] 52 Using named function arguments
','
[Python] 53 Returning values from functions
','
[Python] 54 Creating a sequence with a generator function
','
[Python] 55 Understanding classes and objects
','
[Python] 56 Using methods
','
[Python] 57 Using object data
','
[Python] 58 Understanding inheritance
','
[Python] 59 Applying polymorphism to classes
','
[Python] 60 Using generators',
'
[Python] 61 Using decorators
','
[Python] 62 Understanding strings as objects
','
[Python] 63 Working with common string methods
','
[Python] 64 Formatting strings with str format
','
[Python] 65 Splitting and joining strings
','
[Python] 66 Finding and using standard string methods
','
[Python] 67 Creating sequences with tuples and lists
','
[Python] 68 Operating on sequences with built in methods
','
[Python] 69 Organizing data with dictionaries
','
[Python] 70 Operating on character data with bytes and byte arrays
','
[Python] 71 Opening files
','
[Python] 72 Reading and writing text files
','
[Python] 73 Reading and writing binary files
','
[Python] 74 Creating a database with SQLite 3
','
[Python] 75 Creating retrieving updating and deleting records
','
[Python] 76 Creating a database object
','
[Python] 77 Using standard library modules
','
[Python] 78 Finding third party modules
','
[Python] 79 Creating a module
','
[Python] 80 Dealing with syntax errors
','
[Python] 81 Dealing with runtime errors
','
[Python] 82 Dealing with logical errors
','
[Python] 83 Using unit tests
','
[Python] 84 Normalizing a database interface
','
[Python] 85 Deconstructing a database application',
'[Python] 86 Displaying random entries from a database',
'[Python] 87 Goodbye');
$Links=array('https://www.youtube.com/embed/DmJJTa2snk0',
'https://www.youtube.com/embed/Y3cLZN3KF9o',
'https://www.youtube.com/embed/Y3cLZN3KF9o',
'https://www.youtube.com/embed/aZ3cQ49ZtR8',
'https://www.youtube.com/embed/kUX9BMfNIgY',
'https://www.youtube.com/embed/jEbobcnCc_A',
'https://www.youtube.com/embed/36QE-85QRdA',
'https://www.youtube.com/embed/T2HFDiSpZX4',
'https://www.youtube.com/embed/pa2NkcRPHZM',
'https://www.youtube.com/embed/6YjyC4hWJfk',
'https://www.youtube.com/embed/0ADErsK8Afo',
'https://www.youtube.com/embed/MaRsp07UY68',
'https://www.youtube.com/embed/l5FyN2YoYWw',
'https://www.youtube.com/embed/nQKhrnMr7ag',
'https://www.youtube.com/embed/LxXhTX4Bp4A',
'https://www.youtube.com/embed/8faov-1b594',
'https://www.youtube.com/embed/NQvLNQjZGuE',
'https://www.youtube.com/embed/PxOVcHjmM8M',
'https://www.youtube.com/embed/iRv06VNT6o4',
'https://www.youtube.com/embed/2-6BaYFW0eU',
'https://www.youtube.com/embed/QxMfk90PVKI',
'https://www.youtube.com/embed/efvvbW5H5Ks',
'https://www.youtube.com/embed/we4eB2rcHnE',
'https://www.youtube.com/embed/EKSCylCEPhM',
'https://www.youtube.com/embed/wWDBGN1QFhw',
'https://www.youtube.com/embed/_1J5gCVVTb8',
'https://www.youtube.com/embed/pnKTW1keXvE',
'https://www.youtube.com/embed/5-VH73t5GaY',
'https://www.youtube.com/embed/c3_kK_Q9td4',
'https://www.youtube.com/embed/Zn09QQfLAcg',
'https://www.youtube.com/embed/s9xMvY7lvpw',
'https://www.youtube.com/embed/Ovg58qcCIA8',
'https://www.youtube.com/embed/YgoR5cs8pAs',
'https://www.youtube.com/embed/awbzQGBElmM',
'https://www.youtube.com/embed/T77Zf9b-Iu0',
'https://www.youtube.com/embed/gMHjQloKsKQ',
'https://www.youtube.com/embed/41U6l0SO_p8',
'https://www.youtube.com/embed/lQNln_G-Coo',
'https://www.youtube.com/embed/KQ1gVJ5Zwa4',
'https://www.youtube.com/embed/wB5uqnYNBtA',
'https://www.youtube.com/embed/1LLy9Bu-gNk',
'https://www.youtube.com/embed/tHW6XA4XAxs',
'https://www.youtube.com/embed/KMWJuhoVY6k',
'https://www.youtube.com/embed/3PcUPnemBQc',
'https://www.youtube.com/embed/XPkJe9I8FPE',
'https://www.youtube.com/embed/bA8dBKRwbns',
'https://www.youtube.com/embed/q7PvIEcBZVY',
'https://www.youtube.com/embed/H2RYuvcsy-M',
'https://www.youtube.com/embed/wOuajjin__8',
'https://www.youtube.com/embed/gwJ7aAqOf28',
'https://www.youtube.com/embed/DWWtmjSE5j4',
'https://www.youtube.com/embed/JzRSymwVTMk',
'https://www.youtube.com/embed/xYgdc_KHg1I',
'https://www.youtube.com/embed/OLOeigoh-Vc',
'https://www.youtube.com/embed/ulDBus03uRQ',
'https://www.youtube.com/embed/JrE-mojZ3y0',
'https://www.youtube.com/embed/c1-eyxi75yY',
'https://www.youtube.com/embed/fqfDjhd1fg8',
'https://www.youtube.com/embed/Wgs_O90doKw',
'https://www.youtube.com/embed/ULVyV_mf6_4',
'https://www.youtube.com/embed/kvk-m6Xi99U',
'https://www.youtube.com/embed/lfzCFsJZckI',
'https://www.youtube.com/embed/ol7JKqCnfjk',
'https://www.youtube.com/embed/Nfbb9-AeTr4',
'https://www.youtube.com/embed/uJCgaPsuG8Y',
'https://www.youtube.com/embed/1SKpNWEesNA',
'https://www.youtube.com/embed/MIP_WKeqxi4',
'https://www.youtube.com/embed/7T4NZNWgI50',
'https://www.youtube.com/embed/mv9xpWn6azU',
'https://www.youtube.com/embed/MBSVfTGNClU',
'https://www.youtube.com/embed/zpAY0IO53C8',
'https://www.youtube.com/embed/d4yXOKyQ5Xk',
'https://www.youtube.com/embed/1Gs5QHpXhjM',
'https://www.youtube.com/embed/n-Rtfd1Vv_M',
'https://www.youtube.com/embed/F7V_IebN-OU',
'https://www.youtube.com/embed/APXd_knD4II',
'https://www.youtube.com/embed/b5WfkG68Q-k',
'https://www.youtube.com/embed/K14zR44LKGw',
'https://www.youtube.com/embed/f-VZqbSPzRI',
'https://www.youtube.com/embed/8AR9KjBhVIM',
'https://www.youtube.com/embed/VW5yQ_kzEUE',
'https://www.youtube.com/embed/rK8lHrwi25U',
'https://www.youtube.com/embed/32SmdtO5wKI',
'https://www.youtube.com/embed/y-MMznhfrDo',
'https://www.youtube.com/embed/rR9rfyDrIR8',
'https://www.youtube.com/embed/b-57prdSwOU',
'https://www.youtube.com/embed/sjpD1yhx1zY');
for($i=0;$i<87;$i++)
{
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO Python (ID,Name,Url,Img)
VALUES ($i+208,'$Names[$i]','$Links[$i]','$img')";
$conn->query($sql);
}

?>
