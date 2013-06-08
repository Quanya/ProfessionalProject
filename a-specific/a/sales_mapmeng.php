<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once('connect.php');
mysql_select_db("taoliang", $con);
$result = mysql_query("SELECT * FROM taodata5 WHERE productid=26");
$i=1;
while ($row = mysql_fetch_array($result)) {
    if ($i==1) {
        $arr1[]=$row['productsales'];
        $i++;
    } else {
        $arr2[]=$row['productsales'];
    }
}
$arr=array_merge($arr1,$arr2);
rsort($arr);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>地图</title>
        <link rel="stylesheet" type="text/css" href="style3.css" />
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script src="js/raphael.js"></script>
        <script src="js/chinamapPath.js"></script>
    <style type="text/css">
        #ChinaMap {
            padding-right: 250px;
            padding-left: 10px;
            padding-bottom: 10px;
            margin: 0px auto;
            padding-top: 10px;
            position: relative;
            text-align: center;
        }
        /*
        evert province de tip
        */
        #tiplayer {
            padding-right: 5px;
            padding-left: 5px;
            z-index: 1000;
            min-height: 1em;
            background: #000;
            max-width: 250px;
            padding-bottom: 5px;
            font: 12px 'Microsoft YaHei';
            color: #fff;
            padding-top: 5px;
            position: absolute;
            text-align: left;
            word-wrap: break-word;
            -moz-border-radius: 3px;
            -khtml-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }
