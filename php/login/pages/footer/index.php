<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>版权信息管理</title>
     <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.min.css">
     <style>.table th, .table td { 
text-align: center;
vertical-align: middle!important;
}
.text-right a.btn:hover{
	background-color:#a94442;
	
}
input{
	border:none;}
</style>
    <script type="text/javascript">
        function dodel(id) {
            if (confirm("确定")) {
                window.location = "action.php?action=del&id=" + id;
            }

        }

    </script>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="container"><div class="col-sm-12 text-center">
    <h3>浏览脚本</h3>
    <div class="table-responsive">
  <table class="table table-bordered  table-hover  table-striped">

        <tr>
            <th>id</th>
            <th>版本</th>
            <th>版权号码</th>
            <th>操作</th>
        </tr>
        <?php
		ini_set('date.timezone','Asia/Shanghai');
        require("db.php");
        $conn = @mysql_connect(HOST, USER, PASS) or die("数据库连接失败");
        mysql_select_db("school", $conn) or die("数据库访问错误" . mysql_error());
        mysql_query("set character set 'utf8'");//读库
        mysql_query("set names 'utf8'");//写库

        $sql = "select * from footer order by addtime desc";
        $result = mysql_query($sql, $conn);
        while ($row = mysql_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['footertitle']}</td>";
            echo "<td>{$row['footernum']}</td>";
            echo "<td>" . date("Y-m-d", $row['addtime']) . "</td>";
            echo "<td><a  class='btn btn-warning btn-xs' href='javascript:dodel({$row['id']})'>删除</a>
		
		
		<a  class='btn btn-info btn-xs' href='update.php?id={$row['id']}'> 修改</a></td>";
            echo "</tr>";
        }
        mysql_free_result($result);
        mysql_close($conn);
        ?>
</table>
</div>
</div></div>
</body>
</html>