$(document).ready(function(){

	
	function checkNewPasswordStrength(){
			// the regExp
			let reg = /(\D+)+(\d+)+(\w+)+(\W+)/;
			//progress bar
			let progress = $(document).find('.progress .progress-bar');

			$(document).on('keyup','input#newPassword', function(){
		
		let val = $(this).val().toString();
		//check that the length of the password is > 0
		if(val.length > 0)
			{
				console.log(reg.test(val));
				progress.css({width: '25%'});
				progress.hasClass('bg-danger') ? progress.removeClass('bg-danger').delay(2000).addClass('bg-primary') : 'bg-danger';
				
				
				
				if(val.length >= 5)
					{
						progress.css({width: '50%'});
						
					}
				if(reg.test(val))
					{
						progress.css({width: '100%'});
						progress.hasClass('bg-primary') ? progress.removeClass('bg-primary').delay(2000).addClass('bg-success') : 'bg-primary';
					}
				else
					{
						progress.hasClass('bg-success') ? progress.removeClass('bg-success').delay(2000).addClass('bg-primary') : 'bg-success';
					}
			}
			else
				{
					progress.css({width: '0%'});
					progress.hasClass('bg-primary') ? progress.removeClass('bg-primary').delay(2000).addClass('bg-danger') : 'bg-primary';
					progress.hasClass('bg-success') ? progress.removeClass('bg-success').delay(2000).addClass('bg-danger') : 'bg-success';
					//notify user the length of the password
					$('body').infobox({
						type: 'error',
						tittle: 'Change Password',
						message: `Password length must be greater than 6. your currently at: ${val.length}`,
						overlay: 'false',
						effect: 'off',
						vposition: 'top',
						hposition: 'bottom',
						timeout: '6000'
					});
				}
	});
	}
	checkNewPasswordStrength();
	
	function compareNewPasswords(){
		
		$(document).on('focusout', 'input#cofirmNewPassword',function(){
			
			let newPswrd = $(document).find('input#newPassword').val();
			let confirmPswrd = $(this).val();
			
			//check 
			if(confirmPswrd != newPswrd)
				{
					//alert user
					$('body').infobox({
						type: 'error',
						tittle: 'Confirm New Password',
						message: `Confirm password didn't match new password.`,
						overlay: 'false',
						effect: 'off',
						vposition: 'top',
						hposition: 'bottom',
						timeout: '6000'
					});
					
					$(this).addClass('border rounded border-danger');
				}
			else
				{
					$(this).hasClass('border rounded border-danger') ? $(this).removeClass('border rounded border-danger') : false;
				}
			
		});		
		
	}
	compareNewPasswords();
	
});