$(document).ready(function(){
	
	// $('.bs-fm-input-type .form-check-input').each(function(index){
	// 	$(this).prop('checked', true);
	// 	console.log(index);
	// });
	
	/**
	* In this algorithem we are going to make sure that 
	* only one check box is check at a time.
	*1.) Create an array to store the current checked checkbox
	*2.) if a checkbox is clicked trevers and check the one that is check 
	* and store its id the array. The max value of the array is 1.
	*3.) If and other checkbox is click check the array if there is a value 
	*retrieve it and use its id and unchecked the checkbox.
	*/
	
	var ids = {};
	/**
	* Get the length of the object
	*@func Object.keys(ids).length
	*
	*Add new prop and value to js object
	*@func: Object.assign(ids, {key3: "value3"});
	*
	*Removing or Deleting a property from a js object
	*@func: delete ids.id;
	*/
	
	$('.bs-fm-input-type .form-check-input').click(function(event){
		let len = Object.keys(ids).length;
		
		if(len === 0)
			{
				
				//means the is no element in the object
				var curId = $(this).attr('id');
				Object.assign(ids, {id: curId});
			}
		else
			{
				if($(this).prop('checked'))
					{
						$(this).prop('checked', false);
						$('#'+ids.id+'').prop('checked', false);
					}
				delete ids.id;
			}
	});
	
		
});

	
	