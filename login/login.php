<head>
    <link rel="shortcut icon" href="../index.ico">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <style>
		body{
			  background-image: url(../img/login/left.jpg);
		
		}</style>
</head>
<body>
<div class="container">
<div class="col-md-4 col-md-offset-4">
<?php
error_reporting(E_ALL || ~E_NOTICE); 
session_start(); 
//登录 
$error=$_GET['error'];
   
if(!isset($_POST['submit'])){  
    exit('非法访问!');  
}  
$username=$_POST['username'];
$password=$_POST['password'];

//包含数据库连接文件  
include('conn.php');  
//检测用户名及密码是否正确  
$check_query = mysql_query("select * from userinfo where username='$username' and password='$password' limit 1");  
if($result = mysql_fetch_array($check_query)){  
    //登录成功 
	
$str_number = trim($_POST['num']);
if(strtolower($_SESSION['rand'])==strtolower($str_number )){
echo "验证码正确";
echo "<br>";

}else{
  header("location:../login.php?error=3"); 
exit;
} 
    $_SESSION['username'] = $username;  
    $_SESSION['id'] = $result['id'];  
	
    echo " 欢迎你". $username,'进入 <a href="my.php">用户中心</a><br />'; 
	
     print('正在加载，请稍等...<br>三秒后自动跳转~~~');
	  header("refresh:3; url=../php/login/frame.html");
  	  echo '点击此处  <form action="login.php" method="post"> <button type="submit" name="submit"  href="login.php?action=logout">注销</button> 登录<br /></form>';  
  
   
    exit;  
} else {  
  header("location:../login.php?error=1"); 
   exit; 
}  
  

//注销登录  
if($_GET['action'] == "logout"){  
    unset($_SESSION['id']);  
    unset($_SESSION['username']);  
    echo '注销登录成功！点击此处 <a href="login.php">登录</a>';  
    exit;  
}  
  
?> 
</div>
</div> 
</body>
