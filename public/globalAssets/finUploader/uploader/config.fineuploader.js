let basePath = new RequestHelper('dev', 'ka', 'localhost');
$(document).ready(function(){

    function _datafile_uploader() { 
        
    	// param data
		let param_data = {};
		let params = new URLSearchParams(document.location.search.substring(1));
		let category = params.get('s_type');
		let s_type = Object.is(category, null) ? 'data_service' : category.split('-').join('_').toLocaleLowerCase();
    	// allowed types extension
    	let allowed_types = {
    		'data_service': [
    			'xlsx', 'docx', 'pdf'
    		],
    		'data_analysis_and_interpretation': ['xlsx'],
    		'other_services': ['docx', 'pdf', 'txt']

    	};
    	// valid type
    	param_data['service_type'] = params.get('s_type');
    	param_data['service_id'] = params.get('s_id');
		
		$(document).find('#data-file-uploader-form').fineUploader({
			template: 'qq-template-manual-trigger',
			request: {
				endpoint: '' + basePath.getBaseUrl() + 'services/request/upload',
				params: param_data,
				method: 'POST',
				requireSuccessJson: true
			},
			failUploadTextDisplay: {
				eneableTooltip: true,
				mode: 'custom',
				responseProperty: 'error'

			},
			text: {
				waitingForResponse: 'Processing...'
			},
			thumbnails: {
				placeholders: {
					waitingPath: '' + basePath.getBaseUrl() + 'assets/plugin/fine-uploader/jquery.fine-uploader/placeholders/waiting-generic.png',
					notAvailablePath: '' + basePath.getBaseUrl() + 'assets/plugin/fine-uploader/jquery.fine-uploader/placeholders/not_available-generic.png'
				}
			},

			autoUpload: false, // stop the automatic uploading

			retry: {
				enableAuto: true // defaults to false
			},
			multiple: false, // upload only one file at a time

			validation: {
				allowedExtensions: allowed_types[s_type], // the allowed files type
				itemLimit: 3,
				// sizeLimit: 5120000 // 5000 kB = 5000 * 1024 bytes
			}

		}).on('complete', function (event, id, name, responseJSON) {
			if (responseJSON.success) {
				$(document).find('.load-form-progress').html(responseJSON.response);

				setTimeout(() => {
				 window.location.href = basePath.getBaseUrl() + 'document/Papers';
				}, 3000);

				
			}

			if (responseJSON.error) {
				$(document).find('.load-form-progress').html(responseJSON.response)

				
			}


		});

		$(document).find('#trigger-upload').click(function () {
			$(document).find('#data-file-uploader-form').fineUploader('uploadStoredFiles');
		});


    	/** [END: Dashboard uploader handler] */

    	
    }
	_datafile_uploader();
	
	function _paper_uploader(){
		//TODO: form selectore #paper-uploader-form

		$(document).find('#paper-uploader-form').fineUploader({
			template: 'qq-template-manual-trigger',
			request: {
				endpoint: '' + basePath.getBaseUrl() + 'document/paper/upload/file',
				params: {},
				method: 'POST',
				requireSuccessJson: true
			},
			failUploadTextDisplay: {
				eneableTooltip: true,
				mode: 'custom',
				responseProperty: 'error'

			},
			text: {
				waitingForResponse: 'Processing...'
			},
			thumbnails: {
				placeholders: {
					waitingPath: '' + basePath.getBaseUrl() + 'assets/plugin/fine-uploader/jquery.fine-uploader/placeholders/waiting-generic.png',
					notAvailablePath: '' + basePath.getBaseUrl() + 'assets/plugin/fine-uploader/jquery.fine-uploader/placeholders/not_available-generic.png'
				}
			},

			autoUpload: false, // stop the automatic uploading

			retry: {
				enableAuto: true // defaults to false
			},
			multiple: false, // upload only one file at a time

			validation: {
				allowedExtensions: [
					'docx', 'pdf', 'txt'
				], // the allowed files type
				itemLimit: 3,
				// sizeLimit: 5120000 // 5000 kB = 5000 * 1024 bytes
			}

		}).on('complete', function (event, id, name, responseJSON) {
			if (responseJSON.success) {
				$(document).find('.paper-upload-progress').html('<span class="text-success">File upload successfully!</span>');

				let urlQ = '?f_i='+responseJSON.response+'&t_r_p_f=newsfeed-home&t_r_p_t=upload-paper-details&a=upload';
				let url = 'document/paper/upload/details/'+responseJSON.response+'';//file return id
				let next_action = basePath.getBaseUrl()+url+urlQ;

				setTimeout(() => {
					window.location.href = next_action;
				}, 2000);

			}

			if (responseJSON.error) {
				$(document).find('.paper-upload-progress').html(responseJSON.response);


			}


		});

		$(document).find('#trigger-upload').click(function () {
			$(document).find('#paper-uploader-form').fineUploader('uploadStoredFiles');
		});
	}
	_paper_uploader();
});