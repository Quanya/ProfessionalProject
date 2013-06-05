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
		
	<!--  图片轮放 -->

<style type="text/css" media="screen">
<!--
body { font: 1em "Trebuchet MS", verdana, arial, sans-serif; font-size: 100%; }
input, textarea { font-family: Arial; font-size: 125%; padding: 7px; }
label { display: block; } 

.infiniteCarousel {
  width: 395px;
  position: relative;
  margin-top: 25px;
  margin-left: 145px;
}

.infiniteCarousel .wrapper {
  width: 315px; /* .infiniteCarousel width - (.wrapper margin-left + .wrapper margin-right) */
  overflow: auto;
  min-height: 10em;
  margin: 0 40px;
  position: absolute;
  top: 0;
}

.infiniteCarousel ul a img {
  border: 5px solid #000;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

.infiniteCarousel .wrapper ul {
  width: 9999px;
  list-style-image:none;
  list-style-position:outside;
  list-style-type:none;
  margin:0;
  padding:0;
  position: absolute;
  top: 0;
}

.infiniteCarousel ul li {
  display:block;
  float:left;
  padding: 10px;
  height: 85px;
  width: 85px;
}

.infiniteCarousel ul li a img {
  display:block;
}

.infiniteCarousel .arrow {
  display: block;
  height: 36px;
  width: 37px;
  background: url(arrow.png) no-repeat 0 0;
  text-indent: -999px;
  position: absolute;
  top: 37px;
  cursor: pointer;
}

.infiniteCarousel .forward {
  background-position: 0 0;
  right: 0;
}

.infiniteCarousel .back {
  background-position: 0 -72px;
  left: 0;
}

.infiniteCarousel .forward:hover {
  background-position: 0 -36px;
}

.infiniteCarousel .back:hover {
  background-position: 0 -108px;
}



-->
</style>

<script src="jquery.min.js"></script>


<script type="text/javascript">

$.fn.infiniteCarousel = function () {

    function repeat(str, num) {
        return new Array( num + 1 ).join( str );
    }
  
    return this.each(function () {
        var $wrapper = $('> div', this).css('overflow', 'hidden'),
            $slider = $wrapper.find('> ul'),
            $items = $slider.find('> li'),
            $single = $items.filter(':first'),
            
            singleWidth = $single.outerWidth(), 
            visible = Math.ceil($wrapper.innerWidth() / singleWidth), // note: doesn't include padding or border
            currentPage = 1,
            pages = Math.ceil($items.length / visible);            


        // 1. Pad so that 'visible' number will always be seen, otherwise create empty items
        if (($items.length % visible) != 0) {
            $slider.append(repeat('<li class="empty" />', visible - ($items.length % visible)));
            $items = $slider.find('> li');
        }

        // 2. Top and tail the list with 'visible' number of items, top has the last section, and tail has the first
        $items.filter(':first').before($items.slice(- visible).clone().addClass('cloned'));
        $items.filter(':last').after($items.slice(0, visible).clone().addClass('cloned'));
        $items = $slider.find('> li'); // reselect
        
        // 3. Set the left position to the first 'real' item
        $wrapper.scrollLeft(singleWidth * visible);
        
        // 4. paging function
        function gotoPage(page) {
            var dir = page < currentPage ? -1 : 1,
                n = Math.abs(currentPage - page),
                left = singleWidth * dir * visible * n;
            
            $wrapper.filter(':not(:animated)').animate({
                scrollLeft : '+=' + left
            }, 500, function () {
                if (page == 0) {
                    $wrapper.scrollLeft(singleWidth * visible * pages);
                    page = pages;
                } else if (page > pages) {
                    $wrapper.scrollLeft(singleWidth * visible);
                    // reset back to start position
                    page = 1;
                } 

                currentPage = page;
            });                
            
            return false;
        }
        
        $wrapper.after('<a class="arrow back">&lt;</a><a class="arrow forward">&gt;</a>');
        
        // 5. Bind to the forward and back buttons
        $('a.back', this).click(function () {
            return gotoPage(currentPage - 1);                
        });
        
        $('a.forward', this).click(function () {
            return gotoPage(currentPage + 1);
        });
        
        // create a public interface to move to a specific page
        $(this).bind('goto', function (event, page) {
            gotoPage(page);
        });
    });  
};

$(document).ready(function () {
  $('.infiniteCarousel').infiniteCarousel();
});
</script>	
		
	<!--年销售额比例-->
    <!--<link type="text/css" rel="stylesheet" href="ex.css?3.2"/> -->
    <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.8rc3.custom.css"/> 
    <script type="text/javascript" src="js/protovis-r3.2.js"></script> 
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script> 
    <script type="text/javascript" src="js/jquery-ui-1.8rc3.custom.min.js"></script> 
    <script type="text/javascript" src="js/centroid.js"></script> 
    <script type="text/javascript" src="js/us_lowres.js"></script> 
    <script type="text/javascript" src="js/us_stats.js"></script> 
    <script type="text/javascript" src="js/us_borders.js"></script> 
    <style type="text/css"> 
 
#fig {
  width: 800px;
  height: 500px;
  margin-top: 10px;
}
 
