/**
 * - DASHBOARD JS MAIN MANIPULTION FILE 
 * ===================================
 * Update, Delete, Create and others activities
 */

 $(document).ready(function(){

    /**Start: Uploading profile picture */
        function dash_UpdateProfileAvatar(){
            
            $(document).find('div.bs_updateProfileAvatar').fineUploader({
                template: 'qq-template-manual-trigger',
                request: {
                    endpoint: ''+BS.baseUrl()+'api/files/up/clients/avatar',

                    method: 'POST',
                    requireSuccessJson: true
                },
                failUploadTextDisplay: {
                    eneableTooltip: true,
                    mode: 'custom',
                    responseProperty: 'error'

                },
                text: {
                    waitingForResponse: 'Please Wait...'
                },
                thumbnails: {
                    placeholders: {
                        waitingPath: '' + BS.baseUrl() + 'globalAssets/finUploader/plugin/fine-uploader/jquery.fine-uploader/placeholders/waiting-generic.png',
                        notAvailablePath: '' + BS.baseUrl() + 'globalAssets/finUploader/plugin/fine-uploader/jquery.fine-uploader/placeholders/not_available-generic.png'
                    }
                },

                autoUpload: false, // stop the automatic uploading

                retry: {
                    enableAuto: true // defaults to false
                },
                multiple: false, // upload only one file at a time

                validation: {
                    allowedExtensions: [
                        'png', 'jpg', 'jpeg'
                    ], // the allowed files type
                    itemLimit: 3,
                    // sizeLimit: 5120000 // 5000 kB = 5000 * 1024 bytes
                }

            }).on('complete', function (event, id, name, responseJSON) {

                
                if (responseJSON.success) {
                    
                    console.log(responseJSON.response);
                    $(document).find('img.bs_updateAvatarPreview').attr('src', responseJSON.response);

                    BS.alert({
                        title: 'Profile picture upload',
                        body: 'Profile picture uploaded successfuly!',
                        type: 'success'
                    });

                }
                else{
                    
                    BS.alert({
                        title: 'Profile File Uploading',
                        body: responseJSON.response,
                        type: 'error'
                    });
                }
                
                
            });

            $('#trigger-upload').click(function () {
                $(document).find('div.bs_updateProfileAvatar').fineUploader('uploadStoredFiles');
            });
            
        }
        dash_UpdateProfileAvatar();
    /**End: Uploading profile picture */

    /**Start: Update Last Login Status  */
       async function dash_UpdateLastLoginStatus(){
           
        let res = BS.makeRequest('dash/ng/rendar/status/lslg', 'POST');
        res.then((data) =>{
            if(data.success)
            {
                $('.bs_rendarLastLogin').html(data.response);
            }

            if(data.error)
            {
                $('.bs_rendarLastLogin').html('<small class="text-danger">error</small>');
                
            }
        });
       }
      setInterval(function(){
        dash_UpdateLastLoginStatus();
       }, 30000);
    /**End: Update Last Login Status  */


    
 });