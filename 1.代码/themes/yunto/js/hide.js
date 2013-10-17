$(function(){
    var x=$(document).height();
    var y=$(window).width(); 
     $(".didi").mouseenter(function(e){
	    $(".haha").css({height:x+"px",display:"block",right:y+"px"}).animate({right:"0"},400);
	    $(".hide").animate({top:"30%"},1000,function(){$(this).animate({top:"20%"},500,function(){$(this).animate({top:"25%"},1000)
	     	})
		})
	 })
	 $(".close").click(function(){
	    $(".hide").animate({top:x+"px"},1000);
		$(".haha").css({display:"none"});
	 })
	 $(".botton").hover(function(){
	    $(this).addClass("hovers");
	 },function(){
	    $(this).removeClass("hovers");
	   })
    $("#user").focus(function(){
	    var vals=$(this).attr("placeholder");
		if(vals=="请输入您的账号"){
		    $(this).attr("placeholder","") 
		}
	})
	$("#user").blur(function(){
	var vals=$(this).attr("placeholder");
	if(vals==""){
	$(this).attr("placeholder","请输入您的账号") 
		}
	})
	$("#password").focus(function(){
	    var vals=$(this).attr("placeholder");
		if(vals=="您的密码"){
		    $(this).attr("placeholder","") 
		}
	})
	$("#password").blur(function(){
	var vals=$(this).attr("placeholder");
	if(vals==""){
	$(this).attr("placeholder","您的密码") 
		}
	})
 })