#container {
  height: 10px;
}
 
#yearSlider {
  position: absolute;
  left: 100px;
  right: 90px;
  margin-top: 3px;
}
 
#yearLabel {
  position: absolute;
  left: 0px;
  width: 85px;
  text-align: right;
}
 
#play {
  position: absolute;
  right: 50px;
  cursor: pointer;
}
 
    </style> 	
		
		
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
				
				<!-- 图片轮放 -->
				
   <div class="infiniteCarousel">
      <div class="wrapper">
        <ul>
          <li><a href="http://www.flickr.com/photos/remysharp/3047035327/" title="Tall Glow"><img src="http://farm4.static.flickr.com/3011/3047035327_ca12fb2397_s.jpg" height="75" width="75" alt="Tall Glow" /></a></li>
          <li><a href="http://www.flickr.com/photos/remysharp/3047872076/" title="Wet Cab"><img src="http://farm4.static.flickr.com/3184/3047872076_61a511a04b_s.jpg" height="75" width="75" alt="Wet Cab" /></a></li>
          <li><a href="http://www.flickr.com/photos/remysharp/3047871878/" title="Rockefella"><img src="http://farm4.static.flickr.com/3048/3047871878_84bfacbd35_s.jpg" height="75" width="75" alt="Rockefella" /></a></li>
          <li><a href="http://www.flickr.com/photos/remysharp/3047034929/" title="Chrysler Reflect"><img src="http://farm4.static.flickr.com/3220/3047034929_97eaf50ea3_s.jpg" height="75" width="75" alt="Chrysler Reflect" /></a></li>
          <li><a href="http://www.flickr.com/photos/remysharp/3047871624/" title="Chrysler Up"><img src="http://farm4.static.flickr.com/3164/3047871624_2cacca4684_s.jpg" height="75" width="75" alt="Chrysler Up" /></a></li>
          <li><a href="http://www.flickr.com/photos/remysharp/3047034661/" title="Time Square Awe"><img src="http://farm4.static.flickr.com/3212/3047034661_f96548965e_s.jpg" height="75" width="75" alt="Time Square Awe" /></a></li>
          <li><a href="http://www.flickr.com/photos/remysharp/3047034531/" title="Wonky Buildings"><img src="http://farm4.static.flickr.com/3022/3047034531_9c74359401_s.jpg" height="75" width="75" alt="Wonky Buildings" /></a></li>
          <li><a href="http://www.flickr.com/photos/remysharp/3047034451/" title="Leaves of Fall"><img src="http://farm4.static.flickr.com/3199/3047034451_121c93386f_s.jpg" height="75" width="75" alt="Leaves of Fall" /></a></li>
        </ul>        
      </div>
    </div>
				
				
			
	
				
				
				</div>
			
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


