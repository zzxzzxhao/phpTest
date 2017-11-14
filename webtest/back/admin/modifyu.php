<?php 
	require_once('../../admin/conn.php');
	$id=$_GET['id'];
	$sql="select * from user where id = '$id'";
	$info=mysql_query($sql);
	$row=mysql_fetch_array($info);
?>
<!DOCTYPE html>
<html>
<head>
	<title>修改管理员</title>
	<meta charset="utf-8">
	<style type="text/css">
		.ipt{
			width:180px;
			height:30px;
			border-radius:5px;
			outline:none;
			border:1px solid #eee;
			box-sizing:border-box;
			padding-left:15px;
		}
        .sub{
        	width:50px;
        	height:20px;
        	border:1px solid #eee;
        	background:#eee;
        	color:#ff7575;
        }
	</style>
</head>
<body>
	<form method="post" action="modifyuser.php?id=<?php echo($id) ?>">
		用户名：<input type="username" name="username" class="ipt" value="<?php echo $row['username']; ?>">
		<br><br>
		密&nbsp;&nbsp;&nbsp;码：<input type="password" name=" password" class="ipt" value="<?php echo $row['password']; ?>"> 
		<br><br>
		<input type="submit" value="修改" class="sub">
	</form>
</body>
</html>