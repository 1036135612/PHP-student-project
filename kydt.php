<?php
session_start();
 header("Content-Type: text/html; charset=utf-8");
 date_default_timezone_set("PRC");
 if(isset($_SESSION['fh'])){
    if(!empty($_POST["bt"]) and !empty($_POST["nr"])){
        $serverLink = @mysql_connect("localhost","root","root") or die("连接服务器失败!程序中断执行!");
        mysql_query("set names 'utf-8'");
        $dbLink = @mysql_select_db("test") or die("选择当前数据库失败!程序中断执行!");
        $selectSQL = "select * from xw ";
        $resultSet = @mysql_query($selectSQL) or die("数据库查询失败!程序中断执行!");


        $bt = $_POST["bt"];
        $nr = $_POST["nr"];
        $sj = date("Y-m-d D H:i:s A"); 
        $lm = "科研动态";

        $sql = "insert into xw values ('$bt','$nr','$sj','$lm')";
        mysql_query($sql);




        mysql_free_result($resultSet);
        mysql_close($serverLink);
    }elseif(isset($_REQUEST["fh"])){
        echo "三秒后返回！！";
        header("Refresh:3;url=hd1.php");
    }
?>
<form action="kydt.php" method="post">
<!-- 栏目：
<select name="lm" size="1">
    <option select>学院新闻</option>
    <option >通知公告</option>
    <option >科研动态</option>
    <option >教学管理</option>
    <option >学生管理</option>
    <option >创新就业</option>

</select> -->
</br>
标题： <input Type="text" name="bt" style="width: 265px;">
</br>
内容：
</br>
&emsp;&emsp;&nbsp;&nbsp; <textarea cols="30" rows="15" name="nr"></textarea>
</br>
&emsp;&ensp;&ensp;&nbsp;&nbsp;&nbsp;<input Type="submit" value="发布">&emsp;<input Type="reset" value="重写">
&emsp;<input Type="submit" value="返回" name="fh">

</form>
<?php
 }
 elseif(empty($_SESSION['fh'])){
    echo "404! 三秒后返回！！" ;
    header("Refresh:3; url=hd.php");
}
?>
