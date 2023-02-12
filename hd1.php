<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
if(!empty($_POST['user']) and !empty($_POST['pwd']) or isset($_SESSION['fh']) or isset($_REQUEST['sc'])){
    $serverLink = @mysql_connect("localhost","root","root") or die("连接服务器失败!程序中断执行!");
    mysql_query("set names 'utf-8'");
    $dbLink = @mysql_select_db("test") or die("选择当前数据库失败!程序中断执行!");
    $selectSQL = "select * from zh ";
    $resultSet = @mysql_query($selectSQL) or die("数据库查询失败!程序中断执行!");
	
    if(!empty($_POST['user']) and !empty($_POST['pwd'])){
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];

        $sql = " select * from zh where user='$user' and pwd='$pwd' ";
	    $sq2 = @mysql_query($sql);
	    $row = @mysql_num_rows($sq2);
       

        if($row > 0){
?>
    <body style="background-color:#174c95;"><div style="text-align:center;background-color:#09c2d5;width: 500px; margin: 300 auto;"><?php echo "欢迎".$user."管理员登录成功！！";?>

<?php
            echo "</br>";  
            $_SESSION['fh']= $user;
?>
      
            <form action="hd3.php" >
            学院新闻
            <input Type="submit" value="发布"/>
            </br>
            </form> 
            <form action="tzgg.php" >
            通知公告
            <input Type="submit" value="发布">
            </br>
            </form>
            <form action="kydt.php" >
            科研动态
            <input Type="submit" value="发布">
            </br>
            </form>
            <form action="jxgl.php" >
            教学管理
            <input Type="submit" value="发布">
            </br>
            </form>
            <form action="xsgl.php" >
            学生管理
            <input Type="submit" value="发布">
            </br>
            </form>
            <form action="cxjy.php" >
            创新就业
            <input Type="submit" value="发布">
            </br>
            </form>
            <form action="hd1.php" method="post">
            <select name="lm" size="1">
                <option select>学院新闻</option>
                <option >通知公告</option>
                <option >科研动态</option>
                <option >教学管理</option>
                <option >学生管理</option>
                <option >创新就业</option>

            </select>
            <input Type="submit" value="删除" name="sc">
            </form>
            <form action="hd.php" >   
            <input Type="submit" value="注销账户" name="gb">
            </form>
            <form action="hd2.php" >   
            <input Type="submit" value="管理员注册" name="zc">
            </form>
        </div>   
    </body>         
<?php
         


        }elseif ($row == 0) {
            echo "登录失败！！ 请输入正确的密码和账户！！";
            echo "三秒后返回！！" ;
            header("Refresh:3; url=hd.php");
        }


        mysql_free_result($resultSet);
        mysql_close($serverLink);

  }elseif(isset($_SESSION['fh'])){
?>    


    <body style="background-color:#174c95;"><div style="text-align:center;background-color:#09c2d5;width: 500px; margin: 300 auto;"><?php echo "欢迎".$_SESSION['fh']."管理员登录成功！！";?>


        <form action="hd3.php" >
            学院新闻
            <input Type="submit" value="发布"/>
            </br>
        </form> 
        <form action="tzgg.php" >
              通知公告
              <input Type="submit" value="发布">
              </br>
        </form>
        <form action="kydt.php" >
            科研动态
            <input Type="submit" value="发布">
            </br>
        </form>
        <form action="jxgl.php" >
            教学管理
            <input Type="submit" value="发布">
            </br>
        </form>
        <form action="xsgl.php" >
            学生管理
            <input Type="submit" value="发布">
            </br>
        </form>
        <form action="cxjy.php" >
            创新就业
            <input Type="submit" value="发布">
            </br>
        </form>
        <form action="hd1.php" method="post">
            <select name="lm" size="1">
                <option select>学院新闻</option>
                <option >通知公告</option>
                <option >科研动态</option>
                <option >教学管理</option>
                <option >学生管理</option>
                <option >创新就业</option>

            </select>
            <input Type="submit" value="删除" name="sc">
        </form>
        <form action="hd.php" >   
        <input Type="submit" value="注销账户" name="gb">
        </form>
        <form action="hd2.php" >   
        <input Type="submit" value="管理员注册" name="zc">
        </br>
        </form>
    </div>
  </body> 
       
<?php   
        if(!empty($_REQUEST['sc'])){

        $serverLink = @mysql_connect("localhost","root","root") or die("连接服务器失败!程序中断执行!");
        mysql_query("set names 'utf-8'");
        $dbLink = @mysql_select_db("test") or die("选择当前数据库失败!程序中断执行!");
        $selectSQL = "select * from xw ";
        $resultSet = @mysql_query($selectSQL) or die("数据库查询失败!程序中断执行!");

          
        $lm = $_POST["lm"];

        $sql = "delete from xw where lm='$lm'";
        mysql_query($sql);


        mysql_free_result($resultSet);
        mysql_close($serverLink);

        }
             
   
  } 
}
else{
    echo "404! 三秒后返回！！" ;
    header("Refresh:3; url=hd.php");
}
?>