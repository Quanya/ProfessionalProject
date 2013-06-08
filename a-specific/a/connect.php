<?php

$con = mysql_connect("localhost","root","dailin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code

//mysql_close($con);

//$res = mysql_query("select * from chart_pie");
//print_r(mysql_fetch_arry($res));



?>