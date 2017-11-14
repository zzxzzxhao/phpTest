<?php
    //删除联系我们信息部分代码
    require_once('../../admin/conn.php');
    $id = $_GET['id'];
    $sql = "delete from contact where id='$id'";
    $res = mysql_query($sql);
    if($res){
        echo "<script>alert('删除成功');location.href='show.php';</script>";
    }else{
        echo "<script>alert('删除失败');location.href='show.php';</script>";
    }
?>