<?php 
	//添加管理员部分代码
	//注意：当数据库存在该管理员账户时，不允许添加
	require_once('../../admin/conn.php');
	$name=$_POST['username'];
	$password=md5($_POST['password']);

	$sql1="select * from user where username = '$name'";
	$info=mysql_query($sql1);
	$res1=mysql_num_rows($info);
	if ($res1) {
		echo "<script>alert('管理员已存在');location.href='addu.php';</script>";
	}else{
		$sql  = "insert into `user`(username,password) values('$name','$password')";
		$res=mysql_query($sql);
		if ($res) {
			echo "<script>alert('添加管理员成功');location.href='admin.php';</script>";
		}else{
			echo "<script>alert('添加管理员失败');history.go(-1);</script>";
		}
	}
?>