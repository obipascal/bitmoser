
$(document).ready(function(){
   
    function __createNewServiator(){
        
        $(document).on('submit', '#createRendererForm', function(event){
            //prevent the form defualt submition
            event.preventDefault();

            //get the form data
            let formData = $(this).serializeArray();
            var url = 'api/auth/client/create';
            var selector = 'push-progress';
            var form = 'createRendererForm';
            BS.beforeRequest({
                submitDisabled: true,
                form: form,
                success: 'Thank your for signing up for a rendar account. Its nice to have you around.' 
            }, selector)
            //make request and get the response
            let response = BS.makeRequest(url, 'POST', formData);
            response.then((data) => {
                if(data.success)
                {
                    //do some success stuff
                    $(document).find('.push-progress').html(
                        '<span class="text-success">'+data.response+'</span>'
                    );

                    //reset the form inputs
                    document.getElementById('createRendererForm').reset();
                }

                if(data.error)
                {
                    //do some error stuff
                    $(document).find('.push-progress').html(
                        data.response
                    );
                }
            });
            
        });
    }
    __createNewServiator();

    function __bsUserSignup(){
        
        
        $('form#user_signupform').submit(function(event){
            
            event.preventDefault();

            let formData = $(this).serializeArray();
            let form = 'user_signupform';
            let selector = 'log-xhr-response';
            let url = 'api/auth/users/signup';
            
            BS.beforeRequest({
                submitDisabled: true,
                form: form
            }, selector);
            //make request and get response 
            let response = BS.makeRequest(url, 'POST', formData);

            //proccess response 
            response.then((data) => {
                if(data.success)
                {
                    //do success stuff

                    //show alert msg
                    BS.alert({
                        title: 'Account creation successful!',
                        body: data.response,
                        type: 'success'
                    })

                    $(document).find('.'+selector+'').html(data.response);
                    document.getElementById(form).reset();
                }

                if(data.error)
                {
                    //do some errror stuff
                    $(document).find('.'+selector+'').html(data.response);
                }
            });
        });
    }
    __bsUserSignup();

    

    

});