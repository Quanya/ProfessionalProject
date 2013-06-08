<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);
$result = mysql_query("SELECT * FROM product_sale WHERE product='a'");
while ($row = mysql_fetch_array($result)) {
    if ($row['id'] == 1) {
        $arr1[] = array(
            "name" => $row['id'],
            "y" => intval($row['sale']),
            "sliced" => true,
            "selected" => true
        );
    } else {
        $arr[] = array(
            $row['id'], intval($row['sale'])
        );
    }
}
$arrs = array_merge($arr1, $arr);
$data = json_encode($arrs);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Blog Design</title>
        <link rel="stylesheet" type="text/css" href="style3.css" />
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
        <link href="css/pricing-table.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/component2.css" />
	<script src="js/modernizr.custom.js"></script>
        
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                var chart;
                $(document).ready(function() {
                    chart = new Highcharts.Chart({
                        chart: {
                            renderTo: 'container1',
                            type: 'line',
                            width: 670,
                            hight: 330
                        },
                         title: {
                            text: 'Annual Sales'
                        },
                        subtitle: {
                            text: '（/100,000,000）'
                        },
                        xAxis: {
                            text: 'Years',
                            categories: ['1999', '2000', '2001', '2002', '2003', '2004',
                                '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012']
                        },
                        yAxis: {
                            title: {
                                text: 'Sales'
                            },
                            plotLines: [{
                                    value: 0,
                                    width: 1,
                                    color: '#808080'
                                }]

                        },
                        tooltip: {
                            formatter: function() {
                                return '<b>' + this.series.name + '</b><br/>' +
                                        this.x + ': ' + this.y + '亿元';
                            }
                        },
                        plotOptions: {
                            line: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -10,
                            y: 100,
                            borderWidth: 0
                        },
                        series: [{
                                name: 'Sales',
                                data: <?php echo $data; ?>
                            }]
                    });
                });

            });
        </script>
    </head>
    <body>
        <div id="header">																																																										<div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden"><h1><a href="sc.chinaz.com">best free templates</a></h1></div>
            <ul id="menu">
                <li><a href="#"><img src="images/but11.jpg" alt="" width="90" height="38" /></a></li>
                <li><a href="index2.html"><img src="images/but2.jpg" alt="" width="90" height="38" /></a></li>
                <li><a href="index2.html"><img src="images/but3.jpg" alt="" width="90" height="38" /></a></li>
                <li><a href="sales_mapmeng.php"><img src="images/but4.jpg" alt="" width="90" height="38" /></a></li>
                <li><a href="keyword0.php"><img src="images/but5.jpg" alt="" width="90" height="38" /></a></li>
                <li><a href="index2.html"><img src="images/but6.jpg" alt="" width="150" height="40" /></a></li>
            </ul>
            <img src="images/spacer.gif" alt="setalpm" width="120" height="120" border="0" usemap="#Map" class="rss" />
            <map name="Map">
                <area shape="circle" coords="60,60,63" href="sc.chinaz.com">
            </map>
        </div>
        <div id="content">
            <div id="posts">
                <div class="post">
                    <h2>A glass of milk, a strong nation</h2>
                    <div><span class="date">Jun 19th</span><span class="categories">For Sellers, By Quanya</span></div>
                    <div class="description">
                        <script src="./js/highcharts/highcharts.js"></script>
                        <script src="./js/highcharts/modules/exporting.js"></script>
                        <div class="dailin">
                            <div id="container1" style="min-width: 400px; height: 350px; margin: 0 auto"></div>
                        </div></div>
                        <div>  
                            <ul class="icons-list unstyled socialico clearfix">
                                <li><i class=" socialico-aim"></i> 1000 peopel</li>
                                <li><i class="socialico-linkedin"></i> 11 years</li>
                                <li><i class=" socialico-vimeo"></i> 1000 Bi yuan</li>
                                <li><i class=" socialico-vimeo"></i> 1000 Bi yuan</li>
                            </ul>
                        </div>
                </div>
                   <div id="content">
            <div id="posts">
			<div>
				<ul id="bk-list" class="bk-list clearfix">
					<li>
						<div class="bk-book book-1">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for his teenage delinquency and the State tries to reform him - but at what cost?</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>Anthony Burghiss</span>
									<span>A Catwork Orange</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-2">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums's slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>Tyrant, blackmailer, racketeer, murderer - his influence reaches every level of American society. Meet Cat Corleone, a friendly cat, a just cat, a reasonable cat. The deadliest lord of the Cata Nostra. The Catfather.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>The Catfather</span>
									<span>by Mario Purrzo</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-3">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Oceanic flyingfish spotted danio fingerfish leaffish, Billfish halibut Atlantic cod threadsail poacher slender mola. Swallower muskellunge, turbot needlefish yellow perch trout dhufish dwarf gourami false moray southern smelt cod dwarf gourami. Betta blue catfish bottlenose electric ray sablefish.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Holden Catfield is a seventeen-year-old dropout who has just been kicked out of his fourth school. Navigating his way through the challenges of growing up, Holden dissects the 'phony' aspects of society.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>J.C. Salinger</span>
									<span>The Catcher in the Rye</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-1">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for his teenage delinquency and the State tries to reform him - but at what cost?</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>Anthony Burghiss</span>
									<span>A Catwork Orange</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-2">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums's slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>Tyrant, blackmailer, racketeer, murderer - his influence reaches every level of American society. Meet Cat Corleone, a friendly cat, a just cat, a reasonable cat. The deadliest lord of the Cata Nostra. The Catfather.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>The Catfather</span>
									<span>by Mario Purrzo</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-3">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Oceanic flyingfish spotted danio fingerfish leaffish, Billfish halibut Atlantic cod threadsail poacher slender mola. Swallower muskellunge, turbot needlefish yellow perch trout dhufish dwarf gourami false moray southern smelt cod dwarf gourami. Betta blue catfish bottlenose electric ray sablefish.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Holden Catfield is a seventeen-year-old dropout who has just been kicked out of his fourth school. Navigating his way through the challenges of growing up, Holden dissects the 'phony' aspects of society.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>J.C. Salinger</span>
									<span>The Catcher in the Rye</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-1">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for his teenage delinquency and the State tries to reform him - but at what cost?</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>Anthony Burghiss</span>
									<span>A Catwork Orange</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-2">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums's slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>Tyrant, blackmailer, racketeer, murderer - his influence reaches every level of American society. Meet Cat Corleone, a friendly cat, a just cat, a reasonable cat. The deadliest lord of the Cata Nostra. The Catfather.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>The Catfather</span>
									<span>by Mario Purrzo</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-3">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Oceanic flyingfish spotted danio fingerfish leaffish, Billfish halibut Atlantic cod threadsail poacher slender mola. Swallower muskellunge, turbot needlefish yellow perch trout dhufish dwarf gourami false moray southern smelt cod dwarf gourami. Betta blue catfish bottlenose electric ray sablefish.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Holden Catfield is a seventeen-year-old dropout who has just been kicked out of his fourth school. Navigating his way through the challenges of growing up, Holden dissects the 'phony' aspects of society.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>J.C. Salinger</span>
									<span>The Catcher in the Rye</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-1">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for his teenage delinquency and the State tries to reform him - but at what cost?</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>Anthony Burghiss</span>
									<span>A Catwork Orange</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-2">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums's slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>Tyrant, blackmailer, racketeer, murderer - his influence reaches every level of American society. Meet Cat Corleone, a friendly cat, a just cat, a reasonable cat. The deadliest lord of the Cata Nostra. The Catfather.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>The Catfather</span>
									<span>by Mario Purrzo</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-3">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Oceanic flyingfish spotted danio fingerfish leaffish, Billfish halibut Atlantic cod threadsail poacher slender mola. Swallower muskellunge, turbot needlefish yellow perch trout dhufish dwarf gourami false moray southern smelt cod dwarf gourami. Betta blue catfish bottlenose electric ray sablefish.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Holden Catfield is a seventeen-year-old dropout who has just been kicked out of his fourth school. Navigating his way through the challenges of growing up, Holden dissects the 'phony' aspects of society.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>J.C. Salinger</span>
									<span>The Catcher in the Rye</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
					<li>
						<div class="bk-book book-1">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>J.C. Salinger</span>
										<span>The Catcher in the Rye</span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for his teenage delinquency and the State tries to reform him - but at what cost?</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>Anthony Burghiss</span>
									<span>A Catwork Orange</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
					</li>
				</ul>
				<div></div>
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/books2.js"></script>
		<script>
			$(function() {

				Books.init();

			});
		</script>
        </div>
                 <p class="comments">Comments - <a href="sc.chinaz.com">17</a>   <span>|</span>   <a href="index2.html">Continue Reading</a></p>
            </div>
            <div id="sidebar">
                <div id="search">
                    
                </div>
                <div class="list">
                    <img src="images/title1.gif" alt="" width="150" height="36" />
                    <div class="col-1-2">
                        <ul class="demo1">
                            <li><a href="#" style=" font-weight: bold ; color: #0044cc ">Mengniu</a></li>
                            <li><a href="total-saleyi.php">Yili</a></li>
                            <li><a href="total-saleguang.php">Guangming</a></li>
                            <li><a href="#">Compare</a></li>          
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <p>Copyright &copy;. All rights reserved. Design from <a href="sc.chinaz.com" target="_blank" title="Free Templates">վ���ز�</a></p>
        </div>
        <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>


