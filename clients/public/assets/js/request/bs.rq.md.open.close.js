$(document).ready(function(){
	//open the moddal
	
	
	//close the modal 
	
	//on close botton
	$('.modal .close').click(function(){
		$('.modal').fadeOut('slow');
	});
	
	//on cancel botton
	$('.modal .cancel').click(function(){
		$('.modal').fadeOut('slow');
	});
	
	//open topup deposit amount md
	$(document).on('click', '.show-topUp', function(){
		let md = $(this).data('target');
		$(document).find(md).slideToggle('slow').delay(100).fadeIn('slow');
	});
	
	//submit topup amount form
	$(document).on('click', '.submit', function(){
		let form = $(this).data('target');
		$(document).find(form).trigger('submit');
	});
	
	
});