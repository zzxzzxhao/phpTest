<?php
    //删除新闻资讯部分代码
    require_once('../../admin/conn.php');
    $id = $_GET['id'];
    $sql = "delete from news where id='$id'";
    $res = mysql_query($sql);
    if($res){
        echo "<script>alert('删除成功');location.href='news.php';</script>";
    }else{
        echo "<script>alert('删除失败');location.href='news.php';</script>";
    }
?>