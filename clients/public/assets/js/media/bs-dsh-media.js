$(document).ready(function(){
	
	//show dsh sidebar
	function showSidebar(){
		$(document).on('click', '.show-dsh-sidebar', function(e){
			//prevent default behaviors.
			e.preventDefault();
			
			//get the current device with
			let width = $(window).width();
			
			//check that width is lesser than 786
			if(width <= 786)
				{
					//show the sidebar
					let sl = $(document).find('.bs-dsh-sidebar').hasClass('bs-sidebar-left');
					let sr = $(document).find('.bs-dsh-sidebar').hasClass('bs-sidebar-right');
					let right = 'bs-sidebar-right';
					let left = 'bs-sidebar-left';
					let sidebar = 'bs-dsh-sidebar';
					
					if(sl)
						{
							$(document).find('.'+sidebar+'').removeClass(''+left+'').delay(200).addClass(''+right+'');
						}
				}
		});
	}
	showSidebar();
	
	//show dsh sidebar
	function closeSidebar(){
		$(document).on('click', '.close-dsh-sidebar', function(e){
			//prevent default behaviors.
			e.preventDefault();
			
			//get the current device with
			let width = $(window).width();
			
			//check that width is lesser than 786
			if(width <= 788)
				{
					//show the sidebar
					let sl = $(document).find('.bs-dsh-sidebar').hasClass('bs-sidebar-left');
					let sr = $(document).find('.bs-dsh-sidebar').hasClass('bs-sidebar-right');
					let right = 'bs-sidebar-right';
					let left = 'bs-sidebar-left';
					let sidebar = 'bs-dsh-sidebar';
					
					if(sr)
						{
							$(document).find('.'+sidebar+'').removeClass(''+right+'').delay(200).addClass(''+left+'');
						}
				}
		});
	}
	closeSidebar();
});