/*
right label
*/
        .ToolTip {
            margin-right: 40px;
            padding-right: 5px;
            padding-left: 5px;
            z-index: 1000;
            min-height: 1em;
            background: #000;
            max-width: 350px;
            padding-bottom: 5px;
            font: 12px 'Microsoft YaHei',Arial,����,Tahoma,Sans-Serif;
            color: #fff;
            padding-top: 5px;
            position: absolute;
            text-align: center;
            word-wrap: break-word;
            -moz-border-radius: 3px;
            -khtml-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        .ToolTip {
            padding-right: 15px;
            padding-left: 15px;
            background: #faffc5;
            padding-bottom: 0px;
            color: #bb861c;
            line-height: 30px;
            padding-top: 0px;
            top: 30px;
        }
    </style>
 
    <style type="text/css">
    *{margin:0;padding:0;list-style:none;}
.tabContainer{width:100%;
             background:url(https://secure.newegg.com.cn/WebUI/WebResources/2009/Default/Nest/bg/tab.gif) repeat-x bottom;overflow:hidden;}
.tabContainer li{float:left;margin-right:2px;/*按钮之间的距离*/
                background:url(https://secure.newegg.com.cn/WebUI/WebResources/2009/Default/Nest/bg/tabOff_right.gif) no-repeat right top;}
.tabContainer li a{display:block!important;display:inline-block;padding:0 15px;height:27px;line-height:27px;
                  background:url(https://secure.newegg.com.cn/WebUI/WebResources/2009/Default/Nest/bg/tabOff_left.gif) no-repeat left top;}
</style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="header">																																																										<div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden"><h1><a href="sc.chinaz.com">best free templates</a></h1></div>
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
                        </div>
                </div>
            </div>
            <div id="sidebar">
                <div id="search">
                    <input type="text" value="Search"> <a href="sc.chinaz.com"><img src="images/go.gif" alt="" width="26" height="26" /></a>
                </div>
            </div>
                  <div  style="width:870px; overflow:hidden;">
<div id="tabCot_product" style='padding:20px 15px 10px 15px;border-left:1px solid #d6d6d6;border-right:1px solid #d6d6d6;'>
<div class="tabContainer">
	<ul id="tabCot_product-li-currentBtn-">
            <li class="currentBtn"><a href="#" title="蒙牛"style="font-weight:  bolder;color: #F07402" rel="1">蒙牛</a></li>
		<li><a href="sales_mapyi.php" title="伊利" rel="2">伊利</a></li>
		<li><a href="sales_mapguang.php" title="光明" rel="3">光明</a></li>
	</ul>
</div>
<div id="tabCot_product_1" >
<table style="border-style:none;">
  <tr>
    <td style="border-style:none; padding:0px;">
     <div id="map"></div>
        <script>
    
    
    $(document).ready(function () {

    Map();
    Bind();

});

function Map() {
    /*
    * 配置Raphael生成svg的属性
    */
    $("#map").html("");
    Raphael.getColor.reset();
    var R = Raphael("map", 650, 500); //大小与矢量图形文件图形对应；

    var current = null;
/*地图的字体*/
    var textAttr = {
        "fill": "#000",
        "font-size": "12px",
        "cursor": "pointer"
    };

    //调用绘制地图方法
    paintMap(R);

    var ToolTip = $('#ToolTip');
    //ToolTip.html('地图成功绘制！请选择省市').delay(1500).fadeOut('slow');
    $('body').append("<div id='tiplayer' style='display:none'></div>");
    var tiplayer = $('#tiplayer');
    for (var state in china) {
        //top的分省区域着色
        china[state]['path'].color = Raphael.getColor(0.9);
        //china[state]['path'].animate({fill: china[state]['path'].color, stroke: "#eee" }, 500); 全国的着色
        china[state]['path'].transform("t30,0");//省份点击浮动的效果

        (function (st, state) {
            //***获取当前图形的中心坐标
            var xx = st.getBBox().x + (st.getBBox().width / 2);
            var yy = st.getBBox().y + (st.getBBox().height / 2);

            //***修改部分地图文字偏移坐标
            switch (china[state]['name']) {
                case "江苏":
                    xx += 5;
                    yy -= 10;
                    break;
                case "河北":
                    xx -= 10;
                    yy += 20;
                    break;
                case "天津":
                    xx += 20;
                    yy += 10;
                    break;
                case "上海":
                    xx += 20;
                    break;
                case "广东":
                    yy -= 10;
                    break;
                case "澳门":
                    yy += 10;
                    break;
                case "香港":
                    xx += 20;
                    yy += 5;
                    break;
                case "甘肃":
                    xx -= 40;
                    yy -= 30;
                    break;
                case "陕西":
                    xx += 0;
                    yy += 20;
                    break;
                case "内蒙古":
                    xx -= 5;
                    yy += 65;
                    break;
                default:
            }


            //***写入地名,并加点击事件,部分区域太小，增加对文字的点击事件 top label点击的效果
            china[state]['text'] = R.text(xx, yy, china[state]['name']).attr(textAttr).click(function () {
                clickMap();
            }).hover(function () {
                var $sl = $("#topList").find("[title='" + china[state]['name'] + "']:not([select])");
                $sl.css("font-size", "20px");
            }, function () {
                var $sl = $("#topList").find("[title='" + china[state]['name'] + "']:not([select])");
                $sl.css("font-size", "");
            });

            //图形的点击事件
            $(st[0]).click(function (e) {
                clickMap();
            });
            //鼠标样式
            $(st[0]).css('cursor', 'pointer');
            //移入事件,显示信息
            $(st[0]).hover(function (e) {
                var _ST = this;

                var $sl = $("#topList").find("[title='" + china[state]['name'] + "']:not([select])");
                if (e.type === 'mouseenter') {
                    tiplayer.text(china[state]['name']).css({ 'opacity': '0.75', 'top': (e.pageY + 10) + 'px', 'left': (e.pageX -150) + 'px' }).fadeIn('normal');
                    $sl.css("font-size", "20px");
                } else {
                    if (tiplayer.is(':animated')) tiplayer.stop();
                    tiplayer.hide();

                    $sl.css("font-size", "");
                }

            });

            function clickMap() {
                if (current == state)
                    return;
                //重置上次点击的图形
                current && china[current]['path'].animate({ transform: "t30,0", fill: china[current]['isClick'] ? china[current]['path'].color : "#b0d0ec", stroke: "#ddd" }, 2000, "elastic");

                current = state;    //将当前值赋给变量
                //对本次点击
                china[state]['path'].animate({ transform: "t30,0 s1.03 1.03", fill: china[state]['path'].color, stroke: "#000" }, 1200, "elastic");
                st.toFront();   //向上
                R.safari();

                china[current]['text'].toFront();   //***向上

                if (china[current] === undefined) return;

                $("#topList").find("[title='" + china[current]['name'] + "']").click();
            }
        })

        (china[state]['path'], state);
    }
}


//***绑定数据
function Bind() {

    var args = $("#args *").serialize();
    var arr3 = new Array();
<?php 
$ii=0;
    /* @var $arr type */
    foreach($arr as $k=>$v)
    { 
        echo  "arr3[$ii] = '$v';";  
        $ii++;
    }?>
    $.ajax({
        type: "get",
        url: "js/provincemeng.js",
        dataType: "jsonp",
        jsonp: "callback",
        jsonpCallback: "get",
        success: function (data) {

            var html = "";
            $.each(data, function (i, item) {
                html += "<div style='cursor:pointer;font-weight:bolder;color:" + china[item.AreaName]['path'].color + "' title='" + china[item.AreaName]['name']
                    + "'>TOP " +(i+1)+ ":" + china[item.AreaName]['name'] + "&nbsp;"+arr3[i]+"个</div>"

                var anim = Raphael.animation({ fill: china[item.AreaName]['path'].color, stroke: "#eee" }, 1000);
                //*** anim.delay(i * 500)增加显示延时，就是让排序省份一个一个显示，但是在IE9以下没效果，因为IE会假死，知道全部显示完
                china[item.AreaName]['path'].stop().animate(anim.delay(i * 500));
                china[item.AreaName]['isClick'] = true;
            });

            //将省区排行增加到页面，并增加点击事件查询城市排行
            $("#topList").html(html).find("div").click(function () {

                var title = $(this).attr("title");
                $(this).siblings().css("font-size", "").removeAttr("select").end().css("font-size", "20px").attr("select", "");

              
               // $.post(url + "/" + encodeURI(title), args, function (data) {
                 //   $('#areaInfo').html(title + "的销量：<br/>" + data).fadeIn('slow');
                //});
            });

        },
        error: function () {
            alert('错误');
        }
    });
}
    
    
    
    </script>
        <div class="ToolTip" style="top: 650px;right: 50px;">
            <div id="topList" style="width: 180px; float: left">
            </div>
            <div id="cityList" style="display: none; float: left">
            </div>
        </div>
    </td>
  </tr>
</table>
</div>

</div>
</div>
                   
                   
                 <script type="text/javascript" language="jscript">
function tab(o, s, cb, ev){//tab切换类
	var $ = function(o){return document.getElementById(o)};
	var css = o.split((s||'_'));
	if(css.length!=4)return;
	this.event = ev || 'onclick';
	o = $(o);
	if(o){
		this.ITEM = [];
		o.id = css[0];
		var item = o.getElementsByTagName(css[1]);
		var j=1;
		for(var i=0;i<item.length;i++){
			if(item[i].className.indexOf(css[2])>=0 || item[i].className.indexOf(css[3])>=0){
				if(item[i].className == css[2])o['cur'] = item[i];
				item[i].callBack = cb||function(){};
				item[i]['css'] = css;
				item[i]['link'] = o;
				this.ITEM[j] = item[i];
				item[i]['Index'] = j++;
				item[i][this.event] = this.ACTIVE;
			}
		}
		return o;
	}
}
tab.prototype = {
	ACTIVE:function(){
		var $ = function(o){return document.getElementById(o)};
		this['link']['cur'].className = this['css'][3];
		this.className = this['css'][2];
		try{
			$(this['link']['id']+'_'+this['link']['cur']['Index']).style.display = 'none';
			$(this['link']['id']+'_'+this['Index']).style.display = 'block';
		}catch(e){}
		this.callBack.call(this);
		this['link']['cur'] = this;
	}
}
new tab('tabCot_product-li-currentBtn-', '-');
</script>                   
                   
                   
                   
                   
                   
                   
                   
      
    </div>
         <div id="footer">
            <p>Copyright &copy;. All rights reserved. Design from <a href="sc.chinaz.com" target="_blank" title="Free Templates">վ���ز�</a></p>
        </div>
        <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
    </body>
</html>
