<?php  
session_start();  
  
//����Ƿ��¼����û��¼��ת���¼����  
if(!isset($_SESSION['id'])){  
    header("Location:login.php");  
    exit();  
}  
//�������ݿ������ļ�  
include('conn.php');  
$id = $_SESSION['id'];  
$username = $_SESSION['username'];  
$user_query = mysql_query("select * from userinfo where id = '$id' limit 1");  
$row = mysql_fetch_array($user_query);  
echo '�û���Ϣ��<br />';  
echo '�û�ID��',$id,'<br />';  
echo '�û�����',$username,'<br />';  
echo '<form action="login.php" method="post"> <button type="submit" name="submit"  href="login.php?action=logout">ע��</button> ��¼<br /></form>';  
?>
