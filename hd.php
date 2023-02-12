<?php
session_start();
if(isset($_REQUEST["gb"])){
	session_destroy();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://127.0.0.1:8080/hd.php">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理</title>
<meta name="keywords" content="微梦科技--网站建设、微站建设、企业邮箱、虚拟主机、云主机、域名注册一站式服务">
<meta name="description" content="微梦科技，广州微梦信息科技有限公司，广州网站建设，广州微信网站建设，腾讯企业邮箱广州经销商，虚拟主机，香港主机，域名注册，广州智能建站，广州自助建站，阿里云代理商，广州企业网站建站，阿里云网站服务商，阿里云网站建设">
<link href="%E5%BE%AE%E6%A2%A6%E7%BD%91%E7%AB%99%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0_files/style.css" rel="stylesheet" type="text/css">
</head>
<body style="height: 711px;">
<script src="%E5%BE%AE%E6%A2%A6%E7%BD%91%E7%AB%99%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0_files/jquery-1.js"></script><script src="%E5%BE%AE%E6%A2%A6%E7%BD%91%E7%AB%99%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0_files/jquery_002.js"></script>
<!--必须引用的js_start-->
<script type="text/javascript" src="%E5%BE%AE%E6%A2%A6%E7%BD%91%E7%AB%99%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0_files/jquery.js"></script>
<script type="text/javascript" src="%E5%BE%AE%E6%A2%A6%E7%BD%91%E7%AB%99%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0_files/main.js"></script>
<!--必须引用的js_end-->
<script type="text/javascript">
$(document).ready(function()){
 //回车登陆
 $(document).keydown(function(e){
  var ev = window.event || e;
  if(ev.keyCode==13) {$('.submitbtn').trigger('click');}
 });




}
</script>
<style>
html { font-size: 1em; line-height: 1.4; height: 100%; }
body { overflow-x: hidden; height: 100%; font-family: "PingHei","Lucida Grande", "Lucida Sans Unicode", "STHeitiSC-Light", Helvetica,"BBAlpha Sans","S60 Sans","Hiragino Sans GB",Arial,"Microsoft YaHei","Verdana", SimHei, STXihei, SimSun, "WenQuanYi Micro Hei", sans-serif; }
*{
    margin: 0;
    padding: 0;
}
body{
	background: -webkit-linear-gradient(-60deg, #174c95 0, #077ce0 100%);
}
.bg{
	padding-top: 40px;
	box-sizing:border-box;
}

.site-loginbg{
	position: absolute;
	left: 50%;
	margin-left: -214px;
	top: 0;
	z-index: 2;
	background: none !important;
	box-sizing:border-box;
}

.site-loginbg .login-wid{
	border-top: #09c2d5 5px solid !important;
}

.site-loginbg .login-wid .subt{
	background-color: #09c2d5;
	border-bottom: #06a0b0 5px solid !important;
}

.site-loginbg .login-wid .subt:hover{
	background-color: #06a0b0;
}

.logo{
	width: 311px;
	height: 213px;
}
#display{
	left: 0;
	top: 0;
	z-index: 0; 
	display: block; 
	cursor: default; 
	position:absolute;
}
#blachole { position: fixed; top: 60px; right: 60px; width: 120px; height: 120px; }
canvas { width: 100%; height: 100%; }
/*第一屏*/
header { position: relative; color: white; height: 100%; min-height: 600px; }

header .bg { height: 100%; width: 100%; background-color: #174c95; background: -webkit-linear-gradient(-60deg, #174c95 0, #077ce0 100%); /*background-color:#001e32*/}
.site-loginbg .login-wid ul li.link{
  display: flex;
  justify-content:center;
  margin-bottom: 0;
}
.link a{
  font-size: 13px;
  color: #666;
  margin: 0 10px;
  text-decoration: none;
}
.link.kefu a{
	font-size: 12px;
	display: flex;
	align-items:center;
	margin: 0 6px;
}
.link.kefu a img{
	margin-right: 4px;
}
.link a:hover{
  color: #cd2423;
  text-decoration: underline;
}
</style>

<header>
	<div class="bg">
		<div class="logo"></div>
		
	    <div class="site-loginbg">		
			  <div class="login-wid">
			  <h1>后台登录</h1>
			  <ul><!--必要的输入参数_start-->
			  <form action="hd1.php" method="post">
			    <li class="windx">
			      <div class="lita">账户</div>
			      <div class="rita">
			        <!--登录名输入框-->
			        <input type="text" placeholder="网站管理用户名" name="user">
			      </div>
			     </li>
			     <li class="windx">
                    </br>
			      <div class="lita a1">密码</div>

			      <div class="rita">
			        <!--密码输入框-->
			        <input type="password" placeholder="网站管理密码" name="pwd">
			      </div>
			    </li>
			      </br>
				  <input type="submit" value="登录" class="subt submitbtn"  class="rita">
                  
			    </form>
                <form action="hndx.php" method="post">
				<input type="submit" value="返回" class="subt submitbtn"  class="rita">
                </form>
			    <!--必要的输入参数_end-->
			  </ul>
			  </div>
		</div><canvas id="display"></canvas>
	    <div id="blachole"></div>
	</div>
</header>
<!--背景渲染-->  
<script type="text/javascript" src="%E5%BE%AE%E6%A2%A6%E7%BD%91%E7%AB%99%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0_files/constellation.htm"></script>

</body></html>