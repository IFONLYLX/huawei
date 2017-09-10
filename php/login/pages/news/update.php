<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>新闻管理系统</title>
     <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.min.css">
</head>


<body>
<div class="container">
	<div class="col-sm-12 text-center">
    <?php
    include("menu.php");
    require("db.php");
    $conn = @mysql_connect(HOST, USER, PASS) or die("数据库连接失败");
    mysql_select_db("school", $conn) or die("数据库访问错误" . mysql_error());
    mysql_query("set character set 'utf8'");//读库
    mysql_query("set names 'utf8'");//写库
    $sql = "select * from news where id={$_GET['id']}";
    $result = mysql_query($sql, $conn);
    if ($result && mysql_num_rows($result) > 0) {
        $news = mysql_fetch_assoc($result);

    } else {
        die("不存在");

    }


    ?>
    <h3>编辑新闻</h3>

    <form  class="form-horizontal" action="action.php?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo $news['id'] ?>">
        <div class="table-responsive">
  <table class="table table-bordered">
            <tr>
                <td>标题:</td>
                <td><input  class="form-control" type="text" name="title" value="<?php echo $news['title'] ?>"></td>
            </tr>
            <tr>
                <td>关键字:</td>
                <td><input  class="form-control" type="text" name="keywords" value="<?php echo $news['keywords'] ?>"></td>
            </tr>
            <tr>
                <td>作者:</td>
                <td><input  class="form-control" type="text" name="author" value="<?php echo $news['author'] ?>"></td>
            </tr>
            <tr>
                <td>内容:</td>
                <td><textarea  class="form-control" cols="10" rows="5" name="content">  <?php echo $news['content'] ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="添加">
                    <input type="reset" value="重置"></td>
            </tr>

        </table>
     </div>
    </form>

</div>
</div>
</body>
</html>