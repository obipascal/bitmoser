$(document).ready(function(){

    let dashRendarLogin = function(){

        //login form submition
        $('form#auth_client_signin').submit(function(e){
            //prevent default submition
            e.preventDefault();

            //retrieve the form data
            let fdata = $(this).serializeArray();
            let url = 'api/dash/auth/login';
            let selector = 'reauth-email';
            let form = 'auth_client_signin';

            BS.beforeRequest({
                submitDisabled: true,
                form: form
            }, selector);

            //request
            let res = BS.makeRequest(url, 'POST', fdata);
            //get response
            res.then((data) => {

                //process data

                //success
                if(data.success)
                {   //alert success
                    BS.alert({
                        title: 'Rendar Login Successful!',
                        body: 'You successfully sign in. You will be redirected to dashboard is a few seconds.',
                        type: 'success'

                    });

                    //reset form 
                    document.getElementById(form).reset();
                    $('.'+selector+'').html(data.response);

                    //redirecting user after login
                    if(data.redirect)
                    {
                        setTimeout(() => {
                            window.location.href = data.location;
                        }, 2000);
                    }
                }

                //error
                if(data.error)
                {
                    //display error on push message 
                    $('.'+selector+'').html(data.response);

                    //alert error
                    BS.alert({
                        title: 'Rendar Login Error',
                        body: data.response,
                        type: 'danger'
                    });

                }
            });

        });
        
    };
    dashRendarLogin();
});