<?php

//echo @$_POST["cars"];
//echo $_GET["act"]; 
//echo "done";
//$getKeywords = $_GET["keywords"];
//echo $getKeywords
//$name=$_REQUEST["act"];
echo $_REQUEST["act"];
//echo $name;

include_once('connect.php');
mysql_select_db("taoliang", $con);

$i=28;
$result = mysql_query("SELECT * FROM taodata8 WHERE productid=$i");
while($row = mysql_fetch_array($result)){
	
	echo $row['keyword1'];
	echo "<br />";
}  


?>