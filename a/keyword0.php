<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);


//找出所有Key的数量
$keyword = mysql_query("SELECT * FROM taodata8 WHERE  normalname='奶特'");
while($row = mysql_fetch_array($keyword)){
	
		$arr1[] = array(
			"name" =>  $row['normalname'],
			"y" => intval($row['keyword1']),
			"sliced" => true,
			"selected" => true
		);
	}
	
		echo "hellow";
		echo $arr1[];
	    //echo $keyword['keyword1']+"and"+ $keyword['keyword2']+"end";

        //$max1=$arr1['y'];

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Blog Design</title>
<link rel="stylesheet" type="text/css" href="style1.css" />

     <!-- keyword按钮   --> 
        <link rel="stylesheet" type="text/css" href="css-key/default.css" />
		<link rel="stylesheet" type="text/css" href="css-key/component.css" />
		<script src="js-key/modernizr.custom.js"></script>
    <!--关键字显示-->
        <link rel="stylesheet" type="text/css" href="css-key/miaov_style.css" />
        <script type="text/javascript" src="js-key/miaov.js"></script>	
</head>

<body>
	<div id="header">
		<span class="logo">blog about web design</span>																																																											<div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden"><h1><a href="sc.chinaz.com">best free templates</a></h1></div>
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
				<div class="description">
				
				  <div class="main clearfix">
				   
				    <div class="column">
					 
				       <div id="div1">
					    <li><?php echo $max1;?></li>
					    <li>111</li>
						<li>111</li>
					    <li>111</li>
					  <!--前三名-->
	                    <a href="" class="blue">JS课程</a>
	                    <a href="" class="red">教程</a>
	                    <a href="" class="blue">试听</a>
					  <!--4~7 设置一种颜色-->	
	                    <a href="" class="blue">精品</a>
	                    <a href="" class="blue">妙味课堂</a>
	                    <a href="" class="blue">SEO</a>
	                    <a href="" class="blue">特效</a>
					  <!--8~10-->
					    <a href="" class="yellow">JavaScript</a>
	                    <a href="" class="blue">miaov</a>
	                    <a href="" class="red">CSS</a>
	
                     </div>
					  
					
			    	</div>
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#">蒙牛</a>
								<ul class="dl-submenu">
									<li><a href="#">奶特</a></li>
									<li><a href="#">TV &amp; Home Cinema</a></li>
									<li><a href="#">Phones</a></li>
									<li><a href="#">PC &amp; Video Games</a></li>
								</ul>
							</li>
							<li>
								<a href="#">伊利</a>
								<ul class="dl-submenu">
									<li><a href="#">Camera &amp; Photo</a></li>
									<li><a href="#">TV &amp; Home Cinema</a></li>
									<li><a href="#">Phones</a></li>
									<li><a href="#">PC &amp; Video Games</a></li>
								</ul>
							</li>
							<li>
								<a href="#">光明</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">Living Room</a>
										<ul class="dl-submenu">
											<li><a href="#">Sofas &amp; Loveseats</a></li>
											<li><a href="#">Coffee &amp; Accent Tables</a></li>
											<li><a href="#">Chairs &amp; Recliners</a></li>
											<li><a href="#">Bookshelves</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Bedroom</a>
										<ul class="dl-submenu">
											<li>
												<a href="#">Beds</a>
												<ul class="dl-submenu">
													<li><a href="#">Upholstered Beds</a></li>
													<li><a href="#">Divans</a></li>
													<li><a href="#">Metal Beds</a></li>
													<li><a href="#">Storage Beds</a></li>
													<li><a href="#">Wooden Beds</a></li>
													<li><a href="#">Children's Beds</a></li>
												</ul>
											</li>
											<li><a href="#">Bedroom Sets</a></li>
											<li><a href="#">Chests &amp; Dressers</a></li>
										</ul>
									</li>
									<li><a href="#">Home Office</a></li>
									<li><a href="#">Dining &amp; Bar</a></li>
									<li><a href="#">Patio</a></li>
								</ul>
							</li>
							<li>
								<a href="#">其他</a>
								<ul class="dl-submenu">
									<li><a href="#">Fine Jewelry</a></li>
									<li><a href="#">Fashion Jewelry</a></li>
									<li><a href="#">Watches</a></li>
									<li>
										<a href="#">Wedding Jewelry</a>
										<ul class="dl-submenu">
											<li><a href="#">Engagement Rings</a></li>
											<li><a href="#">Bridal Sets</a></li>
											<li><a href="#">Women's Wedding Bands</a></li>
											<li><a href="#">Men's Wedding Bands</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div><!-- /dl-menuwrapper -->
				</div>
			 
			</div>
				  
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		   <script src="js-key/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
				});
			});
		</script>	  
				  
				
			
	
				
				
				</div>
			
			</div>
		</div>
		<div class="sidebar-key">
		    <div class="search-key">
				<input type="text" value="Search"> <a href="sc.chinaz.com"><img src="images/go.gif" alt="" width="26" height="26" /></a>
			</div>
			
			
		
		</div>
	</div>
	<div id="footer">
		<p>Copyright &copy;. All rights reserved. Design from <a href="sc.chinaz.com" target="_blank" title="Free Templates">站长素材</a></p>
	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>


