<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />

<meta name="Description" content="<?php echo $this->_var['description']; ?>" />



<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />

<link rel="icon" href="animated_favicon.gif" type="image/gif" />

<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />



<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,jquery-1.9.1.min.js,jquery.SuperSlide.2.1.1.js,transportGoods.js')); ?>



<style>

.slideTxtBox{}

.slideTxtBox .hd{background:url(themes/yunto/images/line2.gif) no-repeat left center; height:30px; margin-bottom:10px;  position:relative;}

.slideTxtBox .hd ul{float:left;  position:absolute; left:10px; top:-1px; height:32px;}

.slideTxtBox .hd ul li{float:left; background:#e9e9e9; padding:0 1em; width:6em; margin:0 10px 0 0; height:30px; color:#999; text-align:center; line-height:30px; white-space:nowrap; cursor:pointer;}

.slideTxtBox .hd ul li.on{color:#fff;  background:#002c63;}



.slideTxtBox .bd ul{padding:15px;  zoom:1;}

.slideTxtBox .bd li{height:24px; line-height:24px;}

.slideTxtBox .bd li .date{float:right; color:#999;}



/* 下面是前/后按钮代码，如果不需要删除即可 */

.slideTxtBox .arrow{position:absolute; right:10px; top:0;}

.slideTxtBox .arrow a{ display:block;  width:5px; height:9px; float:right; margin-right:5px; margin-top:10px;  overflow:hidden;

	 cursor:pointer; background:url("images/arrow.png") 0 0 no-repeat; }

.slideTxtBox .arrow .next{background-position:0 -50px;}

.slideTxtBox .arrow .prevStop{background-position:-60px 0;}

.slideTxtBox .arrow .nextStop{background-position:-60px -50px;}



/*滚动图片*/

.pic_slide{position: relative; border: 1px solid #dcdddd; padding: 4px; overflow: hidden; width: 390px;}

.pic_slide .bigImg{position: relative; margin-bottom:5px;}

.pic_slide .bigImg li img{vertical-align:middle; width:390px; height:260px;}

.pic_slide .bigImg  h4{font-size: 14px; font-weight: bold; line-height: 33px; height: 33px; padding-right: 30px; overflow: hidden; text-align: left;}



.pic_slide .smallScroll{height: 47px; margin-bottom: 6px;}

.pic_slide .sPrev,.pic_slide .sNext{float: left; display: block; width: 14px; height: 62px; text-indent: -9999px; background: url(themes/yunto/images/spin.png) no-repeat 0 0px;}

.pic_slide .sNext{background-position: 0 -62px;}

.pic_slide .sPrev:hover{background-position: 0 -124px;}

.pic_slide .sNext:hover{background-position: 0 -186px;}



.pic_slide .smallImg{float:left;  margin: 0 6px; display:inline; width: 350px; overflow: hidden;}

.pic_slide .smallImg ul{height:62px;  width: 9999px; overflow: hidden;}

.pic_slide .smallImg li{float: left; padding: 0 4px 0 0; width:90px; cursor:pointer;  display: inline;}

.pic_slide .smallImg img{border: 1px solid #dcdddd; width:90px; height:60px;}

.pic_slide .smallImg .on img{border-color: #1e50a2;}



.pic_slide .pageState{position: absolute; top: 235px; right: 5px; font-family: "Times New Roman", serif; letter-spacing: 1px;}

.pic_slide .pageState span{color: #f00; font-size: 16px;}





</style>

<script type="text/javascript">

function $id(element) {

  return document.getElementById(element);

}

//切屏--是按钮，_v是内容平台，_h是内容库

function reg(str){

  var bt=$id(str+"_b").getElementsByTagName("h2");

  for(var i=0;i<bt.length;i++){

    bt[i].subj=str;

    bt[i].pai=i;

    bt[i].style.cursor="pointer";

    bt[i].onclick=function(){

      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;

      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){

        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];

        var ison=j==this.pai;

        _bt.className=(ison?"":"h2bg");

      }

    }

  }

  $id(str+"_h").className="none";

  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;

}



</script>

</head>

<body id="home">

<?php echo $this->fetch('library/page_header.lbi'); ?>



<div class="h10 cl"></div>

<div class="w990">

<div class="bread"><?php echo $this->fetch('library/ur_here.lbi'); ?></div>

<div class="cl h20"></div>







<div class="intr">

	<div class="fl">

    <div class="pic_slide">

	 <ul class="bigImg">

	 	 <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>

            <li><a href="gallery.php?id=<?php echo $this->_var['id']; ?>&amp;img=<?php echo $this->_var['picture']['img_id']; ?>" target="_blank"><img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="B_blue" /></a>

            </li>

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	</ul>



	<div class="smallScroll">

		<a class="sPrev" href="javascript:void(0)">←</a>

		<div class="smallImg">

				 <ul>

				 <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>

            <li><a><img src="<?php echo $this->_var['picture']['thumb_url']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"/></a>

            </li>

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

				</ul>

		</div>

		<a class="sNext" href="javascript:void(0)">→</a>

	</div>



	



</div>

    

    

    

    

    

    

    

    

    </div>

    <div class="fr" style=" width:530px;"> 

    <a href="#"><img src="themes/yunto/images/fd.png" width="98" height="20" id="fd"/></a>

      <h1>经典三室两厅N+1户型89.6平米

    </h1>

    <table  class="tb1" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <th> <span class="red">优惠价：</span></th>

        <td>￥<strong class="red">9000.00</strong>元/平米</td>

      </tr>

      <tr>

        <th>市场价：</th>

        <td>￥9000.00</td>

      </tr>

      <tr>

        <th>评  价：</th>

        <td><em>5.0分</em> ( 已12人评价 ）</td>

      </tr>

      <tr>

        <th>交房时间：</th>

        <td> 1栋预计2014年6月交房</td>

      </tr>

      <tr>

        <th>开发商： </th>

        <td>湖南华盛世纪城房地产开发有限公司</td>

      </tr>

      <tr>

        <th>容积率： </th>

        <td>3.55 </td>

      </tr>

    </table>

    <h2 class="phone">400-090-7310</h2>

    <div class="h10"></div>
    <button class="big_btn1" onclick="javascript:addToCartGoods(<?php echo $this->_var['goods']['goods_id']; ?>)" >锁定房源</button>

    <!-- <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><button class="big_btn1 active">加入收藏</button></a> -->

    </div>

</div>





 

<div class="cl h20"></div>



<div class="slideTxtBox">

			<div class="hd">



				

				<span class="arrow"><a class="next"></a><a class="prev"></a></span>



				<ul><li>项目详细信息</li><li>房价走势</li><li>行车路线</li></ul>

			</div>

			<div class="bd">

				<div class="unit">

                <table  class="tb1 fl" border="0" cellspacing="0" cellpadding="0" style="width:40%">

                  <tr>

                    <th>产权年限：</th>

                    <td>70年 </td>

                  </tr>

                  <tr>

                    <th>装修情况：<br /></th>

                    <td>毛坯</td>

                  </tr>

                  <tr>

                    <th>主力户型：</th>

                    <td>三居室 98-129平米 四居室 137平米 </td>

                  </tr>

                  <tr>

                    <th>户　　数：<br /></th>

                    <td>总共 1149 户</td>

                  </tr>

                  <tr>

                    <th>物 业 费：</th>

                    <td>1.8元/月/平米 </td>

                  </tr>

                  <tr>

                    <th>预 售 证：<br /></th>

                    <td>长房售许字(2012)第0207-0212号</td>

                  </tr>

                  <tr>

                    <th>开 发 商：</th>

                    <td>湖南华盛世纪城房地产开发有限公司</td>

                  </tr>

                </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb1 fr" style="width:60%;">

      <tr>

        <th> 楼盘位置：</th>

        <td>湘府东路与韶山南路交汇处向东400米</td>

      </tr>

      <tr>

        <th> 交通状况：<br /></th>

        <td>湘府东路,韶山南路乘乘坐801路(或102路, 703路, 806路, 502路</td>

      </tr>

      <tr>

        <th>物业类型：</th>

        <td>写字楼 酒店 集中商业 住宅 公寓 </td>

      </tr>

      <tr>

        <th>建筑类别：</th>

        <td>板楼,小高层,</td>

      </tr>

      <tr>

        <th>高层开盘时间：</th>

        <td>2012年12月30日</td>

      </tr>

      <tr>

        <th>入住时间：</th>

        <td>2013年12月</td>

      </tr>

      </table>

    

                </div>

                

                <div class="unit"><table  class="tb1 fl" border="0" cellspacing="0" cellpadding="0" style="width:40%">

                  <tr>

                    <th>产权年限：</th>

                    <td>房价走势房价走势房价走势房价走势房价走势房价走势房价走势房价走势房价走势房价走势房价走势</td>

                  </tr>

                  <tr>

                    <th>装修情况：<br /></th>

                    <td>毛坯</td>

                  </tr>

                  <tr>

                    <th>主力户型：</th>

                    <td>三居室 98-129平米 四居室 137平米 </td>

                  </tr>

                 

                </table></div>

                

                <div class="unit"><table  class="tb1 fl" border="0" cellspacing="0" cellpadding="0" style="width:40%">

                  <tr>

                    <th>产权年限：</th>

                    <td>行车路线行车路线行车路线行车路线行车路线行车路线行车路线行车路线行车路线行车路线</td>

                  </tr>

                  <tr>

                    <th>装修情况：<br /></th>

                    <td>毛坯</td>

                  </tr>

                  <tr>

                    <th>主力户型：</th>

                    <td>三居室 98-129平米 四居室 137平米 </td>

                  </tr>

                 

                </table></div>

			</div>

		</div>

<div class="cl h20"></div> 

<div class="m_title1"><h2>户型鉴赏</h2></div>

<div class="slideTxtBox">

			<div class="hd">



				

				<span class="arrow"><a class="next"></a><a class="prev"></a></span>



				<ul><li>户型1</li><li>户型2</li><li>户型3</li><li>户型4</li><li>户型5</li><li>户型6</li></ul>

			</div>

			<div class="bd">

				<div class="unit"><img src="themes/yunto/images/t4.jpg" width="960" height="593" /></div>

                

                <div class="unit">222222222</div>

			</div>

  </div>

<div class="h20 cl"></div>

<!--<div class="m_title1">

<h2 class="fl">楼盘评价</h2>

<a href="#"><img src="themes/yunto/images/more.png" width="41" height="12" class="fr" /></a></div>



<div class="bar_content clearfix">

        <ul class="list_fl_fr">

          <li><a href="show.htm"><span class="red">[重点]</span>省人大常委会就我省医药卫生体制改革情况举行专题询问会况举行专题询问会况举行专题询问会</a><i>2007-10-9</i></li>

          <li><a href="show.htm" > <span class="red">[重点]</span>省卫生厅2012年选派新农村建设工作队受省委、省政府表彰</a><i>2007-10-9</i></li>

          <li><a href="show.htm"> <span class="red">[重点]</span>云南省网报疟疾病例省级实验室复核工作进展顺利</a><i>2007-10-9</i></li>

          <li><a href="show.htm"> <span class="red">[重点]</span>云南省中医医疗集团成立十周年整体效益初步凸显</a><i>2007-10-9</i></li>

          <li><a href="show.htm"> <span class="red">[重点]</span>云南省调整医疗广告审查证明审核出证及监督管理权限</a><i>2007-10-9</i></li>

          <li><a href="show.htm" > <span class="red">[重点]</span>省卫生厅2012年选派新农村建设工作队受省委、省政府表彰</a><i>2007-10-9</i></li>

          <li><a href="show.htm"> <span class="red">[重点]</span>云南省网报疟疾病例省级实验室复核工作进展顺利</a><i>2007-10-9</i></li>

          <li><a href="show.htm"> <span class="red">[重点]</span>云南省中医医疗集团成立十周年整体效益初步凸显</a><i>2007-10-9</i></li>

                   

            

        </ul>

      </div>-->



       





<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>

<script type="text/javascript">

var goods_id = <?php echo $this->_var['goods_id']; ?>;

var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;

var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;

<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>

var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

var goodsId = <?php echo $this->_var['goods_id']; ?>;

var now_time = <?php echo $this->_var['now_time']; ?>;





onload = function(){

  changePrice();

  fixpng();

  try {onload_leftTime();}

  catch (e) {}

}



/**

 * 点选可选属性或改变数量时修改商品价格的函数

 */

function changePrice()

{

  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);

  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;



  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');

}



/**

 * 接收返回的信息

 */

function changePriceResponse(res)

{

  if (res.err_msg.length > 0)

  {

    alert(res.err_msg);

  }

  else

  {

    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;



    if (document.getElementById('ECS_GOODS_AMOUNT'))

      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;

  }

}



</script>

<script type="text/javascript">



////////////////////tab横向标签

jQuery(".slideTxtBox").slide(

{mainCell:".bd"}

);





/////////////////////大图切换

jQuery(".pic_slide").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,

	startFun:function(i,p){

		//控制小图自动翻页

		if(i==0){jQuery(".pic_slide .sPrev").click()} else if( i%4==0 ){jQuery(".pic_slide .sNext").click()}

	}

});



//小图左滚动切换

jQuery(".pic_slide .smallScroll").slide({mainCell:"ul",delayTime:100,vis:4,scroll:4,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false});

</script> 

</html>

