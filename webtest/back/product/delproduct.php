<?php
    require_once('../../admin/conn.php');
    $id = $_GET['id'];
    $sql = "delete from product where id='$id'";
    $res = mysql_query($sql);
    if($res){
        echo "<script>alert('删除产品成功');location.href='product.php'</script>";
    }else{
        echo "<script>alert('删除产品失败');location.href='product.php'</script>";
    }
?>