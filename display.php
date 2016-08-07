<?php
session_start();

include('header.php');
include('search_bar.php');
include('Setup/connection_config.php');
?>

<center>
<?php

$conn = new mysqli($servername, $username, $password,"Video");

$id_no=$_GET["data"];
$sql="(SELECT Name, Url FROM Latex WHERE ID=$id_no)
UNION
(SELECT Name, Url FROM C WHERE ID=$id_no)
UNION
(SELECT Name, Url FROM GIMP WHERE ID=$id_no)
UNION
(SELECT Name, Url FROM Java WHERE ID=$id_no)
UNION
(SELECT Name, Url FROM PHP WHERE ID=$id_no)
UNION
(SELECT Name, Url FROM Python WHERE ID=$id_no)
UNION
(SELECT Name, Url FROM Algo WHERE ID=$id_no)";
$result=$conn->query($sql);
$row = $result->fetch_assoc();

echo '<b>'.$row["Name"]."<br><br></b>";
	echo '<iframe width="750" height="441"
src="'.$row["Url"].'">
</iframe>';


echo '</center>
<p><b>Comments</b>
</p>
<center>
<form action="comment.php?num='.$id_no.'" method="post">

<textarea name="message" rows="6" cols="93" placeholder="Share your thoughts">
</textarea>
</center>

<div id=post>
<input type="submit" value="   Post   ">
</div>
</form>

<br><br>
ALL COMMENTS
';

$conn = new mysqli($servername, $username, $password,"Comments");

$sql="SELECT * FROM Comment$id_no";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		echo '<div id="cmt">
		<b>'.$row["Username"].': - </b>'.$row["Time"].'<br>'.$row["Cmt"]."<br>".
		'</div>';

        //echo $row["Url"]."<br>";
    }}
else{
	echo '<div id="cmt">
	0 Results
	</div>';
}

include('footer.php')
?>



