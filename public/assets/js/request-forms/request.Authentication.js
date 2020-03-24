
$(document).ready(function(){

    let settings = {
        baseUrl: 'http://localhost/bitmoser/public/',
        routeGroup: 'api/'
    };

    function __createNewServiator(){
        
        $(document).on('submit', '#createRendererForm', function(event){
            //prevent the form defualt submition
            event.preventDefault();

            //get the form data
            let formData = $(this).serializeArray();

            //make an ajax request 
            $.ajax({
                url: settings.baseUrl + settings.routeGroup + 'auth/client/create',
                method: 'POST',
                data: formData,
                cache: false,
                dataType: 'JSON',
                header: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                beforeSend: function(){
                    $(document).find('.push-progress').html(
                        '<span class="text-info"><em>Please Wait, Processing...</em></span>'
                    );

                    $(document).find('form#createRendererForm input[type=submit]').prop('disabled', true);
                },

                success: function(data){

                    if(data.success)
                    {
                        $(document).find('.push-progress').html(
                            '<span class="text-success">'+data.response+'</span>'
                        );

                        $(document).find('form#createRendererForm input[type=submit]').prop('disabled', false);

                        document.getElementById('createRendererForm').reset();
                    }

                    if(data.error)
                    {
                        $(document).find('.push-progress').html(
                            data.response
                        );

                        $(document).find('form#createRendererForm input[type=submit]').prop('disabled', false);
                    }
                    
                },

                error: function(){
                    $(document).find('.push-progress').html(
                        '<span class="text-danger">Server Not Responding!</span>'
                    );

                    $(document).find('form#createRendererForm input[type=submit]').prop('disabled', false);
                }
            });
        });
    }
    __createNewServiator();

});