<?php
         header("Content-Type: text/html; charset=utf-8");
          $serverLink = @mysql_connect("localhost","root","root") or die("连接服务器失败!程序中断执行!");
          mysql_query("set names 'utf-8'");
          $dbLink = @mysql_select_db("test") or die("选择当前数据库失败!程序中断执行!");
          $selectSQL = "select * from xw ";
          $resultSet = @mysql_query($selectSQL) or die("数据库查询失败!程序中断执行!");
	
            
           $lm = $_POST["lm"];
           echo $lm;

           $sql = "delete from xw where lm='$lm'";
           mysql_query($sql);


           mysql_free_result($resultSet);
           mysql_close($serverLink);

 ?>          
