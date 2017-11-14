<?php 
	//连接数据库
	session_start();
	require_once('../admin/conn.php');

	//获取表单信息
	$name=trim($_POST['username']);
	$password=md5($_POST['password']);
	$_SESSION['usernam']=trim($_POST['username']);
	$_SESSION['password']=trim($_POST['password']);

	//查询数据库，然后取出数据库信息，如果和表单提交的信息一致，则登录成功，进入后台
	$sql="select * from user where username='$name' and password='$password'";
	$res=mysql_query($sql);
	$row=mysql_fetch_row($res);
	if ($row) {
		echo "<script>alert('success!')</script>";
		echo "<script>location.href='main.php'</script>";
	}else{
		echo "<script>alert('failed!')</script>";
		echo "<script>history.go(-1);</script>";
	}
?>