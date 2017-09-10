<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
</head>

<body>
    <div id="top">
               <img src="../../img/华为logo.png">
               <div class="top-main">
                    <ul>
                        <li><a href="../../pages/news.php" target="new"><p class="glyphicon glyphicon-home"></p>主页管理</a></li>
                        <li><a href="../../pages/news.php" target="new"><p class="glyphicon glyphicon-cog"></p>权限管理</a></li>
                        <li><a href="../../pages/news.php" target="new"><p class="glyphicon glyphicon-book"></p>文章管理</a></li>
                        <li><a href="../../pages/news.php" target="new"><p class="glyphicon glyphicon-user"></p>用户管理</a></li>
                        <li><a href="../../pages/news.php" target="new"><p class="glyphicon glyphicon-comment"></p>评论管理</a></li>
                  	    <li><a  href="pages/admin/menu.php" target="a2"><p class="glyphicon glyphicon-heart-empty"></p>会员管理</a></li>
                        <li><a href="../../pages/news.php" target="new"><p class="glyphicon glyphicon-tags"></p>产品管理</a></li>
                    </ul>
                    
               </div>
               <div class="new"><a href="../../index.html" target="_top" class="text-danger" >注销</a>
               
               <p><a href="##" class="text-warning">
               <?php  
session_start();  
  
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['id'])){  
    header("Location:login.php");  
    exit();  
}  
//包含数据库连接文件  
 require_once('../../login/conn.php'); 
$id = $_SESSION['id'];  
$username = $_SESSION['username'];  
$user_query = mysql_query("select * from userinfo where id = '$id' limit 1");  
$row = mysql_fetch_array($user_query);  
echo '用户名：',$username,'<br />';  
?>
               </a><a id="blink">在线</a></p>
               </div>
    </div>
<script language="javascript"> 
function changeColor(){ 
var color="#000|#3cc|#900"; 
color=color.split("|"); 
document.getElementById("blink").style.color=color[parseInt(Math.random() * color.length)]; 
} 
setInterval("changeColor()",200); 
</script>
</body>
</html>
