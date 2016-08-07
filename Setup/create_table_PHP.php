<?php

include('connection_config.php');

$conn = new mysqli($servername, $username, $password,"Video");

$sql="CREATE TABLE PHP(
	ID INT(7) 	NOT NULL PRIMARY KEY,
	Name VARCHAR(60) NOT NULL,
	Url VARCHAR(50) NOT NULL,
	Img VARCHAR(20) NOT NULL
	)";
$conn->query($sql);
$img='Images/PHP.png';

$Names=array('PHP Video Tutorial for Beginners With Examples - 1 - PHP Overview ',
'PHP Video Tutorial for Beginners With Examples - 2 - Windows Installation ',
'PHP Video Tutorial for Beginners With Examples - 3 - First Steps ',
'PHP Video Tutorial for Beginners With Examples - 4 - Exploring Data Types Part - 1 ',
'PHP Video Tutorial for Beginners With Examples - 5 - Exploring Data Types Part - 2 ',
'PHP Video Tutorial for Beginners With Examples - 6 - Control Structures - Logical Expressions',
'PHP Video Tutorial for Beginners With Examples - 7 - Control Structures - Loops ',
'PHP Video Tutorial for Beginners With Examples - 8 - User-Defined Functions ',
'PHP Video Tutorial for Beginners With Examples - 9 - Debugging ',
'PHP Video Tutorial for Beginners With Examples - 10 - Building Web Pages with PHP ',
'PHP Video Tutorial for Beginners With Examples - 11 - Building Web Pages with PHP Part - 2 ',
'PHP Video Tutorial for Beginners With Examples - 12 - Working with Forms and Form Data Part - 1',
'PHP Video Tutorial for Beginners With Examples - 13 - Working with Forms and Form Data Part - 2 ',
'PHP Video Tutorial for Beginners With Examples - 14 - Working with Cookies and Sessions ',
'PHP Video Tutorial for Beginners With Examples - 15 - MySQL Basics ',
'PHP Video Tutorial for Beginners With Examples - 16 - Using PHP to Access MySQL Part - 1 ',
'PHP Video Tutorial for Beginners With Examples - 17 - Using PHP to Access MySQL Part - 2 ',
'PHP Video Tutorial for Beginners With Examples - 18 - Building a Content Management System (CMS) ',
'PHP Video Tutorial for Beginners With Examples - 19 - Using Site Navigation to Choose Content ',
'PHP Video Tutorial for Beginners With Examples - 20 - Application CRUD Part - 1 ',
'PHP Video Tutorial for Beginners With Examples - 21 - Application CRUD Part - 2 ',
'PHP Video Tutorial for Beginners With Examples - 22 - Application CRUD Part - 3 ',
'PHP Video Tutorial for Beginners With Examples - 23 - Application CRUD Part - 4 ',
'PHP Video Tutorial for Beginners With Examples - 24 - Building the Public Area Part - 1 ',
'PHP Video Tutorial for Beginners With Examples - 25 - Building the Public Area Part - 2 ',
'PHP Video Tutorial for Beginners With Examples - 26 - Regulating Page Access Part - 1 ',
'PHP Video Tutorial for Beginners With Examples - 27 - Regulating Page Access Part - 2 ',
'PHP Video Tutorial for Beginners With Examples - 28 - Regulating Page Access Part - 3 ',
'PHP Video Tutorial for Beginners With Examples - 29 - Conclusion ');

$Links=array('https://www.youtube.com/embed/1tpEPFL1bds&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/HiNn3lsaw5U&index=2&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/q38BlB9lOMw&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=3',
'https://www.youtube.com/embed/UVhS5wlXxds',
'https://www.youtube.com/embed/80tUJ1SQPqI',
'https://www.youtube.com/embed/x2N-owm0KUk&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=6',
'https://www.youtube.com/embed/recgp6C6_hE&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=7',
'https://www.youtube.com/embed/geV9MynUKGg&index=8&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/OCZ14aUz620&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=9',
'https://www.youtube.com/embed/fvS_Ge9jAFU&index=10&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/VkhfDMq0oxo&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=11',
'https://www.youtube.com/embed/OxZd6w_4XY0&index=12&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/0UAOiC9GiEE&index=13&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/gXkNHiyf7gs&index=14&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/7t1ARhyZ_50&index=15&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/_9FJPsCbHGQ&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=16',
'https://www.youtube.com/embed/6nn0B-5Q5IA&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=17',
'https://www.youtube.com/embed/aIKDjMXlFFA&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=18',
'https://www.youtube.com/embed/qFQA-sRjH7c&index=19&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/uvRCcpfPqdk&index=20&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/5Kht-RJecR0&index=21&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/gdU3sljZ0Yo&index=22&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/1ibQJhwLuZk&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=23',
'https://www.youtube.com/embed/8A3LqXSZrRY&index=24&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/0v-a1lteFiI&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=25',
'https://www.youtube.com/embed/qSz4Y2wteg8&index=26&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/mB8E4OY8G_Q&index=27&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n',
'https://www.youtube.com/embed/PzAMrH4afSw&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=28',
'https://www.youtube.com/embed/eVzUDQXoO8c&list=PLkafFmR_hW8Pa3_jcrncS4R9LLysK-A8n&index=29');

for($i=0;$i<29;$i++)
{
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO PHP (ID,Name,Url,Img)
VALUES ($i+179,'$Names[$i]','$Links[$i]','$img')";
$conn->query($sql);
}

?>
