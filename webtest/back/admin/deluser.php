<?php
    //删除管理员部分代码
    require_once('../../admin/conn.php');
    $id = $_GET['id'];
    $sql = "DELETE from user where id='$id'";
    $res = mysql_query($sql);
    if($res){
        echo "<script>alert('删除管理员成功');location.href='admin.php'</script>";
    }else{
        echo "<script>alert('删除管理员失败');location.href='admin.php'</script>";
    }
?>