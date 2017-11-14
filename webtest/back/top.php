<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin-top:50px;
			text-align: center;
		}
		a{
			text-decoration: none;
			float: right;
			margin-right: 15px;
			color: red;
		}
	</style>
</head>
<body>
	<h1>郑志欣PHP测试页面</h1>
	<?php 
		if (!empty($_SESSION['username'])) {
	?>
	<a href="loginout.php?act=loginout" target="_top">退出</a>
	<?php
		}
	?>
</body>
</html>