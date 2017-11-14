<?php
    require_once('../admin/conn.php');
    $sql ="SELECT * from product order by id desc limit 0,4";
    $res = mysql_query($sql);
    
    $sql1 = "SELECT * from news where type = 1 limit 0,5";
    $res1 = mysql_query($sql1);

    date_default_timezone_set("PRC");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="format-detection" content="telephone=no">
    <title>首页</title>
</head>
<style type="text/css">
    *{
        margin:0px;
        padding:0px;
    }
    /*头部样式*/
    #top{
        width:410px;
        height:40px;
        margin:0 auto;
    }
    body{
        background:#f0f0f0;
    }
    #to_left{
        float:left;
    }
    #top_right{
        float:right;
        margin-top:20px;
        margin-right:15px;
    }
    li{
        float:left;
        list-style:none;
        margin:0px 5px;
        padding-bottom:15px;
    }
    li a{
        text-decoration:none;
        color:#000;
    }
    li a:hover{
        color:red;
    }
    #cnt{
        width:410px;
        margin:0 auto;
    }

    /*首页内容部分样式*/
    .dv{
        width:410px;
        border:1px solid #ccc;
        margin:0 auto;
        margin-top:30px;
    }
    .dv1{
        width:90px;
        height:50px;
        margin:0 auto;
        line-height:50px;
        background:#f0f0f0;
        text-align:center;
        margin-top:-28px;
        font-weight:bold;
    }
    .content{
        width:410px;
        text-align:center;
        font-size:12px;
        margin:0 auto;
        line-height:25px;
    }
    .product{
        width:410px;
        height:200px;
        margin:0 auto;
    }
    .product_1{
        width:80px;
        height:80px;
        float:left;
        margin-left:5px;
        margin-top:18px;
        padding-left:12px;
    }
    .info{
        width:410px;
        height:250px;
        background:#eee;
        margin:0 auto;
    }
    .info_left{
        width:200px;
        border-right:1px dashed #ccc;
    }
    .info_left h3{
        padding-top:15px;
        margin-left:15px;
    }
    .info_left p{
        padding-left:15px;
        margin-top:8px;
        text-indent:2em;
        line-height:25px;
        float:left;
    }
    .info_right{
        width:200px;
        float:right;
    }
    .info_right h3{
        padding-top:15px;
        margin-left:15px;
    }
    .info_right div{
        padding-left:15px;
        margin-top:8px;
        padding-top:10px;
    }
    .info_right span{
        float:right;
        margin-right:15px;
    }
    /*底部样式*/
    .but{
        width:410px;
        height:65px;
        margin:0 auto;
        text-align:center;
        background:#999;
        padding-top:8px;
        margin-top:5px;
    }
</style>
<body>
    <div class="body">
    <div id="top">
        <div id="top_right">
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="about.php">关于我们</a></li>
                <li><a href="news.php">新闻资讯</a></li>
                <li><a href="product.php">产品展示</a></li>
                <li><a href="contact.php">联系我们</a></li>
            </ul>
        </div>
        <div id="top_left"><img src="1.jpg" width="50" height="50"></div>
    </div>
    <div id="cnt">
        <img src="2.jpg" width="410px" height="100">
    </div>

    <div class="dv"></div>
    <div class="dv1">产品展示</div>

    <div class="content">
        核心团队长期在中国科学院、航天部工作，具有丰厚的环保、太阳能、真空电子束、机械制造等专业技术研发和实际工程经验积累，系本领域
        <p>资深高级专家。主要业务处于国内领先、国际先进水平</p>
    </div>

    <div class="product">
        <?php 
            while ($row = mysql_fetch_array($res)) {
         ?>
         <div class="product_1">
             <a href="#"><img src="../uploads/<?php echo $row['imgname'] ?>" width="80" height="90"></a>
         </div>
         <?php } ?>
    </div>


    <div class="info">
        <div class="info_right">
            <h3>新闻资讯</h3>
            <?php 
                while ($row1=mysql_fetch_array($res1)) {
             ?>
            <div>
                <?php echo $row1['title'];?>
                 <span><?php echo date('y-m-d',$row1['newtime']); ?></span>
            </div>
            <?php } ?>
        </div>
        <div class="info_left">
            <h3>公司简介</h3>
            <p>核心团队长期在中国科学院、航天部工作，具有丰厚的环保、太阳能、真空电子束、机械制造等专业技术研发和实际工程经验积累，系本领域资深高级专家。主要业务处于国内领先、国际先进水平</p>
        </div>
    </div>

    <div class="but">地址：安徽省合肥市科学大道669号(黄山路与科学大道交口东南角) 预约电话：400-800-9558
                        备ICP 皖0219845号 <p>版权所有：合肥环保科技 All rights reserved</p>
    </div>

    </div>
</body>
</html>