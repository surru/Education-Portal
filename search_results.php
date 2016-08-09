<?php
session_start();

include('header.php');
include('search_bar.php');
include('Setup/connection_config.php');
?>

<?php

$s=$_POST["search"];

$items_per_page=10;
$page=1;
$offset=($page-1)*$items_per_page;

$conn = new mysqli($servername, $username, $password,"Video");

$sql1="(SELECT * FROM Latex WHERE Name LIKE '%$s%' )
	UNION
	(SELECT * FROM C WHERE Name LIKE '%$s%' )
	UNION
	(SELECT * FROM GIMP WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM Algo WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM Java WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM PHP WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM Python WHERE Name LIKE '%$s%')";

$result1=$conn->query($sql1);

$conn = new mysqli($servername, $username, $password,"Video");

$sql="(SELECT * FROM Latex WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM C WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM GIMP WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM Algo WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM Java WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM PHP WHERE Name LIKE '%$s%')
	UNION
	(SELECT * FROM Python WHERE Name LIKE '%$s%') LIMIT 0,10";

$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
	echo '
		<a href="display.php?data='.$row["ID"].'">
			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"]."<br>".'

		</a>';
    }
}

$page_count=1;
$row_count=$result1->num_rows;
$items_per_page=10;
//echo $row_count;
if($row_count>$items_per_page){
	$page_count=($row_count/$items_per_page)+1;
}
$page=1;
echo '<br><br><br><center>';
for ($i = 1; $i <= $page_count; $i++) {
   if ($i == $page) { // this is current page
       echo 'Page ' . $i . '&nbsp';
   } else { // show link to other page
       echo ' <a href="menuitem.php?search='.$s.'&page='.$i.'">'.$i.'</a> ';
       echo '&nbsp';
   }
}
echo '</center>';

include('footer.php')
?>
