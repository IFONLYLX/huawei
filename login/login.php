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
//��¼ 
$error=$_GET['error'];
   
if(!isset($_POST['submit'])){  
    exit('�Ƿ�����!');  
}  
$username=$_POST['username'];
$password=$_POST['password'];

//�������ݿ������ļ�  
include('conn.php');  
//����û����������Ƿ���ȷ  
$check_query = mysql_query("select * from userinfo where username='$username' and password='$password' limit 1");  
if($result = mysql_fetch_array($check_query)){  
    //��¼�ɹ� 
	
$str_number = trim($_POST['num']);
if(strtolower($_SESSION['rand'])==strtolower($str_number )){
echo "��֤����ȷ";
echo "<br>";

}else{
  header("location:../login.php?error=3"); 
exit;
} 
    $_SESSION['username'] = $username;  
    $_SESSION['id'] = $result['id'];  
	
    echo " ��ӭ��". $username,'���� <a href="my.php">�û�����</a><br />'; 
	
     print('���ڼ��أ����Ե�...<br>������Զ���ת~~~');
	  header("refresh:3; url=../php/login/frame.html");
  	  echo '����˴�  <form action="login.php" method="post"> <button type="submit" name="submit"  href="login.php?action=logout">ע��</button> ��¼<br /></form>';  
  
   
    exit;  
} else {  
  header("location:../login.php?error=1"); 
   exit; 
}  
  

//ע����¼  
if($_GET['action'] == "logout"){  
    unset($_SESSION['id']);  
    unset($_SESSION['username']);  
    echo 'ע����¼�ɹ�������˴� <a href="login.php">��¼</a>';  
    exit;  
}  
  
?> 
</div>
</div> 
</body>
