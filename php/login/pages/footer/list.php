<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>新闻管理系统</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.min.css">
    <style>.table th, .table td {
            text-align: center;
            vertical-align: middle !important;
        }

        .text-right a.btn:hover {
            background-color: #a94442;

        }

        input {
            border: none;
        }
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
<div class="container">
    <div class="col-sm-12 text-center">
        <h3>搜索脚本</h3>

        <form action="list.php" method="get">
            标题:<input type="text" name="title" value="<?php echo $_GET['title']; ?>">
            关键字:<input type="text" name="keywords" value="<?php echo $_GET['keywords']; ?>">
            作者:<input type="text" name="author" value="<?php echo $_GET['author']; ?>">
            <input type="submit" value="搜索">
            <a href="index.php">全部信息</a>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered  table-hover  table-striped">

                <tr>
                    <th>id</th>
                    <th>标题</th>
                    <th>关键字</th>
                    <th>作者</th>
                    <th>时间</th>
                    <th>内容</th>
                    <th>操作</th>
                </tr>
                <?php
                ini_set('date.timezone', 'Asia/Shanghai');
                $wherelist = array();
                if (!empty($_GET["title"])) {
                    $wherelist[] = "title like '%{$_GET['title']}%'";
                }
                if (!empty($_GET["keywords"])) {
                    $wherelist[] = "keywords like '%{$_GET['keywords']}%'";
                }
                if (!empty($_GET["author"])) {
                    $wherelist[] = "author like '%{$_GET['author']}%'";
                }
                if (count($wherelist > 0)) {
                    $where = " where " . implode(" and ", $wherelist);
                }
                //echo $where;

                require("db.php");
                $conn = @mysql_connect(HOST, USER, PASS) or die("数据库连接失败");
                mysql_select_db("school", $conn) or die("数据库访问错误" . mysql_error());
                mysql_query("set character set 'utf8'");//读库
                mysql_query("set names 'utf8'");//写库

                $sql = "select * from news {$where} order by addtime desc";
                $result = mysql_query($sql, $conn);
                while ($row = mysql_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['title']}</td>";
                    echo "<td>{$row['keywords']}</td>";
                    echo "<td>{$row['author']}</td>";
                    echo "<td>" . date("Y-m-d", $row['addtime']) . "</td>";
                    echo "<td>{$row['content']}</td>";
                    echo "<td><a  class='btn btn-warning btn-xs' href='javascript:dodel({$row['id']})'>删除</a>
		
		
		<a  class='btn btn-info btn-xs' href='update.php?id={$row['id']}'> 修改</a></td>";
                    echo "</tr>";
                }
                mysql_free_result($result);
                mysql_close($conn);
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>