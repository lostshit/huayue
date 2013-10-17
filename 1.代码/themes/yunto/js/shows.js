$(function(){
var x=$(document).height();
var y=$(window).width(); 
     $(".didi").mouseenter(function(e){
	    $(".haha").css({height:x+"px",display:"block",right:y+"px"}).animate({right:"0"},400);
	    $(".hide").animate({top:"30%"},1000,function(){$(this).animate({top:"20%"},500,function(){$(this).animate({top:"32%"},1500)
		})
		})
	 })
})