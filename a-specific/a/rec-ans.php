<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);

//echo @$_POST["mySelect2"];
$people=$_POST["mySelect2"];
//echo $people;
//echo "<br />";

//echo @$_POST["radioSet"];
//$brand=$_POST["radioSet"];
//echo $brand;
//echo "<br />";

//echo @$_POST["textinput"];
$min=$_POST["textinput"];
//echo $min;
//echo "<br />";

//echo @$_POST["textinput2"];
$max=$_POST["textinput2"];
//echo $max;

$location=$_POST["textinput3"];
//echo $location;


//echo "star";echo "<br />";
$result = mysql_query("SELECT * FROM taodata9 WHERE minprice>'$min' and maxprice<$max");
$num=0;
$topseal1=0;  $topid1=-1; $topmin1=-1;$topmax1=-1;
$topseal2=0;  $topid2=-1; $topmin2=-1;$topmax2=-1;
$topseal3=0;  $topid3=-1; $topmin3=-1;$topmax3=-1;
$topseal4=0;  $topid4=-1; $topmin4=-1;$topmax4=-1;
$topseal5=0;  $topid5=-1; $topmin5=-1;$topmax5=-1;
$topseal6=0;  $topid6=-1; $topmin6=-1;$topmax6=-1;
while($row = mysql_fetch_array($result)){
    /* deal people*/
	
 	if ($people=='0') 
	{
	
	
	
	
      
	  if ($topseal1<$row['sumdeal'])
	  {
	     $topid1=$row['id'];
		 $topname1=$row['normalname'];
		 $topseal1=$row['sumdeal'];
		 $topmin1=$row['minprice'];
		 $topmax1=$row['maxprice'];
	  }
	  else if ($topseal2<$row['sumdeal'])
	  {
	     $topid2=$row['id'];
		 $topname2=$row['normalname'];
		 $topseal2=$row['sumdeal'];
		 $topmin2=$row['minprice'];
		 $topmax2=$row['maxprice'];
	  
	  }else if ($topseal3<$row['sumdeal'])
	  {
	     $topid3=$row['id'];
		 $topname3=$row['normalname'];
		 $topseal3=$row['sumdeal'];
		 $topmin3=$row['minprice'];
		 $topmax3=$row['maxprice'];
	  
	  }else if ($topseal4<$row['sumdeal'])
	  {
	     $topid4=$row['id'];
		 $topname4=$row['normalname'];
		 $topseal4=$row['sumdeal'];
		 $topmin4=$row['minprice'];
		 $topmax4=$row['maxprice'];
	  
	  }else if ($topseal5<$row['sumdeal'])
	  {
	     $topid5=$row['id'];
		 $topname5=$row['normalname'];
		 $topseal5=$row['sumdeal'];
		 $topmin5=$row['minprice'];
		 $topmax5=$row['maxprice'];
	  
	  }
	  else if ($topseal6<$row['sumdeal'])
	  {
	     $topid6=$row['id'];
		 $topname6=$row['normalname'];
		 $topseal6=$row['sumdeal'];
		 $topmin6=$row['minprice'];
		 $topmax6=$row['maxprice'];
	  
	  }
	
	

	
	}
	else if ($people==$row['people'] || $row['people']==0 ) 
	{   
	
	
	
	
       if ($topseal1<$row['sumdeal'])
	  {
	     $topid1=$row['id'];
		 $topname1=$row['normalname'];
		 $topseal1=$row['sumdeal'];
		 $topmin1=$row['minprice'];
		 $topmax1=$row['maxprice'];
	  }
	  else if ($topseal2<$row['sumdeal'])
	  {
	     $topid2=$row['id'];
		 $topname2=$row['normalname'];
		 $topseal2=$row['sumdeal'];
		 $topmin2=$row['minprice'];
		 $topmax2=$row['maxprice'];
	  
	  }else if ($topseal3<$row['sumdeal'])
	  {
	     $topid3=$row['id'];
		 $topname3=$row['normalname'];
		 $topseal3=$row['sumdeal'];
		 $topmin3=$row['minprice'];
		 $topmax3=$row['maxprice'];
	  
	  }else if ($topseal4<$row['sumdeal'])
	  {
	     $topid4=$row['id'];
		 $topname4=$row['normalname'];
		 $topseal4=$row['sumdeal'];
		 $topmin4=$row['minprice'];
		 $topmax4=$row['maxprice'];
	  
	  }else if ($topseal5<$row['sumdeal'])
	  {
	     $topid5=$row['id'];
		 $topname5=$row['normalname'];
		 $topseal5=$row['sumdeal'];
		 $topmin5=$row['minprice'];
		 $topmax5=$row['maxprice'];
	  
	  }
	  else if ($topseal6<$row['sumdeal'])
	  {
	     $topid6=$row['id'];
		 $topname6=$row['normalname'];
		 $topseal6=$row['sumdeal'];
		 $topmin6=$row['minprice'];
		 $topmax6=$row['maxprice'];
	  
	  }
	 
	
	 }
	
	
	
}
   

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Blog Design</title>
<link rel="stylesheet" type="text/css" href="style1-keyword.css" />

    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">

		
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css-com/style.css">
		<script src="js-com/modernizr.custom.63321.js"></script>
</head>

