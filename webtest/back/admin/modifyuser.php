<?php
    //修改页面php代码
    require_once('../../admin/conn.php');
    $name = $_POST['username'];
    $password = md5($_POST['password']);
    $id = $_GET['id'];
    $sql = "UPDATE user SET username='$name',password='$password' where id='$id'";
    $res = mysql_query($sql);
    if($res){
        echo "<script>alert('修改管理员成功');location.href='admin.php'</script>";
    }else{
        echo "<script>alert('修改管理员失败');history.go(-1);</script>";
    }

?>