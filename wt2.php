<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0033)file:///E:/phpStudy/WWW/hndx1.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	
	<title>海大简介-海南大学 | Hainan University</title><meta name="keywords" content="海南大学 学校官网  Hainan University">

	
	<meta name="description" content="海南大学 | Hainan University | www.hainanu.edu.cn">
	<link rel="stylesheet" href="./hndx1_files/layui.css">
	<link rel="stylesheet" type="text/css" href="./hndx1_files/style201909.css">
	<link rel="stylesheet" type="text/css" href="./hndx1_files/iconfont.css">
    <link href="https://ha.hainanu.edu.cn/home2020/home2019/favicon.ico" type="image/x-icon" rel="icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="baidu-site-verification" content="dVBWGbBH1j">
	<script language="javascript" type="text/javascript" src="./hndx1_files/jquery_002.js.下载"></script>
	<script language="javascript" type="text/javascript" src="./hndx1_files/jquery.js.下载"></script>
	<script src="./hndx1_files/layui.js.下载"></script>
<!--Announced by Visual SiteBuilder 9-->
<link rel="stylesheet" type="text/css" href="./hndx1_files/_sitegray_d.css">
<script language="javascript" src="./hndx1_files/_sitegray.js.下载"></script>
<!-- CustomerNO:7765626265723230697a46545351574200000005405d -->
<link rel="stylesheet" type="text/css" href="./hndx1_files/jjy.css">
<script type="text/javascript" src="./hndx1_files/vsbscreen.js.下载" id="_vsbscreen" devices="pc|mobile|pad"></script>
<script type="text/javascript" src="./hndx1_files/counter.js.下载"></script>
<script type="text/javascript">_jsq_(1111,'/jjy.jsp',-1,1638138558)</script>
<link id="layuicss-layer" rel="stylesheet" href="./hndx1_files/layer.css" media="all"><script async="" charset="utf-8" src="file:///E:/phpStudy/WWW/hndx1_files/lay/modules/layer.js"></script></head>



<body>
<!--头部\-->
<div class="header-w min-w">
	<div class="width-1">
		<div class="header">
			<div class="header-left">
</a></div>
			<div class="header-right">
				
				<div class="WebSo">
					
				</div>
			</div>
		</div>
	</div>
</div>




<div class="width-bg2">
	<div class="width-1">
		<dl class="news-left-1">
			<!--导航\-->
			
			<div class="margin-t10">
				<div class="title-n3 margin-t10"><ul></ul></div>
			</div>
			<!--专题专栏\-->
			
				<div class="margin-t10">
	<em><em>
	
</em></em></div><em><em>
		</em></em></dl><em><em>
		<dl class="news-right-1">
			<div class="news-w1">
			<div class="news-w1">
<div class="title-n1"><ul><i class="iconfont iconjituanxinwen"></i><b>



科研动态</b></ul></div>
                
				<div class="about-text">
						

<?php
$serverLink = @mysql_connect("localhost","root","root") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'utf-8'");
$dbLink = @mysql_select_db("test") or die("选择当前数据库失败!程序中断执行!");
$selectSQL = "select * from xw ";
$resultSet = @mysql_query($selectSQL) or die("数据库查询失败!程序中断执行!");

        $sql = "select * from xw where lm='科研动态' order by sj desc LIMIT 5 ";
        $bt =  mysql_query($sql);

?>


<script language="javascript" src="./hndx1_files/ajax.js.下载"></script><script language="javascript">_getBatchClickTimes('null',1638138558,'wbnews','u9')</script>
<link rel="stylesheet" content-type="text/css" href="./hndx1_files/format2.css"><script>function seeContenta9(contentid,size,displayid){	document.getElementById(contentid).innerHTML = '[';	for(var i=0;i<=size;i++){		var allcontentid = contentid+(i+1);		if(allcontentid==displayid){			document.getElementById(contentid).innerHTML += " <span id='"+allcontentid+"' name='"+allcontentid+"'  >"+(i+1)+"</span> ";			document.getElementById(displayid).style.display = 'block';		}else{			document.getElementById(contentid).innerHTML += " <span style='cursor:pointer' id='"+allcontentid+"' name='"+allcontentid+"' onclick=seeContenta9('"+contentid+"','"+size+"','"+allcontentid+"')  >"+(i+1)+"</span> ";			document.getElementById(allcontentid).style.display = 'none';		}	}	document.getElementById(contentid).innerHTML += ']';}</script>
<script language="javascript" src="./hndx1_files/mp4video.js.下载"></script>
<script>_addDynClicks('wbnews',1638138558,1598)</script>
    <div id="vsb_content_2_1598_u91"><div id="vsb_content_2"><p class="vsbcontent_img">
		<?php
         while($cx = mysql_fetch_row($bt)){
		 echo '标题：'.$cx['0'];
		 echo "</br>";
		 echo '内容：'.$cx['1'];
		 echo "</br>";
		 echo '时间：'.$cx['2'];
		 echo "</br>";

		 }
		?>
	</p>


</div>
</div>


				</div>
			</div>
		</div></dl>
	</em></em></div><em><em>
</em></em></div><em><em>



<!--随屏幕滑动菜单-->
<script language="javascript" type="text/javascript" src="./hndx1_files/fixed.js.下载"></script>

<!--弹出js\-->
<script>
layui.use('layer', function(){
	var layer = layui.layer;

	$('.layer-weibo').on('click', function(){
			var img = '<img src="home2019/imgs/weibo.jpg">'
			layer.open({
			  type: 1,
			  title: '<i class="layui-title">微博</i>',
			  skin: 'layui-layer-rim', //加上边框
			  area: ['200px', '245px'],
			  content: img
			});
		});

	$('.layer-weixin').on('click', function(){
		var img = '<img src="home2019/imgs/weixin.jpg">'
		layer.open({
		  type: 1,
		  title: '<i class="layui-title">微信公众号</i>',
		  skin: 'layui-layer-rim', //加上边框
		  area: ['200px', '245px'],
		  content: img
		});
	});
	$('.useinfo').on('click', function(){
		layer.open({
		  type: 1,
		  title: '<i class="layui-title">实用信息</i>',
		  skin: 'layui-layer-rim', //加上边框
		  content:$('#useinfo')
		});
	});
	$('.college').on('click', function(){
		layer.open({
		  type: 1,
		  title: '<i class="layui-title">教学单位</i>',
		  skin: 'layui-layer-rim', //加上边框
		   area: ['680px', ''],
		  content:$('#college')
		});
	});
});
</script>

<?php

mysql_free_result($resultSet);
mysql_close($serverLink);

?>



</em></em></body></html>