<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>编辑脚本</title>
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
    $sql = "select * from footer where id={$_GET['id']}";
    $result = mysql_query($sql, $conn);
    if ($result && mysql_num_rows($result) > 0) {
        $news = mysql_fetch_assoc($result);

    } else {
        die("不存在");

    }


    ?>
    <h3>编辑脚本</h3>

    <form  class="form-horizontal" action="action.php?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo $news['id'] ?>">
        <div class="table-responsive">
  <table class="table table-bordered">
            
            
            
            <tr>
                <td>版本:</td>
                <td><input  class="form-control" type="text" name="footertitle" value="<?php echo $news['footertitle'] ?>"></td>
            </tr>
            <tr>
                <td>版权号码:</td>
                <td><input  class="form-control" type="text" name="footernum" value="<?php echo $news['footernum'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="修改">
                    <input type="reset" value="重置"></td>
            </tr>

        </table>
     </div>
    </form>

</div>
</div>
</body>
</html>