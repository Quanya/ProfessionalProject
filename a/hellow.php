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
	   case 0: $c[]="��è/ר��/ʵ���";break;
	   case 1: $c[]="����/������/�Խ��";break;
	   case 2: $c[]="X�²�/X�»�";break;
	   case 3: $c[]="�ؼ�/����/����/�ͼ�";break;
	   case 4: $c[]="������/��Ʒ/�°�װ";break;
	   case 5: $c[]="����/����";break;
	   case 6: $c[]="��Ʒ/ԭװ";break;
	   case 7: $c[]="����/�ֻ�/��������";break;
	   case 8: $c[]="�ڸ�/����/ζ����";break;
	   case 9: $c[]="ȫ�����/����/����";break;
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

     <!-- keyword��ť   --> 
        <link rel="stylesheet" type="text/css" href="css-key/default.css" />
		<link rel="stylesheet" type="text/css" href="css-key/component.css" />
		<script src="js-key/modernizr.custom.js"></script>
    <!--�ؼ�����ʾ-->
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
					  <!--ǰ����-->
	                    <a href="" class="red"><?php echo $c[0];?></a>
	                    <a href="" class="red"><?php echo $c[1];?></a>
	                    <a href="" class="red"><?php echo $c[2];?></a>
					  <!--4~7 ����һ����ɫ-->	
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
								<a href="#">��ţ</a>
							
							
								<ul class="dl-submenu">
								 								 
									<li><a href='hellow.php?act=1'>������ ���� </a></li>
									<li><a href='hellow.php?act=2'>���� ���ְ� ������ </a></li>
									
									<li><a href='hellow.php?act=4'>������</a></li>
									<li><a href='hellow.php?act=5'>δ���Ƕ�ͯ�ɳ���</a></li>
									
									
									<li><a href='hellow.php?act=6'>ŷ��  ŷʽ</a></li>
									<li><a href='hellow.php?act=7'>ţ�� ������ ��֬ ��֬</a></li>
									
									
									<li><a href='hellow.php?act=8'>������</a></li>
									<li><a href='hellow.php?act=9'>�ִ�����</a></li>
									
									<li><a href='hellow.php?act=10'>�׽���� ��װ����</a></li>
									<li><a href='hellow.php?act=11'>�����</a></li>
									
									<li><a href='hellow.php?act=3'>����</a></li>
								</ul>
							
							</li>
							<li>
								<a href="#">����</a>
								<ul class="dl-submenu">
									<li><a href='hellow.php?act=27'>QQ�Ƕ�ͯ�ɳ���</a></li>
									<li><a href='hellow.php?act=28'>�����䷽�̷ۣ��߸� ���� ��п ѧ�� Ůʿ</a></li>
									<li><a href='hellow.php?act=29'>���������� ��ά�߸�</a></li>
									<li><a href='hellow.php?act=30'>�����棨��װA+B/B+��Ӥ�׶��䷽�̷� </a></li>
									<li><a href='hellow.php?act=31'>�����Ӥ�׶��䷽�̷� </a></li>
								</ul>
							</li>
							<li>
								<a href="#">����</a>
								<ul class="dl-submenu">
									
										   <li><a href='hellow.php?act=12'>��+</a></li>
									       <li><a href='hellow.php?act=13'>�ű�</a></li>
										   <li><a href='hellow.php?act=24'>Ī˹����</a></li>
										   <li><a href='hellow.php?act=23'>��ƽ</a></li>
										   <li><a href='hellow.php?act=17'>���� ���ְ� ������ ����ש</a></li>
																				
											<li><a href='hellow.php?act=14'>��֬ ��֬ ��֬ ��֬</a></li>
									        <li><a href='hellow.php?act=15'>��ͯ����  СС���� ��ͯ��  DUDU��ͯ��</a></li>
											
											<li><a href='hellow.php?act=16'>����� ѩ�� ��ש</a></li>
									        
										   
										   <li><a href='hellow.php?act=18'>����ר�õ�����</a></li>
									       <li><a href='hellow.php?act=19'>��ʵ �¹��� HI�Ź���  ���� 1911 ���� ������ ����</a></li>
										   
										   <li><a href='hellow.php?act=20'>������/���ʺ� /���ʱ�</a></li>
									       <li><a href='hellow.php?act=21'>��ͨ  Ũ�� ��Ũ  �߸ƴ�ţ��</a></li>
									
								</ul>
							</li>
							<li>
								<a href="#">����</a>
								<ul class="dl-submenu">
								   <li><a href='hellow.php?act=22'>��֭ ��Ե</a></li>
								   <li><a href='hellow.php?act=26'>��ζ�� ����  �춹 ���� ���� �ɿ���</a></li>
								   <li><a href='hellow.php?act=25'>������  ���Ǽ� ������ ��װ��  Ӥ���̷�</a></li>	  
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
		<p>Copyright &copy;. All rights reserved. Design from <a href="sc.chinaz.com" target="_blank" title="Free Templates">վ���ز�</a></p>
	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>




