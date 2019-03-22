<?php
include '../../functions.php';

yimian__header("Yimian API", "IoTcat, Yimian, 呓喵酱, API", "IoTcat's API 汇总页面");

?>

        <!-- Web fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="https://cdn.yimian.xyz/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="https://cdn.yimian.xyz/bootstrap/oneui.css">
        <link href="https://cdn.bootcss.com/mdui/0.4.2/css/mdui.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>    
<?php
yimian__headerEnd();
?>
    <body style="background:url(https://api.yimian.xyz/moe?i=background&k);">   
                <!-- Live Previews -->
                <div style="border-radius:10px">
                    <section class="content content-boxed">
                        <!-- Section Content -->
                       
<div class="mdui-card mdui-hoverable" style="">
  <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
  <div class="mdui-card-media mdui-ripple">
    <!--<img src="https://api.yimian.xyz/moe?i=PCBackground&k" />-->
  </div>
  <!-- 卡片的标题和副标题 -->
  <div class="mdui-card-primary">
    <img class="mdui-card-header-avatar" src="https://cdn.yimian.xyz/img/logo/head.jpg"/>
    <div class="mdui-card-primary-headline">IoTcat's API</div>
    <div class="mdui-card-primary-subtitle">「欢迎来到IoTcat's API~」</div>
  </div>

  <div class="mdui-tab mdui-color-pink-a200">
    <a href="https://www.eee.dog" class="mdui-ripple">IoTcat's 博客</a>
    <a href="https://iotcat.me" class="mdui-ripple">关于IoTcat</a>
  </div>

</div>
<br/>
<div class="row">   
<?php

$conn_log = db__connect("log");

$res = db__getData(db__connect(), "api");

foreach($res as $row){

    $res_log = db__rowNum($conn_log, "log_api", "api", $row['api']);

    echo '
                            <div class="col-sm-4">
                                <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="'.$row['url'].'/intro.php">
                                    <div class="ribbon-box font-w600">调用'.$res_log.'次</div>
                                  
                                    <div class="block-content">
                                        <div class="h4 push-5">'.$row['title'].'</div>
                                        <p class="text-muted">'.$row['description'].'</p>
                                    </div>
                                </a>
                            </div>';


}

?>
</div>
    </body>
<script src="https://cdn.yimian.xyz/xuehua/xh.js"></script>
<script src="https://cdn.yimian.xyz/xuehua/tx-2.js"></script>
<style type="text/css">
.snow-container{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:100001;}
</style>
<div class="snow-container"></div>
<?php
yimian__simpleFooter();
