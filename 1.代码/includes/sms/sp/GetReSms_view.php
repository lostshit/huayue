<?
//查询回复短信
require_once("sms.inc.php");
$newclient=new SMS_72dns();
$DataArry['CrTime']='';//CrTime为空时， 查询日期为当天前7天的回复内容;
//$DataArry['CrTime']='2012-4-18'; //当输入日期(只是日期可以了，不用输入时间)时，为查询此日期前7天的回复内容;
$ReText = $newclient->url_get_contents("ReplySms",$DataArry);
if(!strpos($ReText,"code=40") && !strpos($ReText,"msg="))
{
	$ReText = str_replace('GB2312','GBK',$ReText); //因为simplexml_load_string 函数的字符集原因这里先要为GBK字符集，不然可能会有些文字会乱码或出错

	$Rexml_array=simplexml_load_string($ReText); //将XML中的数据,读取到数组对象中
	foreach($Rexml_array as $Retmp)
	{
		$ContentText = $Retmp->Content;
		$SmsContentText = $Retmp->SmsContent;
		$ContentText = iconv("utf-8","GBK",$ContentText); // simplexml_load_string 输出的是 utf-8 这里要转一下回复内容为GBK，不然输出显示时可能会乱码
		$SmsContentText = iconv("utf-8","GBK",$SmsContentText); // simplexml_load_string 输出的是 utf-8 这里要转一下发送内容为GBK，不然输出显示时可能会乱码

	    echo "<table border='1px' cellpadding='0' cellspacing='0'>";
	    echo "<tr><td>编号：</td><td>".$Retmp->RepID."</td></tr>";
	    echo "<tr><td>发信时间：</td><td>".$Retmp->CrTime."</td></tr>";
	    echo "<tr><td>发信人：</td><td>".$Retmp->SmsFrom."</td></tr>";
	    echo "<tr><td>发信内容：</td><td>".$SmsContentText."</td></tr>";
	    echo "<tr><td>回复内容：</td><td>".$ContentText."</td></tr>";
	    echo "<table></br>";
	}
}
else { //调用出错时
	echo $ReText;
}
?>

<head>
<title>查询回复短信</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>