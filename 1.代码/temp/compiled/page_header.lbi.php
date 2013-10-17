<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div style="background:#4e4e4e; height:30px;" data-scroll-index="0">
  <div class="top">
    	<div class="fl"><a href="user.php?act=login">[登录]</a><a href="user.php?act=register">[免费注册]</a>
    <h1>华悦城网上销售中心可享受独家购房优惠！</h1></div>
        <div class="fr"><wb:follow-button uid="2568352944" type="red_1" width="67" height="24" ></wb:follow-button></div><div class="fr fr1"><a href="#">加入收藏</a> | <a href="#">设为首页</a></div>
    </div>
</div>

<div style="border-bottom:1px solid #4e4e4e; height:60px; padding:7px 0 0;">
<div class="head">
    <h1 class="logo fl"><a href="/"><img src="themes/yunto/images/logo.jpg"  /></a></h1>

    <div class="nav fr">
        <ul>
<?php if ($this->_var['navigator_list']['top']): ?>

    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
	<li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
            <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
            
            <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>         
          
        </ul>
  </div>
</div>
</div>
<div class="cl" style="height:1px"></div>