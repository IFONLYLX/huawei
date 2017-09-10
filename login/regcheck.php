    <?php  
	header("Content-Type: text/html; charset=utf-8");
        if(isset($_POST['submit']))  
        {  
            $user = $_POST["username"];  
            $psw = $_POST["password"];  
            $psw_confirm = $_POST["confirm"];  
            if($user == "" || $psw == "" || $psw_confirm == "")  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
                if($psw == $psw_confirm)  
                {  
                    $conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());  
					 mysql_select_db("school",$conn) or die("数据库访问错误".mysql_error());  
					 mysql_query("set names gb2312");    
                    $sql = "select username from userinfo where username = '$_POST[username]'"; //SQL语句  
                    $result = mysql_query($sql);    //执行SQL语句  
                    $num = mysql_num_rows($result); //统计执行结果影响的行数  
                    if($num)    //如果已经存在该用户  
                    {  
                        echo "<script>alert('已经存在');</script>";  
						header("refresh:1;url=../login.php");
                    }  
                    else    //不存在当前注册用户名称  
                    {  
                        $sql_insert = "insert into userinfo (username,password) values('$_POST[username]','$_POST[password]')";  
                        $res_insert = mysql_query($sql_insert);  
                        //$num_insert = mysql_num_rows($res_insert);  
                        if($res_insert)  
                        { 
                            echo "<script>alert('注册成功！');</script>";
							 print('<p>正在加载，请稍等...</p><br>正在自动跳转~~~');
							 header("refresh:1;url=../login.php");  
                        }  
                        else  
                        {  
                            echo "<script>alert('123系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
                    }  
                }  
                else  
                {  
                    echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
                }  
            }  
        }  
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }  
    ?>  