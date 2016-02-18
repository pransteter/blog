var menu = document.getElementById('menu-principal');
var btn_menu = document.getElementById('btn-mobile');

$(window).load(function(){
	$(btn_menu).on('click' , function(){
		$(menu).slideToggle('fast');
	});
});