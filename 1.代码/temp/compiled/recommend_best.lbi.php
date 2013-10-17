<?php if ($this->_var['best_goods']): ?>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
	<a href="<?php echo $this->_var['goods']['url']; ?>"><li><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="<?php echo $this->_var['goods']['gg_thumb']; ?>">
    
    <div class="fy_txt">
        	<div class="fl">A12栋1单元<?php echo $this->_var['goods']['short_style_name']; ?><br />
两室两厅一卫<br />
90.33㎡</div>
        	<div class="fr">项目均价:7200元/㎡<br />
一次性付款96折<br />
按揭付款98折</div>
        </div>
        
    	<div class="label1"></div>
        <div class="label2">网络优惠价:<strong><?php if ($this->_var['goods']['promote_price'] != ""): ?>
                  <?php echo $this->_var['goods']['promote_price']; ?>
                  <?php else: ?>
                  <?php echo $this->_var['goods']['shop_price']; ?>
                  <?php endif; ?></strong>/㎡</div>
        <!-- <div class="tejia"></div> -->
    </li></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
