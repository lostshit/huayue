<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<html xmlns:wb=“http://open.weibo.com/wb”>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
			<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
			
			<title><?php echo $this->_var['page_title']; ?></title>
			
			
			
			<link rel="shortcut icon" href="favicon.ico" />
			<link rel="icon" href="animated_favicon.gif" type="image/gif" />
			<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
			<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
			
			<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,jquery-1.9.1.min.js,jquery.SuperSlide.2.1.1.js,bootstrap.min.js,scrollIt.min.js')); ?>
			<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript"charset="utf-8"></script>
			<script src="js/greensock/TweenMax.min.js" type="text/javascript"></script>
			
			<style>
				/* 滚动大图 */
				.slideBox {
					height: 280px;
					margin: auto;
					overflow: hidden;
					position: relative
				}
				.slideBox .hd {
					height: 15px;
					overflow: hidden;
					position: absolute;
					left: 5%;
					bottom: 5%;
					z-index: 1;
				} 
				.slideBox .hd 
				ul {
					overflow: hidden;
					zoom: 1;
					float: left;
				}
				.slideBox .hd ul li {
					float: left;
					margin-right: 10px;
					width: 10px;
					height: 10px;
					line-height: 14px;
					text-align: center;
					text-indent: -999px;
					background: #fff;
					cursor: pointer;
				}
				.slideBox .hd ul li.on {
					background: #f00;
					color: #fff;
				}

				.slideBox .bd {
					position: relative;
					height: 100%;
					z-index: 0;
				}

				/* 滚动大图全宽居中设置 */
				.slideBox .bd li {
					text-align: center;
					background-repeat: no-repeat;
					background-position: center top;
				}
				.slideBox .bd li a {
					display: block;
					width: 100%;
					height: 280px;
					text-align: center;
					overflow: hidden
				}
				.slideBox .bd li img {
				}

				/* 文字横向滚动 */
				.txtScroll-left {
					width: 735px;
					float: right;
					position: relative;
					height: 20px;
				}
				.txtScroll-left .hd {
					position: absolute;
					right: 0;
					top: 0;
					width: 94px;
					height: 20px;
				}
				.txtScroll-left .hd .prev, .txtScroll-left .hd .next, .txtScroll-left .hd .more {
					display: block;
					width: 18px;
					height: 18px;
					float: left;
					margin-right: 5px;
					overflow: hidden;
					cursor: pointer;
					background: url("images/page.gif") no-repeat;
				}
				.txtScroll-left .hd .next {
					background-position: -22px 0;
				}
				.txtScroll-left .hd .more {
					background-position: -44px 0;
					width: 40px;
					height: 18px;
				}

				.txtScroll-left .bd {
					position: absolute;
					width: 600px;
					overflow: hidden;
				}
				.txtScroll-left .bd ul {
					overflow: hidden;
					zoom: 1;
				}
				.txtScroll-left .bd ul li {
					margin: 0 5px;
					padding: 0 5px;
					text-align: center;
					float: left;
					height: 20px;
					line-height: 20px;
					width: auto;
					border-right: 1px solid #aaa;
					text-align: left;
					_display: inline;
					text-align: center
				}
				.txtScroll-left .bd ul li a {
					text-align: center;
					margin: auto
				}
				 
			</style>
		</head>
		
		<body id="home">
			
			<div id="slide">
				<a href="#"  id="slide1">点击立即咨询</a>
				<a href="#" data-scroll-nav='0' id="slide2"></a>
			</div>
			<?php echo $this->fetch('library/page_header.lbi'); ?>
			<div class="cl" style="height:1px"></div>
			
			<div class="slideBox">
				<div class="bd">
					
					<?php echo $this->fetch('library/index_ad2.lbi'); ?>
				</div>
			</div>

			

			<div class="h10 cl"></div>
			<div class="w990">
				
				<div class="tequan">
					<form id="member">
						<input id="txtMobile" name="txtMobile" type="text" value="请输入您的手机号"/>
						<a  id="btnQuicklyRegister" style="cursor: pointer;" > <img src="themes/yunto/images/btn1.png" width="148" height="35" id="btn1" /> </a>
					</form>
					<ul class="items">
						<li id="i1">
							最长一周锁房服务
						</li>
						<li id="i2">
							客服一对一在线贴心咨询
						</li>
						<li id="i3">
							享受网上独家礼品
						</li>
						<li id="i4">
							特别奖励积分
						</li>
						<li id="i5">
							限时特供独家优惠资格
						</li>
						<li id="i6">
							特约商家 保障资金安全
						</li>
					</ul>
				</div>
				<div class="cl"></div>
				
				<div class="message">
					<h2>最新动态</h2>
					
					<div class="txtScroll-left">
						<div class="hd">
							<a class="prev"></a>
							<a class="next"></a>
							<a class="more"></a>

						</div>
						<div class="bd">
							<ul class="infoList">
								<li>
									<a href="#" target="_blank">中国打破了世界软件巨头规则</a>
								</li>
								<li>
									<a href="#" target="_blank">施强：点击立即咨询点击立即咨询点击立即咨询教学</a>
								</li>
								<li>
									<a href="#" target="_blank">新加坡留学，国际双语课程</a>
								</li>
								<li>
									<a href="#" target="_blank">高考后留学日本名校随你选</a>
								</li>
								<li>
									<a href="#" target="_blank">教育培训行业优势资源推介</a>
								</li>
								<li>
									<a href="#" target="_blank">女友坚持警局完婚不抛弃</a>
								</li>
							</ul>
						</div>
					</div>

					
				</div>

				<div class="cl h20"></div>

				<div class="gflc"><img src="themes/yunto/images/lc.gif" width="990" height="62" />
					<!--<a href="#">查看房源</a><a href="#">注册</a>订购</a><a href="#">支付保证金</a><a href="#">订购成功</a><a href="#">线下签约<br />
					退还保证金 </a>-->
				</div>
				<div class="cl h20"></div>
				<ul class="fangyuan clearfix" data-scroll-index='1'>
					<?php echo $this->fetch('library/recommend_best.lbi'); ?>
				</ul>

				<div class="message">

					<h2>最新动态</h2>

					
					<div class="txtScroll-left">
						<div class="hd">
							<a class="prev"></a>
							<a class="next"></a>
							<a class="more"></a>

						</div>
						<div class="bd">
							<ul class="infoList">
								<li>
									<a href="#" target="_blank">中国打破了世界软件巨头规则</a>
								</li>
								<li>
									<a href="#" target="_blank">施强：高端专业语言教学</a>
								</li>
								<li>
									<a href="#" target="_blank">新加坡留学，国际双语课程</a>
								</li>
								<li>
									<a href="#" target="_blank">高考后留学日本名校随你选</a>
								</li>
								<li>
									<a href="#" target="_blank">教育培训行业优势资源推介</a>
								</li>
								<li>
									<a href="#" target="_blank">女友坚持警局完婚不抛弃</a>
								</li>
							</ul>
						</div>
					</div>

					
				</div>
				<div class="cl h20"></div>
				
				<div class="pic_inline"><img src="themes/yunto/images/t1.jpg"  /><img src="themes/yunto/images/t2.jpg"  /><img src="themes/yunto/images/t3.jpg"  />
				</div>

				<div style="width:960px;margin:5px auto;padding:0 auto;">
					
					<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
					
				</div>
				<?php echo $this->fetch('library/page_footer.lbi'); ?>
				<script type="text/javascript">
					$(document).ready(function() {

						$(".fangyuan li").hover(function() {
							var _this = $(this);
							TweenMax.to(_this.children('.fy_txt'), 0.5, {
								css : {
									opacity : '1'
								}
							});
							_this.children('.label1').hide(200);
							_this.children('.label2').hide(200);
						}, function() {
							var _this = $(this);
							TweenMax.to($(".fangyuan li .fy_txt"), 0.5, {
								css : {
									opacity : '0'
								}
							});
							_this.children('.label1').show(200);
							_this.children('.label2').show(200);
						});

						$("#btnQuicklyRegister").click(function() {
							var mobile = $("#txtMobile").val();
							if (mobile.length != 11) {
								$("#divErrorMsg").modal();
								$("#txtMobile").select();
								return;
							}

							if (!(/(13|15|18|14)\d{9,9}/.test(mobile))) {
								$("#divErrorMsg").modal();
								$("#txtMobile").select();
								return;
							}

							$.post("user.php?act=instant_register", {
								"extend_field5" : $("#txtMobile").val(),
								"captcha" : $("#txtValidate").val()
							}, function(result) {
								
								$.post("user.php?act=act_instant_register", {
									"extend_field5" : $("#txtMobile").val(),
									"captcha" : "1234"
								}, function(result) {
									if(result=="sucess"){
										//$("#divRegister").modal("hide");
										$("#lblUserName").html(result);
										$("#divRegisterSucessed").modal();
										$(".top .fl").html("欢迎回来，" + result + "<h1>华悦城网上销售中心可享受独家购房优惠！</h1>");
										
									}else{
										$("#divErrorMsg .modal-body").html("注册失败");
										$("#divErrorMsg").modal();
									}
								});
							});

						});
						$("#btnValidate").click(function() {
							$.post("user.php?act=act_instant_register", {
								"extend_field5" : $("#txtMobile").val(),
								"captcha" : $("#txtValidate").val()
							}, function(result) {
								$("#divRegister").modal("hide");
								$("#lblUserName").html(result);
								$("#divRegisterSucessed").modal();
								$(".top .fl").html("欢迎回来，" + result + "<h1>华悦城网上销售中心可享受独家购房优惠！</h1>");
							});
						});
						$(".slideBox").slide({
							mainCell : ".bd ul",
							autoPlay : true,
							effect : "leftLoop",
							vis : 2
						});

						$(".txtScroll-left").slide({
							titCell : ".hd ul",
							mainCell : ".bd ul",
							autoPage : true,
							effect : "leftLoop",
							autoPlay : true,
							scroll : 1,
							vis : 4
						});
					});

				</script>

				<div class="modal hide fade" id="divErrorMsg">
					<div class="modal-header">
						<strong><h2>异常信息</h2></strong>
					</div>
					<div class="modal-body">
						手机号码输入不正确。
					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
				<div class="modal hide fade" id="divRegisterSucessed">
					<div class="modal-header">
						<strong><h2>系统消息</h2></strong>
					</div>
					<div class="modal-body">
						恭喜你！<label id="lblUserName"></label> ，系统将发送密码信息至您的手机请注意查收!
					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
				<div class="modal hide fade" id="divRegister">
					<div class="modal-header">
						<strong><h2>一秒注册</h2></strong>
					</div>
					<div class="modal-body">
						<form class="form-inline">
							输入验证码：
							<input type="text" id='txtValidate' />
							<input type="button" id="btnValidate"  class="btn btn-primary" value="验证" />
							&nbsp;&nbsp;&nbsp;
							<input type="button" value="重新获取验证码" />
						</form>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
		</body>

	</html>
