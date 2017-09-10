<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录界面</title>
    <link rel="shortcut icon" href="index.ico">
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/login.css">
   <link rel="stylesheet" type="text/css" href="css/iconfont.css">
   <script src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
<div class="login-set">
		<form style=" opacity: 0.8;" class="form-horizontal" action="login/login.php" method="post" name="form"
                      onSubmit="return InputCheck(this)">
                    <img class="img-responsive center-block" src="img/华为logo.png">
                    <a href="index.html"  type="button" class="close" aria-hidden="true"
                           >&times;</a>
                    <span class="heading">中国华为科技有限公司</span>
                        <?php  
						session_start(); 
echo "<br/>";  
error_reporting(0);
//通过 error 值，确定提示信息  
if(!empty($_GET['error'])){  
    $error=$_GET['error'];  
    if($error==1){  
        echo "<span class='text-danger h5'>您输入的账号或密码错误</span>" ;
    }else if ($error==2){  
        echo "<font color ='red'>您输入的账号或密码正确！正在加载</font>";  
    }  else if ($error==3){  
         echo "<span class='text-danger h5'>验证码错误</span>" ;
    }  else if ($error==4){  
        echo "<font color ='red'>验证码正确！正在加载</font>";  
    }  
	
}

?> 

                    <div class="form-group input-group ">

                        <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
                        <i class="fa fa-user"></i>

                    </div>

                    <div class="form-group input-group help">
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="密 码">
                        <i class="fa fa-lock"></i>
                        <a href="#" class="fa fa-question-circle"></a>
                    </div>
                    <div class="form-group input-group">
                         <span class="input-group-addon">
                     <span class=" iconfont icon-yzm"></span></span>
                     <input class="form-control" type="text" id="num" name="num" placeholder="验证码">
                        <img style=" z-index:99999;position:absolute; right:10%; top:10%;" class="pull-right" name="num"    src="login/new.php" onClick="this.src='login/new.php?id='+Math.random()"><br>
                    </div>
                    <div class="form-group">
                        <div class="main-checkbox">
                            <input type="checkbox" value="None" id="checkbox1" name="check"/>
                            <label for="checkbox1"></label>
                        </div>
                        <span class="text">记住密码</span>

                        <button type="submit" name="submit" class="btn btn-default">登录</button>
                        <a href="index.html" class="btn btn-warning btn-xs">退出</a>
                    </div>
                    
                    <p class="p">版权所有©2016 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/"> 粤A2-20044005号</a></p>
                    <p class="p">还没<span class="text-danger">注册</span>? 马上去<a href="register.html"> 注册</a></p>
                </form>


</div>

<script type="text/javascript" src="js/three.min.js"></script>

<script type="text/javascript" src="js/login.js"></script>

</body>
</html>