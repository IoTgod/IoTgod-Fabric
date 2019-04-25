<?php
include '../functions.php';


$fp = $_COOKIE['fp'];

$usr = db__getUsrInfo($fp);

$port=$usr['ssr'];

$conn=db__connect();

$row=db__getData($conn,'ssr','port',$port);

$passwd=$row[0]['passwd'];

$str=base64_encode("aes-256-cfb:$passwd@usa.ssr.yimian.xyz:$port")."
ss://".base64_encode("aes-256-cfb:$passwd@aus.ssr.yimian.xyz:$port")."
ss://".base64_encode("aes-256-cfb:$passwd@ssr.yimian.xyz:$port")."
ss://".base64_encode("aes-256-cfb:$passwd@pixiv.ssr.yimian.xyz:$port");

$str1=base64_encode("aes-256-cfb:$passwd@usa.ssr.yimian.xyz:$port");
$str2=base64_encode("aes-256-cfb:$passwd@aus.ssr.yimian.xyz:$port");
$str3=base64_encode("aes-256-cfb:$passwd@ssr.yimian.xyz:$port");
$str4=base64_encode("aes-256-cfb:$passwd@pixiv.ssr.yimian.xyz:$port");


yimian__header("Yimain VPN");

?>
<script src="https://cdn.bootcss.com/clipboard.js/1.7.1/clipboard.min.js"></script>
<?
yimian__headerEnd();
?>

<p>你好，<?php echo $usr['name']?>~ </p>
<br/>

<p>你的首选密钥是：ss://<?php echo $str3?></p>
<p>美国服务器密钥：ss://<?php echo $str1?></p>
<p>澳大利亚服务器密钥：ss://<?php echo $str2?></p>
<p>P站优化专线：ss://<?php echo $str4?></p>

<div><span id="btn" data-clipboard-text="ss://<?php echo $str?>"><button>点击复制全部</button></span></div>
<div id="show" style="display: none;">已复制</div>


<br/><br/><br/><br/><br/><br/><br/>



<script>
var btn = document.getElementById('btn');
var clipboard = new Clipboard(btn);
clipboard.on('success', function(e) {
    $('#show').slideDown().delay(1500).slideUp(300);
    console.log(e);
    alert("复制成功！");
});
clipboard.on('error', function(e) {
    $('#show').slideDown().delay(1500).slideUp(300);
    console.log(e);
});
</script>


<?php

yimian__footer();
die();