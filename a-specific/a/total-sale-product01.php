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
	if($row['id']==28){
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
<link rel="stylesheet" type="text/css" href="style1-product.css" />

       

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
		
	
	<!--不同品牌在每个年份占的比例-->
     <link type="text/css" rel="stylesheet" href="ex.css?3.2"/> 
    <link type="text/css" rel="stylesheet" href="css-provis/jquery-ui-1.8rc3.custom.css"/> 
    <script type="text/javascript" src="js-provis/protovis-r3.2.js"></script> 
    <script type="text/javascript" src="js-provis/jquery-1.4.2.min.js"></script> 
    <script type="text/javascript" src="js-provis/jquery-ui-1.8rc3.custom.min.js"></script> 
    <script type="text/javascript" src="js-provis/centroid.js"></script> 
    <script type="text/javascript" src="js-provis/us_lowres.js"></script> 
    <script type="text/javascript" src="js-provis/us_stats.js"></script> 
    <script type="text/javascript" src="js-provis/us_borders.js"></script> 
    <style type="text/css"> 
 
#fig {
  width: 800px;
  height: 500px;
  margin-top: 30px;
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
<!-- end-->	
		
		
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
				<div class="description">
				
				  
				  <script src="./js/highcharts/highcharts.js"></script>
                    <script src="./js/highcharts/modules/exporting.js"></script>
				
				      <div id="container1" style="min-width: 400px; height: 500px; margin: 0 auto;margin-bottom=30px;"></div>
				
				<!--不同品牌在每个年份占的比例-->
				
				<div id="center"><div id="fig"> 
    <div id="container"> 
      <b id="yearLabel">Year:</b
      ><div id="yearSlider"></div
      ><img id="play" src="play.png" alt="Play" onclick="playClick()"> 
    </div> 
    <script type="text/javascript+protovis"> 
 
$(yearSlider).slider({
  min: us_stats.minYear,
  max: us_stats.maxYear,
  value: us_stats.maxYear,
  slide: function(e, ui) {
    year = ui.value;
    updateYear();
    vis.render();
  }
});
 
var year = 2008;
 
us_lowres.forEach(function(c) {
  c.code = c.code.toUpperCase();
  c.center = centroid(c.borders[0]);
});
 
var i = 0,
    w = 810,
    h = 400,
    mapMargin = 30;
 
var scale = pv.Geo.scale()
    .domain({lng: -128, lat: 24}, {lng: -64, lat: 50})
    .range({x: mapMargin, y: mapMargin}, {x: w-mapMargin, y: h-mapMargin});
 
var legendMargin = 20,
    ease = null,
    yearsMargin = 100;
 
var yearsScale = pv.Scale.linear()
    .domain(us_stats.minYear, us_stats.maxYear)
    .range(yearsMargin + 2, w - yearsMargin);
 
var legendScale = pv.Scale.linear()
    .domain(14, 35)
    .range(legendMargin, w - legendMargin);
 
var col = function(v) {
  if (v < 17) return "#008038";
  if (v < 20) return "#A3D396";
  if (v < 23) return "#FDD2AA";
  if (v < 26) return "#F7976B";
  if (v < 29) return "#F26123";
  if (v < 32) return "#E12816";
  /* else */ return "#B7161E";
};
 
var numToRad = function(n) {
  return Math.sqrt(n)/45;
};
 
var nodes = [],
    codeToNode = [],
    links = [];
 
us_lowres.forEach(function(s) {
  if (us_stats[s.code]) {
    var x = scale(s.center).x,
        y = scale(s.center).y,
        numObese = us_stats[s.code].pop[us_stats.yearIdx(year)]*us_stats[s.code].obese[us_stats.yearIdx(year)]/100,
        n = {x: x, y: y, p: {x: x, y: y}, r: numToRad(numObese), code:s.code};
    nodes.push(n);
    codeToNode[s.code] = n;
  }
});
 
us_lowres.forEach(function(s) {
  if (us_stats[s.code]) {
    var borders = us_borders[s.code];
    borders.forEach(function(b) {
      if (codeToNode[s.code] && codeToNode[b] && s.code < b) {
        var nodeA = codeToNode[s.code];
        var nodeB = codeToNode[b];
        links.push({sourceNode:nodeA, targetNode:nodeB, length:(nodeA.r + nodeB.r + 2)});
      }
    });
  }
});
 
function updateYear() {
  nodes.forEach(function(n) n.r = numToRad(us_stats[n.code].pop[us_stats.yearIdx(year)]*us_stats[n.code].obese[us_stats.yearIdx(year)]/100));
  links.forEach(function(l) l.length = (l.sourceNode.r + l.targetNode.r + 2));
  i = 0;
  var stepSome = setInterval(function() {
    if (i++ > 10) clearInterval(stepSome);
    sim.step();
    vis.render();
  }, 20);
}
 
var timer = undefined;
function playClick() {
  if (timer) {
    stop();
  } else {
    if (year == us_stats.maxYear) year = us_stats.minYear;
    $(yearSlider).slider('value', year);
    $(play).attr("src", 'stop.png');
    updateYear();
    vis.render();
    timer = setInterval(function() {
      year++;
      if (year >= us_stats.maxYear) stop();
      $(yearSlider).slider('value', year);
      updateYear();
      vis.render();
    }, 900);
  }
}
 
// Stop the animation
function stop() {
  clearInterval(timer);
  timer = undefined;
  $(play).attr("src", 'play.png');
}
 
var collisionConstraint = pv.Constraint.collision(function(d) d.r + 1),
    positionConstraint = pv.Constraint.position(function(d) d.p),
    linkConstraint = pv.Force.spring(100).links(links);
 
var sim = pv.simulation(nodes)
    .constraint(collisionConstraint)
    .constraint(positionConstraint)
    .constraint(linkConstraint)
    .force(pv.Force.drag());
 
var vis = new pv.Panel()
    .width(w)
    .height(h)
    .top(50)
    .bottom(30);
 
// Add the ticks and labels for the year slider
vis.add(pv.Rule)
     .data(pv.range(us_stats.minYear, us_stats.maxYear + .1))
     .left(yearsScale)
     .height(4)
     .top(-40)
   .anchor("bottom").add(pv.Label);
 
vis.add(pv.Dot)
    .data(nodes)
    .left(function(d) d.x)
    .top(function(d) d.y)
    .radius(function(d) d.r)
    .fillStyle(function(d) col(us_stats[d.code].obese[us_stats.yearIdx(year)]))
    .strokeStyle(null)
    .title(function(d) us_stats[d.code].name + ": " + us_stats[d.code].obese[us_stats.yearIdx(year)] + "%")
   .add(pv.Label)
    .text(function(d) d.code)
    .textStyle("#fee")
    .font(function(d) "bold " + (4*Math.log(d.r)).toFixed(0) + "px sans-serif")
    .textAlign("center")
    .textBaseline("middle");
 
vis.add(pv.Dot)
    .data([
        {v: 10000000, l: "10M"},
        {v: 1000000, l: "1M"},
        {v: 5000000, l: "5M"},
        {v: 100000, l: "100K"}
      ])
    .fillStyle(null)
    .strokeStyle("#555")
    .left(150)
    .bottom(-30)
    .radius(function(d) numToRad(d.v))
  .anchor("top").add(pv.Label)
    .text(function(d) d.l)
 
// Add the color bars for the color legend
vis.add(pv.Bar)
    .data(pv.range(14,32.1,3))
    .bottom(function(d) this.index * 15 - 28)
    .height(10)
    .width(10)
    .left(5)
     .fillStyle(function(d) col(14 + 3 * this.index))
    .lineWidth(null)
  .anchor("right").add(pv.Label)
    .textAlign("left")
    .text(function(d) d + " - " + (d+3) + "%");
 
ease = setInterval(function() {
  if (i++ > 140) {
    clearInterval(ease);
    ease = null;
  }
  sim.step();
  positionConstraint.alpha(Math.pow(.7, i + 2) + .03);
  linkConstraint.damping(Math.pow(.7, i + 2) + .03);
  vis.render();
}, 42);
 
    </script> 
  </div></div>
</div>

<!--end-->
			
			</div>
		</div>
		<div id="sidebar">
		    <div id="search">
				<input type="text" value="Search"> <a href="sc.chinaz.com"><img src="images/go.gif" alt="" width="26" height="26" /></a>
			</div>
			<div class="list">
				<img src="images/title1.gif" alt="" width="87" height="36" />
				
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


