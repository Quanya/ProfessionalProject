<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);

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

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Blog Design</title>
<link rel="stylesheet" type="text/css" href="style1.css" />

        <!--icon show-->
        <link href="css/stilearn-icon.css" rel="stylesheet" />
        <style type="text/css">
            /* just for this demo page */
            .icons-list li{
                float:left;
                width:25%;
            }
            .socialico > li{
                margin-bottom: 10px;
            }
            .socialico > li > i{
                font-size: 64px;
            }
            .socialico > li > i{
                line-height: 64px;
            }
            
    	</style>

		<link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/css.css">
		
	    <!-- styles -->
       
        
        <link href="css/pricing-table.css" rel="stylesheet" />
		
 <script type="text/javascript" src="./js/jquery.min.js"></script>
 <script type="text/javascript">
 $(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container1',
                type: 'line',
				// 图表宽度
                width: 670,
                // 图表高度
                hight: 330
				
            },
            title: {
                text: 'Weight'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: []
            },
            yAxis: {
                title: {
                    text: 'Weight'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'kg';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Weight',
                data: <?php echo $data;?>
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
					<div class="dailin">
				      <div id="container1" style="min-width: 400px; height: 350px; margin: 0 auto"></div>
					</div>
				
				<div class="total-sale-icon">  
  				  <ul class="icons-list unstyled socialico clearfix">
				    <li><i class=" socialico-aim"></i> 1000 peopel</li>
					<li><i class="socialico-linkedin"></i> 11 years</li>
					<li><i class=" socialico-vimeo"></i> 1000 Bi yuan</li>
					<li><i class=" socialico-vimeo"></i> 1000 Bi yuan</li>
			      </ul>
				</div>  
				
	
				
				
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


