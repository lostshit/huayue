<?php
/**
 * 通信短信接口for ecshop
 * @author HuangYe
 *
 */
abstract class ihacklog_sms
{

	public static $default = 'sms_72dns';

	public static $instances = array();

	/**
	 * @var  Config
	 */
	protected $_config = array(
			'api_url'=>'',
			'username'=>'',
			'password' => '',
	);

	protected $_error = array();

	public static function instance($sms_sp='72dns', $config=array())
	{
		$sms_class = 'sms_' . $sms_sp ;
		self::$default = $sms_class;
		if(!isset(self::$instances[$sms_class]) || !(self::$instances[$sms_class] instanceof $sms_class) )
		{
			require_once dirname(__FILE__). DIRECTORY_SEPARATOR .'sp' . DIRECTORY_SEPARATOR . $sms_class. '.class.php';
			self::$instances[$sms_class] = new $sms_class($config);
		}
		return self::$instances[$sms_class];
	}

	function __construct($config)
	{
		/* 由于要包含init.php，所以这两个对象一定是存在的，因此直接赋值 */
		$this->db = $GLOBALS['db'];
		$this->ecs = $GLOBALS['ecs'];
		$this->_config = $this->get_site_info();
		$this->_config['api_url'] = isset($config['api_url']) ? $config['api_url'] : $this->_config['api_url'];
		$this->_config['username'] = isset($config['username']) ? $config['username'] : $this->_config['username'];
		$this->_config['password'] = isset($config['password']) ? $config['password'] : $this->_config['password'];

	}

	public function config($key = NULL, $value = NULL)
	{
		if ($key === NULL)
			return $this->_config;

		if (is_array($key))
		{
			$this->_config = $key;
		}
		else
		{
			if ($value === NULL)
				return $this->_config[$key];

			$this->_config[$key] = $value;
		}
		return $this;
	}

	public function add_errmsg($code,$msg)
	{
		$this->_error[] = array(
				'code'=>$code,
				'msg'=>$msg);
	}

	public function get_last_error()
	{
		return array_pop($this->_error);
	}

	public function get_errors()
	{
		return $this->_error;
	}

	/**
	 * 更新已发短信数，同时减去balance
	 */
	public function send_inc()
	{
		$sql = 'UPDATE ' . $this->ecs->table('shop_config') . "
				 SET `value` = `value` +1
                WHERE `code` = 'sms_count'";
		$this->db->query($sql);
		$sql = 'UPDATE ' . $this->ecs->table('shop_config') . "
				 SET `value` = ". time() . "
                WHERE `code` = 'sms_last_request'";
		$this->db->query($sql);
		$sql = 'UPDATE ' . $this->ecs->table('shop_config') . "
				 SET `value` = `value` - 1
                WHERE `code` = 'sms_balance'";
		$this->db->query($sql);
	}

	//查询是否已有通行证
	function has_registered()
	{
		$sql = 'SELECT `value`
                FROM ' . $this->ecs->table('shop_config') . "
                WHERE `code` = 'sms_username'";

		$result = $this->db->getOne($sql);

		if (empty($result))
		{
			return false;
		}

		return true;
	}

	function get_site_info()
	{
		if(!empty($this->_config['password']))
		{
			return $this->_config;
		}
		/* 获得当前处于会话状态的管理员的邮箱 */
		$sql = 'SELECT `code`,`value`
                FROM ' . $this->ecs->table('shop_config') . "
                WHERE `code` LIKE 'sms_%'";

		$result = $this->db->getAll($sql);
		/* 赋给smarty模板 */
		foreach($result as $item)
		{
			$key = $item['code'];
			$value = $item['value'];
			$key = substr($key,strlen('sms_'));
			$sms_site_info[$key] = $value;
		}
		return $sms_site_info;
	}


	/**
	 * 保存API信息到数据库
	 * @param unknown $username 登录名
	 * @param unknown $password 密钥
	 * @param unknown $api_url
	 * @param unknown $phone 接收信息的手机号
	 */
	public function register($username, $password, $api_url, $phone)
	{
		$ret = TRUE;
		$args = func_get_args();
		$keys = array('username','password','api_url','phone');
		for($i=0;$i<count($args);++$i)
		{
			$key = 'sms_' . $keys[$i];
			$value['value'] = $args[$i];
			$this->db->autoExecute($this->ecs->table('shop_config'), $value, 'UPDATE', "code='".$key . "'");
		}
		//初始化 总数和balance
		$balance['value'] = self::instance()->get_balance();
		$this->db->autoExecute($this->ecs->table('shop_config'), $balance, 'UPDATE', "code='sms_total_money'");
		$this->db->autoExecute($this->ecs->table('shop_config'), $balance, 'UPDATE', "code='sms_balance'");
		return TRUE;
	}

	public function update_config($key,$value)
	{
		$key = 'sms_'. $key;
		$sql = 'UPDATE ' . $this->ecs->table('shop_config') . "
				 SET `value` = '". $value ."'
                WHERE `code` = '". $key . "'";
		return $this->db->query($sql);
	}
	/**
	 * 获得当前处于会话状态的管理员的邮箱
	 *
	 * @access  private
	 * @return  string or boolean       成功返回管理员的邮箱，否则返回false。
	 */
	function get_admin_email()
	{
		$sql = 'SELECT `email` FROM ' . $this->ecs->table('admin_user') . " WHERE `user_id` = '" . $_SESSION['admin_id'] . "'";
		$email = $this->db->getOne($sql);

		if (empty($email))
		{
			return false;
		}

		return $email;
	}

	/**
	 * 检测手机号码是否正确
	 *
	 */
	function is_moblie($moblie)
	{
		return  preg_match("/^0?1((3|8)[0-9]|5[0-35-9]|4[57])\d{8}$/", $moblie);
	}

	/**
	 * 抽象方法： 发送短信
	 */
	abstract function send($mobile, $sms_content);

	/**
	 * 抽象方法：从SP获取账号信息，如短信剩余数量等
	 */
	abstract function get_balance();
}