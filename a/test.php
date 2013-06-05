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
		echo $row['date']+'p';
		echo $row['productsales'];
		echo "</br>";
	}else{
		$arr[] = array(
		    $row['date'],intval($row['productsales'])
	    );
		echo $row['date']+'p';
		echo $row['productsales'];
		echo "</br>";
	}
	
	//echo $row['id'];
}  

//合并数组
$arrs = array_merge($arr1,$arr);
$data1 = json_encode($arrs);

?>




<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highstock Example</title>

		
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
<script src="js/highstock.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="height: 500px; min-width: 500px"></div>
  </body>
</html>
