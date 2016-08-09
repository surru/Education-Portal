<?php
session_start();

include('header.php')
?>

<h2 id = "edupor">
	LOGIN
</h2>
	<div>
<form name="myForm" onsubmit="return validate()"action="authen2.php" method="post">
	<font id="details">
	<b>Username:</b><input id="usr" type="text" name="em" max="50">
	<br><br>
	<b>Password:</b><input id="pass" type="password" name="psw" max="20" password>
	<br><br>
	<input type="submit" value="Log in">
</form>
</div>
<p align="right">
<a href="fp.php"><font size="3">Forgot Password</font></a>
</p>
<p align = "right"
</p>
<script>
	function validate()
	{
		var re = /^([\w-]+(?:\.[\w-]+)*)@i{2}trpr\.ac\.in$/i;
		var x = document.getElementById('usr').value;
		var y = document.getElementById('pass').value;
		if(x == null || x == "" )
		{
			alert("Username is empty");
			return false;
		}
		else if(!re.test(x))
		{
			alert("Username incorrect");
			return false;
		}
		else if(y == null || y == "")
		{
			alert("Password not filled");
			return false;
		}
		else
			return true;
	}
</script>

<?php

include('footer.php');
?>

