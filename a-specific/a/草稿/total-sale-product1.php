<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);

/***** 读取蒙牛数据 *********/
$result = mysql_query("SELECT * FROM product_sale WHERE product='a'");
while($row = mysql_fetch_array($result)){
	if($row['id']==1){
		$arr1[] = array(
			"name" =>  $row['id'],
			"y" => intval($row['sale']),
			"sliced" => true,
			"selected" => true
		); 
		//echo $row['sale'];
	}else{
		$arr[] = array(
		    $row['id'],intval($row['sale'])
	    );
		//echo $row['sale'];
	}
	
	//echo $row['id'];
}  

//合并数组
$arrs = array_merge($arr1,$arr);
$data = json_encode($arrs);

/************ 读取伊利数据*****************/
$result1 = mysql_query("SELECT * FROM product_sale WHERE product='y'");
while($row = mysql_fetch_array($result1)){
	if($row['id']==14){
		$brr1[] = array(
			"name" =>  $row['id'],
			"y" => intval($row['sale']),
			"sliced" => true,
			"selected" => true
		); 
		//echo $row['sale'];
	}else{
		$brr[] = array(
		    $row['id'],intval($row['sale'])
	    );
		//echo $row['sale'];
	}
	
	//echo $row['id'];
}  

//合并数组
$brrs = array_merge($brr1,$brr);
$data1 = json_encode($brrs);


/*************读取光明数据*****************/
$result1 = mysql_query("SELECT * FROM product_sale WHERE product='g'");
while($row = mysql_fetch_array($result1)){
	if($row['id']==41){
		$crr1[] = array(
			"name" =>  $row['id'],
			"y" => intval($row['sale']),
			"sliced" => true,
			"selected" => true
		); 
		//echo $row['sale'];
	}else{
		$crr[] = array(
		    $row['id'],intval($row['sale'])
	    );
		//echo $row['sale'];
	}
	
	//echo $row['id'];
}  

//合并数组
$crrs = array_merge($crr1,$crr);
$data2 = json_encode($crrs);

//Mengniu Sum
$sumid = mysql_query("SELECT sum(sale) FROM product_sale WHERE product='a'");
$sumrow = mysql_fetch_array($sumid);
//$sum=$sumrow['price'];
//echo $sumrow[0]+" s  ";

//Yili Sum
$sumid1 = mysql_query("SELECT sum(sale) FROM product_sale WHERE product='y'");
$sumrow1 = mysql_fetch_array($sumid1);
//$sum=$sumrow['price'];
//echo $sumrow1[0]+" s ";

//Guangming Sum
$sumid2 = mysql_query("SELECT sum(sale) FROM product_sale WHERE product='g'");
$sumrow2 = mysql_fetch_array($sumid2);
//$sum=$sumrow['price'];
//echo $sumrow2[0];

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Blog Design</title>
<link rel="stylesheet" type="text/css" href="style1.css" />

       

		<link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/css.css">
		
	   
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container1'
            },
            title: {
                text: '年销售额'
            },
            xAxis: {
                categories: ['1999', '2000', '2001', '2002', '2003','2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011','2012']
            },
            tooltip: {
                formatter: function() {
                    var s;
                    if (this.point.name) { // the pie chart
                        s = ''+
                            this.point.name +': '+ this.y +'亿元';
                    } else {
                        s = ''+
                            this.x  +': '+ this.y;
                    }
                    return s;
                }
            },
            labels: {
                items: [{
                    html: '累计销售额',
                    style: {
                        left: '40px',
                        top: '8px',
                        color: 'black'
                    }
                }]
            },
            series: [{
                type: 'spline',
                name: '蒙牛',
                 data: <?php echo $data;?>,
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'white'
                }
            },{
                type: 'spline',
                name: '伊利',
                 data: <?php echo $data1;?>,
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'white'
                }
            },{
                type: 'spline',
                name: '光明',
                 data: <?php echo $data2;?>,
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: '销售额',
                data: [{
                    name: '蒙牛',
                    y: <?php echo $sumrow[0];?>,
                    color: '#4572A7' // Jane's color
                }, {
                    name: '伊利',
                    y: <?php echo $sumrow1[0];?>,
                    color: '#AA4643' // John's color
                }, {
                    name: '光明',
                    y: <?php echo $sumrow2[0];?>,
                    color: '#89A54E' // Joe's color
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
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
				<div class="description">
				
				  
				  <script src="./js/highcharts/highcharts.js"></script>
                    <script src="./js/highcharts/modules/exporting.js"></script>
				
				      <div id="container1" style="min-width: 400px; height: 500px; margin: 0 auto"></div>
				
				
			
	
				
				
				</div>
				<p class="comments">Comments - <a href="sc.chinaz.com">17</a>   <span>|</span>   <a href="index2.html">Continue Reading</a></p>
			</div>
		</div>
		<div id="sidebar">
		    <div id="search">
				<input type="text" value="Search"> <a href="sc.chinaz.com"><img src="images/go.gif" alt="" width="26" height="26" /></a>
			</div>
			<div class="list">
				<img src="images/title1.gif" alt="" width="150" height="36" />
				
		    <div class="col-1-2">
             <ul class="demo1">
                <li><a href="#">蒙牛</a></li>
                <li><a href="#">伊利</a></li>
                <li><a href="#">光明</a></li>
                <li><a href="#">对比</a></li>          
             </ul>
            </div>
			</div>
			
		
		</div>
	</div>
	<div id="footer">
		<p>Copyright &copy;. All rights reserved. Design from <a href="sc.chinaz.com" target="_blank" title="Free Templates">站长素材</a></p>
	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>


