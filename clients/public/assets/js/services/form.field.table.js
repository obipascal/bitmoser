$(document).ready(function(){
	$(document).on('mouseenter', '.bs-service-form-tb-bd tr',function(){
		$(this).addClass('shadow');
	});
	
	$(document).on('mouseleave', '.bs-service-form-tb-bd tr',function(){
		$(this).removeClass('shadow');
	});
});