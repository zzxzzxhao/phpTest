<?php
    require_once('../../admin/conn.php');
    $id = $_GET['id'];
    $sql="delete from about where id='$id'";
    $res = mysql_query($sql);
    if($res){
        echo "<script>alert('删除信息成功');location.href='about.php'</script>";
    }else{
        echo "<script>alert('删除信息失败');location.href='about.php'</script>";
    }
?>