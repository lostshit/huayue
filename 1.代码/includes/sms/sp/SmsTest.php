<?php
/**
GBK编码 发送
测试短信 test sms last
mobile=xxxxxxxxxxx&message=%B2%E2%CA%D4%B6%CC%D0%C5+test+sms+last&action=SendSms
服务器返回(GBK编码):
code=200&msg=\267\242\313\315\263\311\271\246\262\342\312\324\266\314\320\305 test sms last
发送成功测试短信 test sms last
*/

@ini_set("display_errors","On");
@error_reporting(E_ALL & ~E_NOTICE);

if($_REQUEST['act']=="1")
{
$DataArry['mobile']=$_REQUEST['tel'];
$DataArry['message']=$_REQUEST['content'];
	if( !SendSms($DataArry) )
	{
		echo 'failed.';
	}
}
function SendSms($DataArry)
{
require_once("sms_72dns.class.php");
$newclient=new SMS_72dns();
return $newclient->url_get_contents("SendSms",$DataArry);
}
function CheckSumSms()
{require_once("sms_72dns.class.php");
$newclient=new SMS_72dns();
$sum=explode("&",$newclient->url_get_contents("CheckSumSms",""));
if(strpos($sum[1],"户名")) return substr($sum[1],4);
else {return ("剩余".substr($sum[1],4)."条短信");}
}
	?>

	<html>
<head>
    <title>短信 API</title>
    <link href="../share/std.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">
	<!--
	body {
		margin-left: 10px;
		margin-top: 0px;
		margin-right: 10px;
		margin-bottom: 0px;
	}
	-->
	</style>
</head>
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td align="center" bgcolor="#FFFFFF">
      <table width="500"  border="0" cellpadding="5" cellspacing="1" bgcolor="#555555">
      <form id="Form1" action="SmsTest.php" method="post" >
      <tr bgcolor="#EFEFEF">
        <td colspan="2"><strong>短信发送</strong></td>
        </tr>
      <tr bgcolor="#EFEFEF">
        <td width="26%">接收手机:</td>
        <td width="74%" bgcolor="#FFFFFF"><input name="tel" type="text" class="inputbox" id="tel"  /><label><?=CheckSumSms()?></label></td>
      </tr>
      <tr bgcolor="#EFEFEF">
        <td>短信内容：</td>
        <td bgcolor="#FFFFFF"><textarea id="content"  name="content" ></textarea> </td>
      </tr>
      <tr align="center" bgcolor="#EFEFEF">
        <td colspan="2"><input type="submit" name="Submit" value="发  送"></td>
      </tr>
	  <tr align="center" bgcolor="#EFEFEF">
        <td colspan="2"><asp:label id="lMessage"  /></td>
      </tr>
      <input type="hidden" name="act" value="1" />
      </form>
    </table></td>
  </tr>
</table>
<?php
		echo iconv('GBK','UTF-8',"\267\242\313\315\263\311\271\246\262\342\312\324\266\314\320\305 test sms last");
?>
</html>