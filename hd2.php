<?php
session_start();
    header("Content-Type: text/html; charset=utf-8");
    if(isset($_SESSION['fh'])){
        if(isset($_POST["user"]) and isset($_POST["pwd"])){
            if(!empty($_POST["user"]) and !empty($_POST["pwd"])){
                $serverLink = @mysql_connect("localhost","root","root") or die("连接服务器失败!程序中断执行!");
                mysql_query("set names 'utf-8'");
                $dbLink = @mysql_select_db("test") or die("选择当前数据库失败!程序中断执行!");
                $selectSQL = "select * from zh ";
                $resultSet = @mysql_query($selectSQL) or die("数据库查询失败!程序中断执行!");
                
                $user = $_POST['user']; 
                $pwd = $_POST['pwd'];
                $pwd2 = $_POST['pwd2'];
                
                $sql = " select * from zh where user='$user' ";
                $sq2 = @mysql_query($sql);
                $row = @mysql_num_rows($sq2);
                if($row > 0){
?>
                    <div style="text-align:center;background-color:#09c2d5;width: 300px;height: 50px;margin: 0 auto;"> <?php echo "该用户已经存在！！";?>
<?php
                    echo "<br/>";
                }elseif ($row == 0) {
                    if($pwd == $pwd2){
?>
                    <div style="text-align:center;background-color:#09c2d5;width: 300px;height: 50px;margin: 0 auto;"> <?php echo "注册账户成功！！";?>
<?php
                    echo "<br/>";
                    $xr = "insert into zh values ('$user','$pwd')";
                    mysql_query($xr);
                    }else{
?>
                    <div style="text-align:center;background-color:#09c2d5;width: 300px;height: 50px;margin: 0 auto;"> <?php echo "密码不一致！！";?></div>
<?php
                        echo "<br/>";
                    }
                }
                
                    mysql_free_result($resultSet);
                    mysql_close($serverLink);
        }else if(isset($_REQUEST["zc"])){
            
                if(empty($_POST['user'])){
?>
                <div style="text-align:center;background-color:#09c2d5;width: 300px;height: 50px;margin: 0 auto;"> <?php echo "请填写完整！！";?>
<?php                
                echo "<br/>";
                }
            }
        
        }
    ?>
    <body style="background-color:#174c95;">
        <div style="text-align:center;background-color:#09c2d5;width: 300px;height: 250px;margin: 300 auto;">
            <form action="hd2.php" method="POST"  >
                <br>
                用户名：&emsp;
                <input Type="text" name="user"/>
                <br>
                <br>
                密码：&emsp;&ensp;&ensp;
                <input Type="password" name="pwd"/>
                <br>
                <br>
                密码确认：
                <input Type="password" name="pwd2"/>
                <br>
                <br>
                <input Type="submit" name="zc" value="注册" />
                </form>
            <form action="hd1.php" method="POST" ><input Type="submit" value="返回" name="fh"></form>
      </div>
    </body>
 <?php
    }else{
        echo "404! 三秒后返回！！" ;
        header("Refresh:3; url=hd.php");
    }
 ?>