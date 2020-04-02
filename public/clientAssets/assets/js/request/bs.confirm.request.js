$(document).ready(function(){
	
	//confirm request
	function acceptRequest(){
		$(document).on('click','.accept_request', function(){
				
				$(this).append('<i class="fa fa-handshake-o" style="color: #00cc66;"></i>');
			
				$(this).attr('disabled', true);
			$(this).siblings().attr('disabled', true);
		});
	}
	acceptRequest();
	
	//busy request
	function busyRequest(){
		$(document).on('click', '.busy_request', function(){
			$(this).attr('disabled', true).delay(3000).parents('.request_card').remove();
		});
	}
	busyRequest();
	
	//confirm Request
	function confirmRequest(){
		$(document).on('click', '.confirm_request', function(){
			$(this).text('pending...').css({
				fontSize: '9px',
				fontStyle: 'italic',
				color: 'gold'
			});
			
			setTimeout(function(){
				$(document).find('.confirm_request').text('Done!').css({
					fontSize: '9px',
					fontStyle: 'normal',
					color: '#00cc66'
				});
			}, 3000);
		});
	}
	confirmRequest();
	
});