<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);

$result = mysql_query("SELECT * FROM taodata4 WHERE productid='26'");
while($row = mysql_fetch_array($result)){
	if($row['date']=='2012-11-20'){
		$arr1[] = array(
			"name" =>  $row['date'],
			"y" => intval($row['productsales']),
			"sliced" => true,
			"selected" => true
		); 
		//echo $row['date']+'p';
		//echo $row['productsales'];
		//echo "</br>";
	}else{
		$arr[] = array(
		    $row['date'],intval($row['productsales'])
	    );
		//echo $row['date']+'p';
		//echo $row['productsales'];
		//echo "</br>";
	}
	
	//echo $row['id'];
}  

//合并数组
$arrs = array_merge($arr1,$arr);
$data1 = json_encode($arrs);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Blog Design</title>
<link rel="stylesheet" type="text/css" href="style1.css" />

<!--table -->
<style type="text/css">
<!--
table{
    table-layout: fixed;
    empty-cells: show;
    border-collapse: collapse;
    margin: 0 auto;
    font-size: 12px;
    margin-top: 25px;
    float: left;
    margin-left: 17px;
}
td{
    height:20px;
}
h1,h2,h3{
    font-size:12px;
    margin:0;
    padding:0;
}

.title { background: #FFF; border: 1px solid #9DB3C5; padding: 1px; width:90%;margin:20px auto; }
    .title h1 { line-height: 31px; text-align:center;  background: #2F589C url(th_bg2.gif); background-repeat: repeat-x; background-position: 0 0; color: #FFF; }
        .title th, .title td { border: 1px solid #CAD9EA; padding: 5px; }


/*这个是借鉴一个论坛的样式*/
table.t1{
    border:1px solid #cad9ea;
    color:#666;
}
table.t1 th {
    background-image: url(th_bg1.gif);
    background-repeat::repeat-x;
    height:30px;
}
table.t1 td,table.t1 th{
    border:1px solid #cad9ea;
    padding:0 1em 0;
}
table.t1 tr.a1{
    background-color:#f5fafe;
}



table.t2{
    border:1px solid #9db3c5;
    color:#666;
}
table.t2 th {
    background-image: url(th_bg2.gif);
    background-repeat::repeat-x;
    height:30px;
    color:#fff;
}
table.t2 td{
    border:1px dotted #cad9ea;
    padding:0 2px 0;
}
table.t2 th{
    border:1px solid #a7d1fd;
    padding:0 2px 0;
}
table.t2 tr.a1{
    background-color:#e8f3fd;
}



table.t3{
    border:1px solid #fc58a6;
    color:#720337;
}
table.t3 th {
    background-image: url(th_bg3.gif);
    background-repeat::repeat-x;
    height:30px;
    color:#35031b;
}
table.t3 td{
    border:1px dashed #feb8d9;
    padding:0 1.5em 0;
}
table.t3 th{
    border:1px solid #b9f9dc;
    padding:0 2px 0;
}
table.t3 tr.a1{
    background-color:#fbd8e8;
}

-->
</style>
<script type="text/javascript">
    function ApplyStyle(s){
        document.getElementById("mytab").className=s.innerText;
    }
</script>



<!--end-->
       
       

		
	<!-- highstock-->
	
	     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
     $(function() {

	$.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?', function(data) {
		// Create the chart
		$('#container').highcharts('StockChart', {
			

			rangeSelector : {
				selected : 1
			},

			title : {
				text : 'AAPL Stock Price'
			},
			
			series : [{
				name : 'AAPL',
				data : <?php echo $data1?>,
				tooltip: {
					valueDecimals: 2
				}
			}]
		});
	});

});

		</script>
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
				<div class="description-detail">
				
			<!--highstock -->	  
			  <script src="js/highstock.js"></script>
              <script src="js/modules/exporting.js"></script>
              <div id="container" style="height: 500px; width: 840px"></div>
			  
			<!--table-->
			<table width="90%" id="mytab"  border="1" class="t1" margin-top="10px">
  <thead>
    <th width="10%">Brand</th>  <!--品牌-->
    <th width="30%">Total sales</th>  <!--总销售量-->
    <th width="20%">Avg Daily sales</th>   <!--平均日销售量-->
    <th width="30%">Off-season</th  <!--淡季-->
    <th width="10%">Busy season</th> <!--旺季-->
  </thead>
  <tr class="a1">
    <td>蒙牛</td>
    <td>村在</td>
    <td>北京天安门</td>
    <td>东四十条</td>
    <td>21345678</td>
  </tr>
  <tr>
    <td>伊利</td>
    <td>村在</td>
    <td>北京天安门</td>
    <td>东四十条</td>
    <td>21345678</td>
  </tr>
  <tr class="a1">
    <td>光明</td>
    <td>村在</td>
    <td>北京天安门</td>
    <td>东四十条</td>
    <td>21345678</td>
  </tr>
  <tr>
    <td>光明</td>
    <td>村在</td>
    <td>北京天安门</td>
    <td>东四十条</td>
    <td>21345678</td>
  </tr>
 
 
</table>
			
			
			<!--end-->	
	
				
				
				</div>
				<p class="comments">Comments - <a href="sc.chinaz.com">17</a>   <span>|</span>   <a href="index2.html">Continue Reading</a></p>
			</div>
		</div>
		<div id="sidebar">
		    <div id="search">
				<input type="text" value="Search"> <a href="sc.chinaz.com"><img src="images/go.gif" alt="" width="26" height="26" /></a>
			</div>
			
			
		
		</div>
	</div>
	<div id="footer">
		<p>Copyright &copy;. All rights reserved. Design from <a href="sc.chinaz.com" target="_blank" title="Free Templates">站长素材</a></p>
	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>


