<?php  
session_start();  
  
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['id'])){  
    header("Location:login.php");  
    exit();  
}  
//包含数据库连接文件  
include('conn.php');  
$id = $_SESSION['id'];  
$username = $_SESSION['username'];  
$user_query = mysql_query("select * from userinfo where id = '$id' limit 1");  
$row = mysql_fetch_array($user_query);  
echo '用户信息：<br />';  
echo '用户ID：',$id,'<br />';  
echo '用户名：',$username,'<br />';  
echo '<form action="login.php" method="post"> <button type="submit" name="submit"  href="login.php?action=logout">注销</button> 登录<br /></form>';  
?>
