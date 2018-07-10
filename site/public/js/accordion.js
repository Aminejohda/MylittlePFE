$(function(){
	
	var container = $('.accordion'),
	item = container.children('li'),
	link = item.children('a');
	
	item.not(".accordion_active").children('div').hide();
	
	link.on('click', function(){
		$(this).next('div').slideDown(500);
		$(this).parent().addClass('accordion_active');
		$(this).closest("li").siblings().children('div').slideUp(500);
		$(this).closest('li').siblings().removeClass('accordion_active');
	});
	
});
