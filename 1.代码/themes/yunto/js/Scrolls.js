$(function(){
zuobianaa=setInterval(function(){
	  $(".shit").animate({
		  'left':-600
		  },32000,function(){
			  $(".shit").css({
		         left:600
			     });
			  });
},100);

$(".youbian,.rightone").click(function(){
	$(this).parents(".zhanshi").find(".shit").stop(true);
	clearInterval(zuobianaa);
	
	youbiansaa=setInterval(function(){
	 $(".shit").animate({
		  'left':600
		  },22000,function(){
			$(".shit").css({
		         left:-600
			     });
			  });
},100);
		})
$(".zuobian,.leftone").click(function(){
		$(".shit").stop(true)
		clearInterval(youbiansaa);
      	setInterval(function(){
	  $(".shit").animate({
		  'left':-600
		  },32000,function(){
			  $(".shit").css({
		         left:600
			     });
			  });
},100);
		})
var didi=1;
var zy=$(".huodongs").find("li").length;
$(".huodongs>ul").width(zy*325);
var geshu=3;
var page=Math.ceil(zy/geshu);
$(".leftts").click(function(){
	if(didi==page){
		 $(".huodongs").animate({
		 'left':0
		 })
		  didi=1;
	}else{
	 $(".huodongs").animate({
		 left:'-=' +990
		 })
		  didi++;
	}
	})

$(".rightts").click(function(){
	if(didi==1){
		$(".huodongs").animate({
			left:'-='+990*(page-1)
			})
			didi=page;
	}else{
	 $(".huodongs").animate({
	 left: '+='+990
		 })
		   didi--;
		    }
	})
  
});

   

	