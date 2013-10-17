
<div class="h20"></div>

<div class="guide w990 clearfix">
	<div class="item">
      <a href="#">楼盘资讯 价值评估</a>
      <a href="#">个性化职业顾问提供</a>
      <a href="#">定制化看房线路推荐</a>
      <a href="#">看房行程预定</a>
    </div>
     
     <div class="item">
      <a href="#">免费注册</a>
      <a href="#">独家购房优惠</a>
      <a href="#">实名认证会员服务</a>
     </div>
     
     <div class="item">
      <a href="#">网上银行支付</a>
      <a href="#">支付保证金</a>
      <a href="#">取得竞买资格认证</a>
     </div>
     
     <div class="item">
      <a href="#">参与拍卖</a>
      <a href="#">在线买房</a>
      <a href="#">公平保证</a>
      <a href="#">保证交易</a>
     </div>
     
     <div class="item">
      <a href="#">购房成功签订购房合同</a>
      <a href="#">不成功100%全额退款</a>
     </div>
</div>
</div>

  

<div class="h20"></div>
<div class="footer w990">
    <div class="fl">
	<?php if ($this->_var['navigator_list']['bottom']): ?>
					   <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_39787300_1381996812');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_39787300_1381996812']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
							<a href="<?php echo $this->_var['nav_0_39787300_1381996812']['url']; ?>" <?php if ($this->_var['nav_0_39787300_1381996812']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_39787300_1381996812']['name']; ?></a> | 
							<?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
							<?php endif; ?>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php endif; ?><br />
    Copyright © 2010-2013 Huayuecheng Corporation, All Rights Reserved<br />
    免责声明:一切房源价格和优惠信息请以售楼部现场为准,最终解释权归湖南华盛世纪城房地产开发有限公司所有   
    <div class="line"></div>
    华悦城、产品咨询购买、技术支持客服服务热线:<?php if ($this->_var['service_phone']): ?><?php echo $this->_var['service_phone']; ?><?php endif; ?>		全程支持：<strong>云图EM</strong> 技术服务：<strong>共成互动</strong>
	
	<div align="left"  id="rss"><a href="<?php echo $this->_var['feed_url']; ?>"><img src="themes/yunto/images/xml_rss2.gif" alt="rss" /></a></div>
	<?php if ($this->_var['icp_number']): ?>
						<?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
						<?php endif; ?>
					<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
						  <?php if ($this->_var['im']): ?>
						  <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
						  <?php endif; ?>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						  <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
						  <?php if ($this->_var['im']): ?>
						  <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
						  <?php endif; ?>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						  <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
						  <?php if ($this->_var['im']): ?>
						  <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/yunto/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
						  <?php endif; ?>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						  <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
						  <?php if ($this->_var['im']): ?>
						  <img src="themes/yunto/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
						  <?php endif; ?>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						  <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
						  <?php if ($this->_var['im']): ?>
						  <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
						  <?php endif; ?>
					  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php if ($this->_var['stats_code']): ?><?php echo $this->_var['stats_code']; ?><?php endif; ?>
	</div>
    
    <div class="fr"><img src="themes/yunto/images/logo2.jpg" width="242" height="103" /></div>
</div>
