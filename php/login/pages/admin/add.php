<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理员管理</title>
     <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.min.css">
          <style>.table th, .table td { 
text-align: center;
vertical-align: middle!important;
}
.text-right a.btn:hover{
	background-color:#a94442;
	
}
</style>
</head>
<body>
 <?php
    include("menu.php");
  ?>
<div class="container">
	<div class="col-sm-12 text-center">
   
    <h3>添加管理员</h3>

    <form  class="form-horizontal" action="action.php?action=add" method="post">
    <div class="table-responsive">
  <table class="table table-bordered">
   

             <tr>
                <td>姓名:</td>
                <td><input  class="form-control" type="text" name="username"></td>
            </tr>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input  class="form-control" type="text" name="password"></td>
            </tr>
           
            <tr>
                <td colspan="2"><input class="btn btn-info btn-sm" type="submit" value="添加">
                    <input  class="btn btn-info btn-sm" type="reset" value="重置"></td>
            </tr>

        </table>
        
    </form>
      </table>
</div>
</div>


</body>
</html>