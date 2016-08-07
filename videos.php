<?php
session_start();

include('header.php')
?>

<head>
<style>
#1{
    text-align:"right";
    float: right;
  }
  img{
    vertical-align: text-top;
  }
  a{
    text-decoration: none;
  }
  #hh{
    vertical-align: text-top;
  }
  #right{
    text-align: right;
  }
</style>
</head>



    <h2><font size="6">Videos</font></h1>
<br><br>
<center>
<form action="searching.php" method="post">
	<font size = "4">Search Videos : </font>
	<input type="text" name="search">

	<input type="submit" value="GO">
</form>
<br>
<br>
</center>

<a href="algov.php">
<h2>Algorithms</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Introduction_to_Algorithms LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0)
	{

    while($row = $result->fetch_assoc())
    	 {

		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';

    	}
  	}


?>
<div id="right">
<a href="algov.php">
..... more videos
</a>
</div>

<a href="cv.php">
<h2>C Programming</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM C LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0)
	{

    while($row = $result->fetch_assoc())
    	 {

		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';

    	}
  	}

?>
<div id="right">
<a href="cv.php">
..... more videos
</a>
</div>


<a href="gimpv.php">
<h2>GIMP</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM GIMP LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0)
	{

    while($row = $result->fetch_assoc())
    	 {

		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';

    	}
  	}


?>
<div id="right">
<a href="gimpv.php">
..... more videos
</a>
</div>


<a href="javav.php">
<h2>Java Programming</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Java LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0)
	{

    while($row = $result->fetch_assoc())
    	 {

		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';

    	}
  	}


?>
<div id="right">
<a href="javav.php">
..... more videos
</a>
</div>



<a href="latexv.php">
<h2>Latex</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Latex LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0)
	{

    while($row = $result->fetch_assoc())
    	 {

		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';

    	}
  	}


?>
<div id="right">
<a href="latexv.php">
..... more videos
</a>
</div>



<a href="phpv.php">
<h2>PHP</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM PHP LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0)
	{

    while($row = $result->fetch_assoc())
    	 {

		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';

    	}
  	}


?>
<div id="right">
<a href="phpv.php">
..... more videos
</a>
</div>


<a href="pythonv.php">
<h2>Python</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Python LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0)
	{

    while($row = $result->fetch_assoc())
    	 {

		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';

    	}
  	}


?>
<div id="right">
<a href="pythonv.php">
..... more videos
</a>
</div>
    </div>


<?php
    include('footer.php')
?>

