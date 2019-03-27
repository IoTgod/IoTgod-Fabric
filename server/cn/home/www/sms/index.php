<?php
header('Access-Control-Allow-Origin:*');

require __DIR__ . "/qcloudsms/src/index.php";
include '../functions.php';

use Qcloud\Sms\SmsSingleSender;
use Qcloud\Sms\SmsMultiSender;
use Qcloud\Sms\SmsVoiceVerifyCodeSender;
use Qcloud\Sms\SmsVoicePromptSender;
use Qcloud\Sms\SmsStatusPuller;
use Qcloud\Sms\SmsMobileStatusPuller;

use Qcloud\Sms\VoiceFileUploader;
use Qcloud\Sms\FileVoiceSender;
use Qcloud\Sms\TtsVoiceSender;

$to = $_REQUEST['to'];
$tpl = $_REQUEST['tpl'];
$msg1 = $_REQUEST['msg1'];
$msg2 = $_REQUEST['msg2'];

$msg = array();
array_push($msg, $msg1, $msg2);
yimian__sms($to, null, $msg);


function yimian__sms($to, $tpl, $msg){

    // 短信应用SDK AppID
    $appid = 1400146012; // 1400开头

    // 短信应用SDK AppKey
    $appkey = "9625017dc9604dda8514af6e80911ee6";



    // 签名
    $smsSign = "Yimian"; // NOTE: 这里的签名只是示例，请使用真实的已申请的签名，签名参数使用的是`签名内容`，而不是`签名ID`

    $templateId = 300726;  // NOTE: 这里的模板ID`7839`只是一个示例，真实的模板ID需要在短信控制台中申请

    try {
        $ssender = new SmsSingleSender($appid, $appkey);
        $params = $msg;
        $result = $ssender->sendWithParam("86", $to, $templateId,
            $params, $smsSign, "", "");  // 签名参数未提供或者为空时，会使用默认签名发送短信
        $rsp = json_decode($result);
       echo $result;
    } catch(\Exception $e) {
        echo var_dump($e);
    }

}

