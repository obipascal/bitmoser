(function(){
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
							$('#preview-picture').attr('src', ''+e.target.result+'');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
				
    $("input.form-control[name=client_profile_picture]").change(function(){
        readURL(this);
    });
    
    
})()