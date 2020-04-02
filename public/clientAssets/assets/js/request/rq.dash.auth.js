$(document).ready(function(){

    let dashRendarLogin = function(){

        //login form submition
        $('form#auth_client_signin').submit(function(e){
            //prevent default submition
            e.preventDefault();

            //retrieve the form data
            let fdata = $(this).serializeArray();
            let url = 'api/dash/auth/login';

        });
        
    };
});