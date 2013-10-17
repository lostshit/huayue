$(function(){
	var lis=$(".noon li").hide();
	var i=0;
	function loop(){
		if(i >= lis.length){
			i=0;
		}
		lis.not(lis.eq(i).fadeToggle(1000,function(){
			$(this).addClass("nones");
		})).hide();
		i++;
	}
	loop();
	setInterval(loop,4000);
}); setInterval(loop,4000);
})
		
