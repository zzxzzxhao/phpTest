<?php
    require_once('../../admin/conn.php');
    //htmlspecialchars()  过滤html
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    if(empty($title)){
        echo "请输入标题";
    }else if(empty($content)){
        echo "请输入内容";
    }else{
        $sql  = "insert into `about`(title,content) values('$title','$content')";
        $res = mysql_query($sql);
        if($res){
            echo "<script>alert('添加信息成功');location.href='about.php';</script>";
        }else{
            echo "<script>alert('添加信息失败');history.go(-1);</script>";
        }
    }    
?>