<body>
	<div id="header">
		<span class="logo"></span>																																																											<div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden"><h1><a href="sc.chinaz.com">best free templates</a></h1></div>
		<ul id="menu">
			<li><a href="index.html"><img src="images/but1.gif" alt="" width="64" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but2.gif" alt="" width="108" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but3.gif" alt="" width="93" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but4.gif" alt="" width="101" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but5.gif" alt="" width="86" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but6.gif" alt="" width="102" height="42" /></a></li>
		</ul>
		<img src="images/spacer.gif" alt="setalpm" width="120" height="120" border="0" usemap="#Map" class="rss" />
        <map name="Map">
          <area shape="circle" coords="60,60,63" href="sc.chinaz.com">
      </map>
	</div>
	<div id="content">
		<div id="posts">
			<div class="post">
				<h2>Original Wordpress Themes</h2>
				<div><span class="date">Mar 12th</span><span class="categories">in: Design, Themes</span></div>
						<div class="sidebar-key">
		    <div class="search-key">
				<input type="text" value="Search"> <a href="sc.chinaz.com"><img src="images/go.gif" alt="" width="26" height="26" /></a>
			</div>
			
			
		
		</div>
				
				<div class="container">	

			<!-- Codrops top bar -->
			
			
			
			
			<section class="main">

				<ul class="timeline">

					<li class="event">
						<input type="radio" name="tl-group" checked="">
						<label></label>
						<div class="thumb user-4"><span>recommend</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>Best for you!</h3>
									<p>There are five products for you</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group">
						<label></label>
						<div class="thumb user-6"><span>First</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3><?php echo $topid1;?></h3>
									<p>
									<?php 
									 echo "price is ";
									 echo $topmin1; 
									?>
									<?php
									 echo " to ";
									 echo $topmax1;
									 //echo "<br />";
									 ?>
									 <?php
									 echo ".     suit  ";
									 if ($people==0)
									   echo "all peopel";
									   else if ($people ==1)
									    echo "baby";
										else if ($people==2)
										 echo "children";
										  else if ($people==3)
										   echo "students";
										    else if ($people==4)
											 echo "adults";
											  else if ($peopel==5)
											   echo "middle and old aged people";
											   else echo "wemon";
											 
									 ?>
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group">
						<label></label>
						<div class="thumb user-3"><span>Second</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3><?php echo $topid2;?></h3>
									<p>
									<?php 
									 echo "price is ";
									 echo $topmin2; 
									?>
									<?php
									 echo " to ";
									 echo $topmax2;
									 //echo "<br />";
									 ?>
									 <?php
									 echo ".     suit  ";
									 if ($people==0)
									   echo "all peopel";
									   else if ($people ==1)
									    echo "baby";
										else if ($people==2)
										 echo "children";
										  else if ($people==3)
										   echo "students";
										    else if ($people==4)
											 echo "adults";
											  else if ($peopel==5)
											   echo "middle and old aged people";
											   else echo "wemon";
											 
									 ?>
									</p>	</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group">
						<label></label>
						<div class="thumb user-5"><span>Third</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3><?php echo $topid3;?></h3>
									<p>
									<?php 
									 echo "price is ";
									 echo $topmin3; 
									?>
									<?php
									 echo " to ";
									 echo $topmax3;
									 //echo "<br />";
									 ?>
									 <?php
									 echo ".     suit  ";
									 if ($people==0)
									   echo "all peopel";
									   else if ($people ==1)
									    echo "baby";
										else if ($people==2)
										 echo "children";
										  else if ($people==3)
										   echo "students";
										    else if ($people==4)
											 echo "adults";
											  else if ($peopel==5)
											   echo "middle and old aged people";
											   else echo "wemon";
											 
									 ?>
									</p>		</div>
							</div>
						</div>
					</li>

	

			
					<li class="event">
						<input type="radio" name="tl-group">
						<label></label>
						<div class="thumb user-8"><span>Fouth</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3><?php echo $topid4;?></h3>
									<p>
									<?php 
									 echo "price is ";
									 echo $topmin4; 
									?>
									<?php
									 echo " to ";
									 echo $topmax4;
									 //echo "<br />";
									 ?>
									 <?php
									 echo ".     suit  ";
									 if ($people==0)
									   echo "all peopel";
									   else if ($people ==1)
									    echo "baby";
										else if ($people==2)
										 echo "children";
										  else if ($people==3)
										   echo "students";
										    else if ($people==4)
											 echo "adults";
											  else if ($peopel==5)
											   echo "middle and old aged people";
											   else echo "wemon";
											 
									 ?>
									</p>			</div>
							</div>
						</div>
					</li>
					
					<li class="event">
						<input type="radio" name="tl-group">
						<label></label>
						<div class="thumb user-8"><span>Fifth</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3><?php echo $topid5;?></h3>
									<p>
									<?php 
									 echo "price is ";
									 echo $topmin5; 
									?>
									<?php
									 echo " to ";
									 echo $topmax5;
									 //echo "<br />";
									 ?>
									 <?php
									 echo ".     suit  ";
									 if ($people==0)
									   echo "all peopel";
									   else if ($people ==1)
									    echo "baby";
										else if ($people==2)
										 echo "children";
										  else if ($people==3)
										   echo "students";
										    else if ($people==4)
											 echo "adults";
											  else if ($peopel==5)
											   echo "middle and old aged people";
											   else echo "wemon";
											 
									 ?>
									</p>			</div>
							</div>
						</div>
					</li>
				</ul>
			</section>

		</div>

			
			</div>
		</div>

	</div>
	<div id="footer">
		<p>Copyright &copy;. All rights reserved. Design from <a href="sc.chinaz.com" target="_blank" title="Free Templates"></a></p>
	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>





