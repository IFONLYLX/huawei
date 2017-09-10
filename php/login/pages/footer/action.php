<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>版权信息管理</title>
   
</head>

<body>
<?php
//处理页面增，删，改，查

//1.导入配置文件
require("db.php");
//2.链接数据库
$conn = @mysql_connect(HOST, USER, PASS) or die("数据库连接失败");
mysql_select_db("school", $conn) or die("数据库访问错误" . mysql_error());
mysql_query("set character set 'utf8'");//读库
mysql_query("set names 'utf8'");//写库  
//3.根据action的值 判断操作执行代码

switch ($_GET["action"]) {
    case "add":
        //获取添加信息
        $footertitle = $_POST["footertitle"];
        $footernum = $_POST["footernum"];
        $addtime = time();
        //信息过滤
        //执行sql语句
        $sql = "insert into footer values(null,'{$footertitle}','{$footernum}','{$addtime}')";

        mysql_query($sql, $conn);
        //判断是否成功
        $id = mysql_insert_id($conn);//获取添加信息自增id
        if ($id > 0) {
            echo "<h3>添加成功</h3>";

        } else {
            echo "<h3>添加失败</h3>";

        }
        echo "<a href='javascript:window.history.back()'>返回</a>";
        echo "<a href='index.php'>浏览</a>";
        break;

    case "del":
        $id = $_GET['id'];
        $sql = "delete from footer where id={$id}";
        mysql_query($sql, $conn);
        header("Location:index.php");

        break;

    case "update":
        $footertitle = $_POST["footertitle"];
        $footernum = $_POST["footernum"];
        $id = $_POST["id"];
        $sql = "update footer set footertitle='{$footertitle}',footernum='{$footernum}'  where id='{$id}'";
        mysql_query($sql, $conn);
        header("Location:index.php");
        break;


}
//4.关闭数据库
mysql_close($conn);
?>
</body>
</html>