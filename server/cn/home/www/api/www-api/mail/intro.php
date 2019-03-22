<?php
include '../../../functions.php'; 

yimian__header("邮件发送","IoTcat, 邮件发送, api", "邮件发送API介绍页面");
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
        <h2 style="font-size:15px;word-break:break-all;padding:20px 32px;margin:0;text-align:center">邮件发送 - API</h2>
    </div>
    <div style="margin:0px auto;width:90%">
        <h3 style="-webkit-transition: all .2s cubic-bezier(0, 0, 0, 0.48);-moz-transition: all .2s ease;border:.0625rem solid #fafafa;background:#fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);margin:15px 0px;padding:20px;border-radius:5px;font-size:14px;color:#333;">
        # 邮件发送API请求方式 #
        <ul>
        <li>Method: GET/POST</li>
        </ul>
        <hr>
        # 请求地址 #<br/>
        <a style="color:#fd4b5c;text-decoration:none;">https://api.yimian.xyz/mail</a><br/>
        # 参数 #<br/>
        <li>to //收信人邮箱</li>
        <li>subject //邮件主题</li>
        <li>body //邮件内容</li>
        <li>from //发件人名称</li>
        <hr>
        # 返回数据(Json格式) #<br/>
        <li>state //布尔型，true为发送成功，false为失败</li>
        <hr>
        # 备注 #<br/>
        更多用法参考<a href="http://www.eee.dog/index.php/archives/192/">https://www.eee.dog/index.php/archives/192/</a><br/>
        <hr>
        # 示例 #<br/>
        <a style="color:#fd4b5c;text-decoration:none；" target="_blank">https://api.yimian.xyz/mail/?to=收信邮箱&subject=邮件主题&body=邮件内容&from=发件人名称</a>
        </h3>
          </div>
</div>
<?php
yimian__simpleFooter();