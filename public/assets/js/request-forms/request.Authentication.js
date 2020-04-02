
$(document).ready(function(){
   
    
    let baseRequest = bsXhrRequest.getRequestBaseUrl();

    function __createNewServiator(){
        
        $(document).on('submit', '#createRendererForm', function(event){
            //prevent the form defualt submition
            event.preventDefault();

            //get the form data
            let formData = $(this).serializeArray();

            //make an ajax request 
            $.ajax({
                url: baseRequest +'api/auth/client/create',
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

    function __bsUserSignup(){
        $('form#user_signupform').submit(function(event){
            
             event.preventDefault();

            let formData = $(this).serializeArray();

            //make ajax request to server
            $.ajax({
                url: ''+baseRequest+'api/auth/users/signup',
                method: 'POST',
                data: formData,
                cache: false,
                dataType: 'JSON',
                header: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                beforeSend: function(){
                    $('.log-xhr-response').html(
                        `<span class="text-info"><em>Please Wait. Processing form...</em></span>`
                    );

                    //disabled the submit button
                    $('form#user_signupform').find('button[type=submit]').prop('disabled', true);

                    //change it's text
                    $('form#user_signupform').find('button[type=submit]').html('<em>Processing</em>');

                    
                },

                success: function(data){
                    //for success check
                    if(data.success){

                        $('.log-xhr-response').html(data.response);
                        //check if there is a redirect
                        
                        document.getElementById('user_signupform').reset();

                        if(data.redirect)
                        {
                            //change it's text
                            $('form#user_signupform').find('button[type=submit]').html('Thanks!');
                            setTimeout(() => {
                                window.location.href = data.location;
                            }, 3000);
                        }
                        else
                        {
                            //change it's text
                            $('form#user_signupform').find('button[type=submit]').html('Thanks!');
                            $('form#user_signupform').find('button[type=submit]').prop('disabled', false);
                            $('form#user_signupform').find('button[type=submit]').addClass('thanks');
                            $('.thanks').click(function(){
                                window.location.href = baseRequest;
                            });
                        }
                    }

                    //for error check
                    if(data.error)
                    {
                        $('.log-xhr-response').html(data.response);

                        //disabled the submit button
                        $('form#user_signupform').find('button[type=submit]').prop('disabled', false);

                        //change it's text
                        $('form#user_signupform').find('button[type=submit]').html('SINGUP');

                        console.log(bsXhrRequest.xhrRequestGetResponseData());
                        
                    }


                },

                error: function(xhr, textStatus, errorThrown){
                    $('.log-xhr-response').html(`<span class="text-danger">Server Responded with a: ${textStatus} ${errorThrown}</span>`);

                    //disabled the submit button
                    $('form#user_signupform').find('button[type=submit]').prop('disabled', false);

                    //change it's text
                    $('form#user_signupform').find('button[type=submit]').html('SINGUP');
                }
            });

        });
    }
    __bsUserSignup();

    

    

});