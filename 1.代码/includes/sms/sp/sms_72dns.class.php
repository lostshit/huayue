<?php
class sms_72dns extends ihacklog_sms
{

	function __construct($config)
	{
		parent::__construct($config);
		$this->param=parse_url($this->config('api_url'));
		$this->smsuser=$this->config('username');
		$this->smspassword=$this->config('password');
	}

	function url_get_contents($action,$data_arr)
	{
		if(!isset($this->param['host']) )
		{
			$this->add_errmsg(403, "no parameter 'host'");
			return FALSE;
		}
		if(!isset($this->param['ip']))
			$this->param['ip'] = $this->param['host'];
		if($_SERVER['HTTP_HOST'] == $this->param['host'])
			$this->param['ip'] = '127.0.0.1';
		if(!isset($this->param['port'])) $this->param['port'] = 80;
		if(!isset($this->param['httpver'])) $this->param['httpver'] = 'HTTP/1.1';
		if(!isset($this->param['method'])) $this->param['method'] = 'POST';
		if(!isset($this->param['referer'])) $this->param['referer'] = '';
		if(!isset($this->param['user'])) $this->param['user'] = '';

			//有数据要发送
			$data_string = '';
			if(is_array($data_arr) && count($data_arr) > 0)
			{
				foreach($data_arr as $key=>$value)
				{
					$key = trim($key);
					$value = trim($value);
					$values[]="$key=".urlencode(iconv('UTF-8','GBK',$value));
				}
				$data_string=rtrim(implode("&",$values),'&');
				$data_string .="&action=".$action;
			}
			else
			{
				$data_string.="action=".$action;
			}

			$login="UserID=".$this->smsuser."&PassWord=".$this->smspassword;
			$url =  $this->config('api_url') . '?' . $login."&".$data_string;;
			//open connection
			$ch = curl_init();
			if($ch)
		{
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 5);
			curl_setopt($ch, CURLOPT_TIMEOUT , 5);

			//set the url, number of POST vars, POST data
			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $data_string);

			//execute post
			$response = curl_exec($ch);
			$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
			//$header = substr($response, 0, $header_size);
			$body = substr($response, $header_size);
			$body = iconv('GBK','UTF-8',$body);

			//close connection
			curl_close($ch);
			if( '200' == $http_code )
			{
				//code=403&msg=用户名和密码有误或末开通"
				// 			var_dump(iconv('GBK','UTF-8',$content));
				//var_dump($content);
				$rs_arr = array();
				parse_str($body,$rs_arr);

				if( !isset($rs_arr['code']) || $rs_arr['code'] != 200)
				{
					$this->add_errmsg('500' , 'API服务器错误：'. $body);
					return FALSE;
				}
				else
				{
					if(isset($rs_arr['sum']) && !( $rs_arr['sum'] > 0) )
					{
						$this->add_errmsg('400', $rs_arr['msg']);
						return FALSE;
					}
					else
					{
						return $rs_arr;
					}
				}
			}
			else
			{
				$this->add_errmsg('404', 'could not communicate with server.');
				return FALSE;
			}
		}
		else
		{
			$this->add_errmsg('404', 'could not open socket.');
			return FALSE;
		}
	}

	public function send($mobile, $sms_content)
	{
		//这个垃圾API中的敏感词。。。
		$sms_content = str_replace('房地产','',$sms_content);
		$data_arr['mobile'] = $mobile;
		$data_arr['message'] = $sms_content;
		$rs = $this->url_get_contents("SendSms",$data_arr);
		if($rs !== FALSE && isset($rs['msg']) && substr($rs['msg'],strlen('发送成功')) == $sms_content)
		{
			$this->send_inc();
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_balance()
	{
		$rs = array('sum'=>0);
		$rs = $this->url_get_contents("CheckSumSms","");
// 		var_dump($rs);
		return $rs['sum'];
	}

}