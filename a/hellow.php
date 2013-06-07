<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);

$id=$_REQUEST["act"];
 
$result = mysql_query("SELECT * FROM taodata8 WHERE id=$id");
while($row = mysql_fetch_array($result)){
	
	//$test=$row['normalname'];
	//echo $test;
	//echo $row['keyword1'];
	//echo "<br />";

	
    $arr[]=$row['keyword1'];
	$arr[]=$row['keyword2'];
	$arr[]=$row['keyword3'];
	$arr[]=$row['keyword4'];
	$arr[]=$row['keyword5'];
    $arr[]=$row['keyword6'];
	$arr[]=$row['keyword7'];
	$arr[]=$row['keyword8'];
	$arr[]=$row['keyword9'];
	$arr[]=$row['keyword10'];
	
	$b[]=0;
	$b[]=1;
	$b[]=2;
	$b[]=3;
	$b[]=4;
	$b[]=5;
	$b[]=6;
	$b[]=7;
	$b[]=8;
	$b[]=9;
	
	
}  
  for ($i=0;$i<10;$i++) echo $b[$i];
  for ($i=0;$i<10;$i++)
   for ($j=9;$j>$i;$j--)
   if ($arr[$j]>$arr[$j-1])
   {
     $t=$arr[$j];
	 $arr[$j]=$arr[$j-1];
	 $arr[$j-1]=$t;
	 
	 $t=$b[$j];
	 $b[$j]=$b[$j-1];
	 $b[$j-1]=$t;
	} 
  for ($i=0;$i<10;$i++) echo $b[$i];
  
  for ($i=0;$i<10;$i++)
  {
    switch ($b[$i])
	 {
	   case 0: $c[]="天猫/专卖/实体店";break;
	   case 1: $c[]="积分/不刮码/淘金币";break;
	   case 2: $c[]="X月产/X月货";break;
	   case 3: $c[]="特价/促销/批发/低价";break;
	   case 4: $c[]="新升级/新品/新包装";break;
	   case 5: $c[]="包邮/免邮";break;
	   case 6: $c[]="正品/原装";break;
	   case 7: $c[]="新鲜/现货/最新日期";break;
	   case 8: $c[]="口感/纯度/味道等";break;
	   case 9: $c[]="全民疯抢/抢购/热卖";break;
	   default:$c[]="";
	 
	 }
   	
    //echo $c[$i];echo "<br />";
   }  
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Blog Design</title>
<link rel="stylesheet" type="text/css" href="style1-keyword.css" />

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
					    <li><?php echo $c[0];?></li>
						<li><?php echo $c[1];?></li>
					    <li><?php echo $c[2];?></li>
					  <!--前三名-->
	                    <a href="" class="red"><?php echo $c[0];?></a>
	                    <a href="" class="red"><?php echo $c[1];?></a>
	                    <a href="" class="red"><?php echo $c[2];?></a>
					  <!--4~7 设置一种颜色-->	
	                    <a href="" class="blue"><?php echo $c[3];?></a>
	                    <a href="" class="blue"><?php echo $c[4];?></a>
	                    <a href="" class="blue"><?php echo $c[5];?></a>
	                    <a href="" class="blue"><?php echo $c[6];?></a>
					  <!--8~10-->
					    <a href="" class="yellow"><?php echo $c[7];?></a>
	                    <a href="" class="yellow"><?php echo $c[8];?></a>
	                    <a href="" class="yellow"><?php echo $c[9];?></a>
	
                     </div>
					  
					
			    	</div>
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#">蒙牛</a>
							
							
								<ul class="dl-submenu">
								 								 
									<li><a href='hellow.php?act=1'>冠益乳 酸奶 </a></li>
									<li><a href='hellow.php?act=2'>利乐 利乐包 利乐枕 </a></li>
									
									<li><a href='hellow.php?act=4'>新养道</a></li>
									<li><a href='hellow.php?act=5'>未来星儿童成长奶</a></li>
									
									
									<li><a href='hellow.php?act=6'>欧世  欧式</a></li>
									<li><a href='hellow.php?act=7'>牛奶 调制乳 低脂 脱脂</a></li>
									
									
									<li><a href='hellow.php?act=8'>特仑苏</a></li>
									<li><a href='hellow.php?act=9'>现代牧场</a></li>
									
									<li><a href='hellow.php?act=10'>白金加智 金装加智</a></li>
									<li><a href='hellow.php?act=11'>真果粒</a></li>
									
									<li><a href='hellow.php?act=3'>奶特</a></li>
								</ul>
							
							</li>
							<li>
								<a href="#">伊利</a>
								<ul class="dl-submenu">
									<li><a href='hellow.php?act=27'>QQ星儿童成长类</a></li>
									<li><a href='hellow.php?act=28'>成人配方奶粉（高钙 高铁 高锌 学生 女士</a></li>
									<li><a href='hellow.php?act=29'>欣活中老年 多维高钙</a></li>
									<li><a href='hellow.php?act=30'>步步益（金装A+B/B+）婴幼儿配方奶粉 </a></li>
									<li><a href='hellow.php?act=31'>金领冠婴幼儿配方奶粉 </a></li>
								</ul>
							</li>
							<li>
								<a href="#">光明</a>
								<ul class="dl-submenu">
									
										   <li><a href='hellow.php?act=12'>优+</a></li>
									       <li><a href='hellow.php?act=13'>优倍</a></li>
										   <li><a href='hellow.php?act=24'>莫斯利安</a></li>
										   <li><a href='hellow.php?act=23'>舒平</a></li>
										   <li><a href='hellow.php?act=17'>利乐 利乐包 利乐枕 利乐砖</a></li>
																				
											<li><a href='hellow.php?act=14'>低脂 减脂 脱脂 零脂</a></li>
									        <li><a href='hellow.php?act=15'>儿童健能  小小光明 儿童奶  DUDU儿童奶</a></li>
											
											<li><a href='hellow.php?act=16'>冰淇淋 雪糕 冰砖</a></li>
									        
										   
										   <li><a href='hellow.php?act=18'>咖啡专用调制乳</a></li>
									       <li><a href='hellow.php?act=19'>如实 新果粒 HI优果粒  畅优 1911 健能 优酪乳 酸奶</a></li>
										   
										   <li><a href='hellow.php?act=20'>新鲜屋/新鲜壶 /新鲜杯</a></li>
									       <li><a href='hellow.php?act=21'>普通  浓香 香浓  高钙纯牛奶</a></li>
									
								</ul>
							</li>
							<li>
								<a href="#">其他</a>
								<ul class="dl-submenu">
								   <li><a href='hellow.php?act=22'>果汁 果缘</a></li>
								   <li><a href='hellow.php?act=26'>风味奶 红枣  红豆 花生 核桃 巧克力</a></li>
								   <li><a href='hellow.php?act=25'>金体智  金智佳 金智能 金装优  婴儿奶粉</a></li>	  
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




