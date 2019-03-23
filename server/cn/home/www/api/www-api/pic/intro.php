<?php
include '../../../functions.php'; 

yimian__header("壁纸随机图","IoTcat, 壁纸随机图, api", "壁纸随机图API介绍页面");
?>

<meta name="theme-color" content="#fd4b5c">

<?php
yimian__headerEnd();
?>

<style type="text/css">
h3:hover {box-shadow:0px 0px 8px #D1D1D1;}
</style>
<div style="box-shadow: 5px 5px 25px 0 rgba(46,61,73,.2);border-radius:15px;font-size:13px;width:950px;font-family:微软雅黑,'Helvetica Neue',Arial,sans-serif;margin:10px auto 0px;border:0px solid #eee;max-width:100%;">
    <div style="width:100%;background-color: #3174ed;background-image: linear-gradient(90deg, #3174ed 0%, #FA8BFF 35%, #3fd9fb 88%);color:#FFFFFF;border-radius:15px 15px 0 0;">
        <h2 style="font-size:15px;word-break:break-all;padding:20px 32px;margin:0;text-align:center">壁纸随机图 - API</h2>
    </div>
    <div style="margin:0px auto;width:90%">
        <h3 style="-webkit-transition: all .2s cubic-bezier(0, 0, 0, 0.48);-moz-transition: all .2s ease;border:.0625rem solid #fafafa;background:#fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);margin:15px 0px;padding:20px;border-radius:5px;font-size:14px;color:#333;">
        # 壁纸随机图API请求方式 #
        <ul>
        <li>Method: GET/POST</li>
        </ul>
        <hr>
        # 请求地址 #<br/>
        <a style="color:#fd4b5c;text-decoration:none;">https://api.yimian.xyz/pic</a><br/>
        # 参数 #<br/>
        <li>i //type=city城市/animal动物/universe宇宙/draw绘画/church教堂/europe欧式/sea海滨/material创意/green绿色/nature自然/road小路，留空默认随机输出1920x1080壁纸</li>
        <li>k //更快速返回图片</li>
        <li>s //通过给这个参数不同的值来返回不同的图片</li>
        <hr>
        # 返回数据 #<br/>
        <div style="width:100%;background-color: #000;background-image: linear-gradient(90deg, #6694ed 0%,);color:#FFFFFF;border-radius:5px">
        本API无返回数据,直接输出图片<br/>
        </div>
        <hr>
        # 备注 #<br/>
        更多用法参考<a href="https://www.eee.dog/tech/rand-pic-api.html">https://www.eee.dog/tech/rand-pic-api.html</a><br/>
        <hr>
        # 示例 #<br/>
        <a style="color:#fd4b5c;text-decoration:none；" target="_blank">https://api.yimian.xyz/pic</a><br/>
        <a style="color:#fd4b5c;text-decoration:none；" target="_blank">https://api.yimian.xyz/pic?k</a>
        <br/><a style="color:#fd4b5c;text-decoration:none；" target="_blank">https://api.yimian.xyz/pic?i=city&k</a>
        <br/><a style="color:#fd4b5c;text-decoration:none；" target="_blank">https://api.yimian.xyz/pic?i=universe&k&s=1515</a>
        </h3>
          </div>
</div>
<?php
yimian__footer();