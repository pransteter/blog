var menu = document.getElementById('menu-principal');
var btn_menu = document.getElementById('btn-mobile');

$(window).load(function(){
	$(btn_menu).on('click' , function(){
		if($(this).hasClass('activated'))
		{
			$(this).removeClass('activated').attr('src' , URL_MAIN+'/imgs/btn-mobile.png');
		}
		else
		{
			$(this).addClass('activated').attr('src' , URL_MAIN+'/imgs/btn-mobile-activated2.png');
		}

		$(menu).slideToggle('fast' , function(){

		});
	});
});