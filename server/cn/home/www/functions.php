<?php
include 'config.php';

session_start();

/**global var**/
$jquery=0;


/**functions for html **/

//print a html header
function yimian__header($title="Yimian",$keywords="yimian",$description="Yimian Website")
{

	echo "<!--

   ___     ___
  |\  \    |  |
  \ \  \   |  |
   \ \  \  |  |
    \ \  \_|  |  ___    _____________    ___    _________      _________     
     \ \     /  |\  \  |\   __   __  \  |\  \  |\   ___  \    |\   ___  \ 
      \ \  \/   \ \  \ \ \  \-\  \-\  \ \ \  \ \ \  \--\  \   \ \  \--\  \ 
       \ \  \    \ \  \ \ \  \ \  \ \  \ \ \  \ \ \  \  \  \   \ \  \  \  \
        \ \  \    \ \  \ \ \  \ \  \ \  \ \ \  \ \ \  \__\  \___\ \  \  \  \ 
         \ \__\    \ \__\ \ \__\ \__\ \__\ \ \__\ \ \___________\\ \__\  \__\
          \|__|     \|__|  \|__| |__| |__|  \|__|  \|___________| \|__|  |__|

-->
";
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
";

	echo "<head>
	<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
	<link rel=\"icon\" href=\"https://cdn.yimian.xyz/img/logo/logo.ico\" type=\"image/x-icon\"/>
	<title>".$title."</title>
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
   	<meta name=\"Keywords\" content=\"".$keywords."\">
	<meta name=\"Description\" content=\"".$description."\">";
}


//jquery install
function js__jquery()
{
	if(!$GLOBALS['jquery'])
	{	
	echo "<!-- Include js Jquery and Pjax -->
<script type=\"text/javascript\" src=\"https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.js\"></script>";
	$GLOBALS['jquery']=1;
	}
}


function js__device()
{
	echo "
<script src=\"https://cdn.bootcss.com/device.js/0.2.7/device.min.js\"></script>";
}


function css__cleverLogin()
{
	echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.yimian.xyz/clever-login/clever-login_base.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.yimian.xyz/clever-login/clever-login_icon.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.yimian.xyz/clever-login/clever-login_normal.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.yimian.xyz/clever-login/clever-login_reg.css\" />";
}

function css__easyVer()
{
	echo "
<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.yimian.xyz/easyVer/easyVer.min.css\">";
}

//mark the end of the html header
function yimian__headerEnd()
{
	js__jquery();
	echo "
<script>console.log('\\n' + ' %c Yimian  %c https://www.yimian.xyz ' + '\\n', 'color: #00FFFF; background: #030307; padding:5px 0;', 'background: #4682B4; padding:5px 0;');</script>
<script>console.log('Thankfully / Proudly include Plugins:'+'\\n');";

if($GLOBALS['jquery']==1)
echo "console.log('\\n' + ' %c jQuery v3.3.1 %c https://jquery.com '+ '\\n', 'color: #fadfa3; background: #030307; padding:5px 0;', 'background: #fadfa3; padding:5px 0;');console.log('\\n' + ' %c jquery-pjax v2.0.1 %c https://github.com/defunkt/jquery-pjax ' + '\\n', 'color: #fadfa3; background: #030307; padding:5px 0;', 'background: #fadfa3; padding:5px 0;');";
	
echo "</script>
<script src=\"https://cdn.yimian.xyz/cookie/cookie.js\"></script>
<script src=\"https://pv.sohu.com/cityjson?ie=utf-8\"></script>
<script type=\"text/javascript\">ip=returnCitySN.cip;ipCity=returnCitySN.cname;</script>
<script src=\"https://cdn.yimian.xyz/fp/fp.min.js\"></script>
<script src=\"https://cdn.yimian.xyz/heartbeat/heartbeat_head.min.js\"></script>
</head>
	
<body>";
}

function js__easyVer()
{
	echo "
<script type=\"text/javascript\" src=\"https://cdn.yimian.xyz/easyVer/easyVer.min.js\"></script>";
}

function js__cleverLogin()
{
	echo "
<script type=\"text/javascript\" src=\"https://cdn.yimian.xyz/clever-login/polygonizr.min.js\"></script>
<script type=\"text/javascript\">$('#site-landing').polygonizr();</script>
<script type=\"text/javascript\" src=\"https://cdn.yimian.xyz/clever-login/clever-login.min.js\"></script>";
	js__easyVer();
}


