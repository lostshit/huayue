$(function(){
		var lis = $(".uls").find("li");
		lis.mouseenter(function(){			
			$(this).find("a").css("top","0px");				
		});
	
		lis.mouseleave(function(){
			$(this).find("a").animate({top:"-204px"},400);
		});
	});