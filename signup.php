<?php
session_start();

include('header.php')
?>

<h1><font size = "6">Welcome User</font></h1>
	<br><br>

	<div>
	<center>

	<form action="sign.php" onsubmit="return validate()" method="post">
		Email (@iitrpr.ac.in only):<br><br>
	 	<input align="right" type="text" name="em" required >
	 	<br>
	 	Username:<br><br>
	 	<input id="usr" type="text" name="usr" required>
	 	<br>
	 	User password:<br><br>
	 	<input id="pass" type="password" name="psw" required>
	 	<br>
	 	Mobile number:<br><br>
	 	<input type="text" name="mob" required>
	 	<br>
	 	Security Questions:<br><br>
	 	<select name="secQ">
			<option value="1">What is your Grandmother's name ?</option>
			<option value="2">What is your Mother's maiden name ?</option></option>
			<option value="3">What is your Favourite color ? </option>
			<option value="4">What is your Birth place ? </option>
			<option value="5">What is your Pets name ?</option>
			<option value="6">What is your first mobile company ?</option>
			<option value="7">What is your first debit card ?</option>
			<option value="8">What is your first Car ? </option>
		</select>
	 	<br><br>
	 	Answer:<br><br>
	 	<input type="text" name="ans" required>
	 	<br><br>
	 	<input type="submit" required>
	</form>
	<script>
			function validate()
			{
				var re = /^([\w-]+(?:\.[\w-]+)*)@iitrpr.ac.in$/i;
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
	</center>
	</div>



<?php

include('footer.php');
?>