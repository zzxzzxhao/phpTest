<?php
    //添加新闻资讯
    require_once('../../admin/conn.php');
    $title=$_POST['title'];
    $content = $_POST['content'];
    $type = $_POST['type'];
    $newtime = time();

    $sql  = "insert into `news`(title,type,content,newtime) values('$title','$type','$content','$newtime')";
    $res = mysql_query($sql);
    if($res){
        echo "<script>alert('添加新闻成功');location.href='news.php';</script>";
    }else{
        echo "<script>alert('添加新闻失败');location.href='news.php';</script>";
    }

?>