function yimian__heartbeat()
{
	echo "
<script src=\"https://cdn.yimian.xyz/heartbeat/heartbeat_footer.min.js\"></script>";
}


function yimian__simpleFooter($bodyEnd=0)
{
	
	if(!$bodyEnd) echo "
</body>";
	yimian__heartbeat();
		echo "
</html>";
	
		
}

//print a html footer
function yimian__footer($wordColor="#C7C7C7",$backgroundColor="#2B2B2B",$urlColor="#87CEEB")
{
	echo "	<style>/*footer theme*/footer{padding:1.5rem 1rem;color:".$wordColor.";font-size:1.2rem;line-height:1.4;text-align:center;background:".$backgroundColor.";border-top:1px solid #C7C7C7}a.footera:link{color: ".$urlColor." ; text-decoration:none;}a.footera:visited {color:#79CDCD}</style>
	<script>function openwin(){window.open(\"https://iotcat.me\");}</script>
	<footer class=\"footer\">© 2018-".date("Y")." Copyright <a class=\"footera\" onclick=\"openwin()\" href=\"#\">IoTcat</a> </footer>";
	yimian__heartbeat();
	echo "</body>
</html>";
}


//set fp cookie
function yimian__setFp(){

	echo "<script src=\"https://cdn.yimian.xyz/cookie/cookie.js\"></script>
<script src=\"https://cdn.yimian.xyz/fp/fp.js\"></script>
<script>cookie.set(\"fp\", fp);</script>
<script>location.reload(false);</script>";

die();
}


// user login
function db__getUsrInfo($fp){

    $conn = db__connect();
    $res = db__getData($conn, "fp", "fp", $fp);
    $usr = db__getData($conn, "user", "tel", $res[0]['usr']);

    return $usr[0];
}


/**added functions**/
//get millis time stamp
function millis() {
list($msec, $sec) = explode(' ', microtime());
return $msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
}



/**database connection**/

//connect to database
function db__connect($servername="",$username="",$password="",$dbname="")
{
	/* reset */
	if($servername=="") $servername=$GLOBALS['g_db_serverName'];
	if($username=="") $username=$GLOBALS['g_db_usrName'];
	if($password=="") $password=$GLOBALS['g_db_psswd'];
	if($dbname=="") $dbname=$GLOBALS['g_db_dbName'];

	if($servername == "log"){

		$servername = $GLOBALS['g_db_log_serverName'];
		$username = $GLOBALS['g_db_log_usrName'];
		$password = $GLOBALS['g_db_log_psswd'];
		$dbname = $GLOBALS['g_db_log_dbName'];
	}elseif($servername == "yulu"){

		$servername = $GLOBALS['g_db_serverName'];
		$username = $GLOBALS['g_db_usrName'];
		$password = $GLOBALS['g_db_psswd'];
		$dbname = "yulu";
	}
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) 
	{
		die("Mysql Connect Failed: " . $conn->connect_error);
	} 

	return ($conn);
}

//get table row number::(data_cnnct var,table name) ::(row number)
function db__rowNum($conn,$table,$clmnName="",$value="",$clmnName2="",$value2="")
{
	
	$table=db__antisql($table);
	$clmnName=db__antisql($clmnName);
	$value=db__antisql($value);
	$clmnName2=db__antisql($clmnName2);
	$value2=db__antisql($value2);
	
	
	if($clmnName=="") $sql = "SELECT COUNT(*) FROM $table";
	elseif($clmnName2=="") $sql = "SELECT COUNT(*) FROM $table where $clmnName='$value'";
	else $sql = "SELECT COUNT(*) FROM $table where $clmnName='$value' AND $clmnName2='$value2'";
	
	$row_count = $conn->query($sql);   
	list($row_num) = $row_count->fetch_row(); 
	return ($row_num);
}

//get row data from database::(data_cnnct var, table name,column name, column value)::(row info)
function db__getData($conn,$table,$clmnName="",$value="",$clmnName2="",$value2="")
{
	
	$table=db__antisql($table);
	$clmnName=db__antisql($clmnName);
	$value=db__antisql($value);
	$clmnName2=db__antisql($clmnName2);
	$value2=db__antisql($value2);
		

	if($clmnName=="") $sql = "SELECT * FROM $table";
	elseif($clmnName2=="") $sql = "SELECT * FROM $table where $clmnName='$value'";
	else $sql = "SELECT * FROM $table where $clmnName='$value' AND $clmnName2='$value2'";
		
	$result = $conn->query($sql);
	//no data
	if ($result->num_rows > 0) {}else{return 404;}

	$i=0;
	$arr=array();
	while($row = $result->fetch_assoc()) {
		$arr[$i++]=$row;
	}
	return ($arr);
}


//fnct for insert a row to database
function db__insertData($conn,$table,$content)
{	
	$table=db__antisql($table);
	
	$key=array_keys($content);
	
	$key=db__antisql($key);
	
	$sql="insert INTO $table (";
	
	for($i=0;$i<count($key);$i++)
	{
		$sql.="$key[$i]";
		if($i!=count($key)-1) $sql.=", ";
	}
	
	$sql.=") VALUES (";
	
	for($i=0;$i<count($key);$i++)
	{
		$tmp_key=$key[$i];
		$content[$tmp_key]=db__antisql($content[$tmp_key]);
		$sql.="'$content[$tmp_key]'";
		if($i!=count($key)-1) $sql.=", ";
	}
	
	$sql.=")";
	
	if (!($conn->query($sql) === TRUE))  echo "SQL Insert Error: " . $sql . "<br>" . $conn->error;

}


//fnct for update a row to database without check
function db__updateData($conn,$table,$content,$index)
{	
	$key=array_keys($content);
	$key=db__antisql($key);
	
	$sql="UPDATE $table SET ";
	
	for($i=0;$i<count($key);$i++)
	{
		$tmp_key=$key[$i];
		$content[$tmp_key]=db__antisql($content[$tmp_key]);
		$sql.="$key[$i]='$content[$tmp_key]'";
		if($i!=count($key)-1) $sql.=", ";
	}
	
	$key=array_keys($index);
	$key=db__antisql($key);
	
	$sql.=" WHERE ";
	
	for($i=0;$i<count($key);$i++)
	{
		$tmp_key=$key[$i];
		$index[$tmp_key]=db__antisql($index[$tmp_key]);
		$sql.="$tmp_key='$index[$tmp_key]'";
		if($i!=count($key)-1) $sql.=" AND ";
	}
	
	if (!($conn->query($sql) === TRUE))  echo "SQL Insert Error: " . $sql . "<br>" . $conn->error;

}




//push row data from database::(data_cnnct var, table name,column name, column value)::(row info)
function db__pushData($conn,$table,$content,$index="",$is_force=1)
{
	if($index)
	{
		$index_keys=array_keys($index);

		if(count($index_keys)==1) $result=db__rowNum($conn,$table,$index_keys[0],$index[$index_keys[0]]); 
			
		elseif(count($index_keys)==2)	$result=db__rowNum($conn,$table,$index_keys[0],$index[$index_keys[0]],$index_keys[1],$index[$index_keys[1]]); 
			
		else return -1;
			
		if($result>0) db__updateData($conn,$table,$content,$index);
		else if($is_force) db__insertData($conn,$table,$content);
			
	}
	else
		db__insertData($conn,$table,$content);
}


function db__delData($conn, $table, $clmnName, $value)
{
	$value=db__antisql($value);
	$clmnName=db__antisql($clmnName);

	$sql = "DELETE FROM $table WHERE $clmnName = '$value'";
	$conn->query($sql);
}


//anti sql
function db__antisql($str)
{
	return(str_ireplace("'","",$str));
}


/*****log******/
function yimian__log($table, $val, $index = ""){

	if($index != "") db__pushData(db__connect("log"), $table, $val, $index);
	else db__pushData(db__connect("log"), $table, $val);
}




/***tools***/
//fnct of get usr ip::()::(ip)
function get_ip() 
{
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
	{
		$ip = getenv("HTTP_CLIENT_IP");
	} 
	else
		if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
		{
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		}
		else
			if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
			{
				$ip = getenv("REMOTE_ADDR");
			} 
			else
				if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
				{
					$ip = $_SERVER['REMOTE_ADDR'];
				} 
				else 
				{
					$ip = "unknown";
				}
return ($ip);
}

/** get from address **/
function get_from(){

    if($_SERVER['HTTP_REFERER']) return $_SERVER['HTTP_REFERER'];
    elseif($_REQUEST['from']) return $_REQUEST['from'];
}

function get_from_domain(){

    	$str = str_replace("http://","",get_from());
    	$str = str_replace("https://","",$str);
		$strdomain = explode("/",$str);
		return $strdomain[0];
}


/** function for mail **/

function yimian__mail($to, $subject, $body, $from){


    if($from == "") $from = "IoTcat 呓喵酱";
    if($body == "") $body = "额(⊙﹏⊙) 未找到指定的邮件内容耶( •̀ ω •́ )y<br/><br/>更多信息请咨询<a href = 'https://iotcat.me'>IoTcat</a>期待你的回应啦~";
    if($subject == "") $subject = "来自IoTcat的一声问候~";

    $data = array(
        'fromName' => $from, // 发件人名称
        'from' => "admin@iotcat.xyz", // 发件地址
        'to' => $to, // 收件地址
        'replyTo' => "i@iotcat.me", // 回信地址
        'subject' => $subject,
        'html' => $body
    );

    // 当前请求区域
    // 杭州
    // API地址
    $data['api'] = 'https://dm.aliyuncs.com/';
    // API版本号
    $data['version'] = '2015-11-23';
    // 机房信息
    $data['region'] = 'cn-hangzhou';

    // AccessKeyId
    $data['accessid'] = $GLOBALS['aym_AccessKey'];
    // AccessKeySecret
    $data['accesssecret'] = $GLOBALS['aym_SecretKey'];
    // 是否成功
    return aliyun($data);

}



/**functions for aplayer**/

//put this function to where you want the aplayer to dispaly
function aplayer__element()
{
	echo "<div id=\"aplayer\" class=\"aplayer\"></div>";
}
	
	
//this should put at the near the need of a body,
//the js object name is ap.
function aplayer__setup()
{
	echo "<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/aplayer@1.10/dist/APlayer.min.css\">
<script src=\"https://cdn.jsdelivr.net/npm/aplayer@1.10/dist/APlayer.min.js\"></script>";
	echo "<script src=\"https://cdn.yimian.ac.cn/aplayer/setup.js\"></script>";
}


//this should put at the near the need of a body,
//the js object name is ap.
function aplayer__setup_mini()
{
	echo "<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/aplayer@1.10/dist/APlayer.min.css\">
<script src=\"https://cdn.jsdelivr.net/npm/aplayer@1.10/dist/APlayer.min.js\"></script>";
	echo "<script src=\"https://cdn.yimian.ac.cn/aplayer/setup_mini.js\"></script>";
}

//the should put behind the setup function
function aplayer__add($name="",$artist="unknown",$url="",$coverurl="",$lrcurl="",$theme="#ebd0c2")
{
	echo "<script>//script for adding a new music to aplayer
	ap.list.add([{
    name: '".$name."',
    artist: '".$artist."',
    url: '".$url."',
    cover: '".$coverurl."',
    lrc: '".$lrcurl."',
    theme: '".$theme."'
}]);
</script>";
}

//play a netease playlist
function aplayer__netease($playlistid="2012006204",$loadStart=0,$numLimit=10,$theme="#ebd0c2")
{
	if(!$GLOBALS['jquery']) js__jquery();
	echo "<script>
	var nameList=new Array();
	var artistList=new Array();
	var urlList=new Array();
	var coverList=new Array();
	var lrcList=new Array();
	var themeList=new Array();
	$.ajax({
        type: \"GET\",
        url: 'https://api.bzqll.com/music/netease/songList',
        data: { \"key\": 579621905,
			  	\"id\": $playlistid,
				\"limit\": $numLimit},
        traditional: true,
        dataType: 'json',
        success: function (msg) {
		   for(var i=$loadStart;i<Math.min(msg.data.songListCount,$numLimit);i++)
		   {
		   		ap.list.add([{
				name: msg.data.songs[i].name,
				artist: msg.data.songs[i].singer,
				url: msg.data.songs[i].url,
				cover: msg.data.songs[i].pic,
				lrc: msg.data.songs[i].lrc,
				theme: '$theme'
				}]);
				
				nameList[i-$loadStart]=msg.data.songs[i].name;
				artistList[i-$loadStart]=msg.data.songs[i].singer;
				urlList[i-$loadStart]=msg.data.songs[i].url;
				coverList[i-$loadStart]=msg.data.songs[i].pic;
				lrcList[i-$loadStart]=msg.data.songs[i].lrc;
				themeList[i-$loadStart]='$theme';
		   }
        }
    });
	</script>";
	
}




/**functions for dplayer**/

//put this function to where you want the dplayer to dispaly
function dplayer__element()
{
	echo "<div id=\"dplayer\"></div>";
}
	
	
//this should put at the near the need of a body,
//the js object name is dp.
function dplayer__setup()
{
	echo "<script src=\"https://pv.sohu.com/cityjson?ie=utf-8\"></script>
";
	echo "<link rel=\"stylesheet\" href=\"https://cdn.yimian.xyz/dplayer/DPlayer.min.css\">
<script src=\"https://cdn.yimian.xyz/dplayer/DPlayer.min.js\"></script>";
	echo "<script type=\"text/javascript\" src=\"https://cdn.yimian.xyz/dplayer/setup.js\"></script>
";
echo "<script src=\"https://pv.sohu.com/cityjson?ie=utf-8\"></script>";
}

	
//this should put at the near the need of a body,
//the js object name is dp.
function dplayer__setup_once($id)
{
	echo "<script src=\"https://pv.sohu.com/cityjson?ie=utf-8\"></script>
<script src=\"https://cdn.bootcss.com/hls.js/0.10.1/hls.min.js\"></script>
";
	echo "<link rel=\"stylesheet\" href=\"https://cdn.yimian.xyz/dplayer/DPlayer.min.css\">
<script src=\"https://cdn.yimian.xyz/dplayer/DPlayer.min.js\"></script>";
	echo "<script type=\"text/javascript\">//script for set up the dplayer
//global var for storing current video info
var g_vId=$id;
</script>
<script src=\"https://cdn.yimian.xyz/dplayer/setup_once.js\"></script>
";
echo "<script src=\"https://pv.sohu.com/cityjson?ie=utf-8\"></script>";
}

//this should put behind the setup function
function dplayer__add($id="234")
{
	echo "<script>//script for adding a new video to aplayer
newVideo('$id');
</script>";
}




/****API******/


//fnct for dogecloud API
function api__dogecloud($platform,$vcode,$ip,$AccessKey,$SecretKey){
	
	$url="https://api.dogecloud.com/video/streams.json?platform=$platform&vcode=$vcode&ip=$ip";
	
	$str="/video/streams.json?platform=$platform&vcode=$vcode&ip=$ip"."\n";

	$str  = hash_hmac("sha1", $str, $SecretKey);
	
    $headerArray =array("Host:api.dogecloud.com","Authorization: TOKEN ".$AccessKey.":".$str);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, TRUE); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
    $output = curl_exec($ch);
	if($errno = curl_errno($ch)) {
    	$error_message = curl_strerror($errno);
		echo "cURL error ({$errno}):\n {$error_message}";
	}

    curl_close($ch);
	
    return $output;
}



/****Yimian Video*******/

function video__bodyUp()
{
	if(!isset($_REQUEST['_pjax'])) 
	{
		yimian__header("Yimian Video","video,Yimian","This is the page for showing video class.");

		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.yimian.xyz/bootstrap/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.yimian.xyz/video/css/style.css\">";
		
		echo "<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-135901303-2\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135901303-2');
</script>";

		yimian__headerEnd();


		echo file_get_contents("https://video.yimian.xyz/body_up.html");
	}
}


function video__bodyDown()
{
	if(!isset($_REQUEST['_pjax'])) 
	{
		echo file_get_contents("https://video.yimian.xyz/body_down.html");
		yimian__simpleFooter();
	}
}







/*****private functions *****/

//mail alliyun api
function aliyun($param)
{
    // 重新组合为阿里云所使用的参数
    $data = array(
        'Action' => 'SingleSendMail', // 操作接口名
        'AccountName' => $param['from'], // 发件地址
        'ReplyToAddress' => "true", // 回信地址
        'AddressType' => 1, // 地址类型
        'ToAddress' => $param['to'], // 收件地址
        'FromAlias' => $param['fromName'], // 发件人名称
        'Subject' => $param['subject'], // 邮件标题
        'HtmlBody' => $param['html'], // 邮件内容
        'Format' => 'JSON', // 返回JSON
        'Version' => $param['version'], // API版本号
        'AccessKeyId' => $param['accessid'], // Access Key ID
        'SignatureMethod' => 'HMAC-SHA1', // 签名方式
        'Timestamp' => gmdate('Y-m-d\TH:i:s\Z'), // 请求时间
        'SignatureVersion' => '1.0', // 签名算法版本
        'SignatureNonce' => md5(time()), // 唯一随机数
        'RegionId' => $param['region'] // 机房信息
    );
    // 请求签名
    $data['Signature'] = sign($data, $param['accesssecret']);
    // 初始化Curl
    $ch = curl_init();
    // 设置为POST请求
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    // 请求地址
    curl_setopt($ch, CURLOPT_URL, $param['api']);
    // 返回数据
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    // 提交参数
    curl_setopt($ch, CURLOPT_POSTFIELDS, getPostHttpBody($data));
    // 关闭ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    // 执行请求
    $result = curl_exec($ch);
    // 获取错误代码
    $errno = curl_errno($ch);
    // 获取错误信息
    $error = curl_error($ch);
    // 获取返回状态码
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // 关闭请求
    curl_close($ch);
    // 成功标识
    $flag = TRUE;
    // 如果开启了Debug
    if (1) {
        // 记录时间
        $log = '[Aliyun] ' . date('Y-m-d H:i:s') . ': ' . PHP_EOL;
        // 如果失败
        if ( $errno ) {
            // 设置失败
            $flag = FALSE;
            $log .= '邮件发送失败, 错误代码：' . $errno . '，错误提示: ' . $error . PHP_EOL;
        }
        // 如果失败
        if ( 400 <= $httpCode ) {
            // 设置失败
            $flag = FALSE;
            // 尝试转换json
            if ( $json = json_decode($result) ) {
                $log .= '邮件发送失败，错误代码：' . $json->Code . '，错误提示：' . $json->Message . PHP_EOL;
            } else {
                $log .= '邮件发送失败, 请求返回HTTP Code：' . $httpCode . PHP_EOL;
            }
        }
        // 记录返回值
        $log .= '邮件发送返回数据：' . serialize($result) . PHP_EOL;
        // 写入文件
    }
    yimian__log("log_mail",array("timestamp" => date('Y-m-d H:i:s', time()), "to_" => $param['to'], "from_" => $param['fromName'], "subject" => $param['subject'], "body" => $param['html'], "success" => (($flag)?1:0), "return_" => $log));
    // 返回结果
    return $flag;
} 


/**
 * 阿里云签名
 *
 * @static
 * @access private
 *
 * @param array  $param        签名参数
 * @param string $accesssecret 秘钥
 *
 * @return string
 */
function sign($param, $accesssecret)
{
    // 参数排序
    ksort($param);
    // 组合基础
    $stringToSign = 'POST&' . percentEncode('/') . '&';
    // 临时变量
    $tmp = '';
    // 循环参数列表
    foreach ( $param as $k => $v ) {
        // 组合参数
        $tmp .= '&' . percentEncode($k) . '=' . percentEncode($v);
    }
    // 去除最后一个&
    $tmp = trim($tmp, '&');
    // 组合签名参数
    $stringToSign = $stringToSign . percentEncode($tmp);
    // 数据签名
    $signature = base64_encode(hash_hmac('sha1', $stringToSign, $accesssecret . '&', TRUE));
    // 返回签名
    return $signature;
}

/**
 * 阿里云签名编码转换
 *
 * @static
 * @access private
 *
 * @param string $val 要转换的编码
 *
 * @return string|string[]|null
 */
function percentEncode($val)
{
    // URL编码
    $res = urlencode($val);
    // 加号转换为%20
    $res = preg_replace('/\+/', '%20', $res);
    // 星号转换为%2A
    $res = preg_replace('/\*/', '%2A', $res);
    // %7E转换为~
    $res = preg_replace('/%7E/', '~', $res);
    return $res;
}

/**
 * 阿里云请求参数组合
 *
 * @static
 * @access private
 *
 * @param array $param 发送参数
 *
 * @return bool|string
 */
function getPostHttpBody($param)
{
    // 空字符串
    $str = "";
    // 循环参数
    foreach ( $param as $k => $v ) {
        // 组合参数
        $str .= $k . '=' . urlencode($v) . '&';
    }
    // 去除第一个&
    return substr($str, 0, -1);
}
