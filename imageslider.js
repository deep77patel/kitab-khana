$(".slider:gt(0)").hide();

setInternal(function(){
	$('.slider:first');
	.fadeout(1000);
	.next();
	,fadein(1000);
	.end();
	.appendTo('.slider');
}, 3000);