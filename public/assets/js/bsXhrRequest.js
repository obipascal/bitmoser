/**
 * A basic JQ request helper xhr request.
 * @version 1.0
 * @author Obi Pascal Banjuare <pascalobi83@gmail.com>
 * @license MIT
 * @link https://www.github.com/obipascal
 */
let bsXhrRequest = {
    setting: {
        "env": "development",
        "host": "localhost",
        "segment": "bitmoser/main/public",
        "scheme": "http",
        //request headers settins
        xhrRequestHeader: function(){
            //set the defualt request header here

            let headers ={
                'X-Requested-With': 'XMLHttpRequest',
                // [more header gos here]
            };

            //return the headers
            return headers;
        },
        //the ajax loader
        xhrRequestLoadder: function(){
            $(document).find('.bs-xhr-loader').html(`<small class="bs-ajax-loader"><i class="fa fa-spinner bs-router"></i></small>`);
        },
        //show the loader
        xhrRequestShowLoader: function(){
            $(document).find('.bs-ajax-loader').fadeIn('slow');
        },
        //hide the loader
        xhrRequestHideLoader: function(){
            $(document).find('.bs-ajax-loader').fadeOut('slow');
        },
        
    },
    xhrRequestTracker: function(){
        //track any xhr request on site and show the loader

        //when request starts
        $(document).ajaxStart(function(){
            //parse the loader
            bsXhrRequest.setting.xhrRequestLoadder();
            //show the loader 
            bsXhrRequest.setting.xhrRequestShowLoader();
            console.log('request started');
            

        });

        //when request stops
        $(document).ajaxStop(function(){
            //hide the loader
            bsXhrRequest.setting.xhrRequestHideLoader();
            console.log('request stopped');
            
        });
    },
    xhrRequestSend: (url=null, data ={}, returnType='JSON') => {
        //check the 
        if(!Object.is(url, null) && Object.keys(data).length > 0)
        {
            $.ajax({
                url: bsXhrRequest.setting.getRequestBaseUrl+url,
                method: 'POST',
                data: data,
                cache: false,
                dataType: returnType
            });
        }
        else
        {

        }
    },
    xhrRequestGetResponseData: function(){
        

       $(document).ajaxSuccess(function(event, xhr, settings, data){
         
        });

        
    },

    xhrRequestGetErrors: function(){

        $(document).ajaxError(function(envent, xhr, option, thrownError){
            console.error(`${thrownError}`);            
        });
    },

    getRequestBaseUrl: function(){
        if(this.setting.env != 'development')
        {
            
            //we are in production
            return this.setting.scheme+'://'+this.setting.host+'/';

        }
        else
        {
            //we are in development mode
            return this.setting.scheme+'://'+this.setting.host+'/'+this.setting.segment+'/';
        }
    },

    xhrinitRequest: function(){
        //track the request(s)
        bsXhrRequest.xhrRequestTracker();

    }
};

bsXhrRequest.xhrinitRequest();