<?php

namespace App\Controllers\API;

use App\Controllers;
use CodeIgniter\I18n\Time;


class API_Authentication extends \App\Controllers\BaseController 
{
    /** Request reponse instance */
    protected $BS_RESPONSE;
    protected $BS_RENDERERMODEL;
    protected $BS_RENDERERENTITY;
    protected $BS_TIMER;
    protected $BS_HELPER;

    /**
     * Configure the class
     */
    public function __construct()
    {
        /** Instanciate the response instance. */
        $this->BS_RESPONSE = \Config\Services::bs_http_response();
        /** Render Model */
        $this->BS_RENDERERMODEL = new \App\Models\AuthCreateServiatorModel();
        /** Working with entity of the model */
        $this->BS_RENDERERENTITY = new \App\Entities\AuthCreateServiator();
        /**Time instance */
        $this->BS_TIMER = Time::createFromDate() . ' '. Time::createFromTime();
        
        /**Helpers */
        helper('text');
    }

    
    
    public function bs_api_create_serviator()
    {
        /**
         * The request for creating a serviator is restricted to only and ajax request with a 
         * request method of post onl.
         */

         

         if($this->request->isAJAX())
         {
            //retrieve the form inputs
            $FormInputs =  $this->request->getPost([
                'client_firstname',
                'client_lastname',
                'client_country_code',
                'client_phone_number',
                'client_country_nationality',
                'client_country_region',
                'client_occupation',
                'client_business_brand',
                'client_business_email',
                'client_business_office_address',
                'client_service_sub_plan',
                'client_service_category',
                
            ], FILTER_SANITIZE_STRING);

            //check that the form data was submitted successfully
            if(!empty($FormInputs))
            {
                //now retrive the service category and type from the inputs
                $serviceCate = explode(': ', $FormInputs['client_service_category'])[0];//category
                $serviceType = explode(': ', $FormInputs['client_service_category'])[1];//type

                //Generate the client login details to be emailed and displayed to the client 
                $profile_id = random_string('numberic', 11);
                $profile_pswrd = random_string('alnum');
                //rewrite the index client_service_category => value
                $FormInputs['client_service_category'] = $serviceCate;
                //add teh service type 
                $FormInputs['client_service_type'] = $serviceType;
                $FormInputs['client_reg_date'] = $this->BS_TIMER;
                $FormInputs['client_elapse_duration'] = $this->BS_TIMER;
                $FormInputs['client_profile_id'] = $profile_id;
                $FormInputs['client_pass_key'] = password_hash($profile_pswrd, PASSWORD_DEFAULT);

                //fill the renderer entity data with the form inputs
                $this->BS_RENDERERENTITY->fill($FormInputs);
                //save the renderer entity data to data base and check if it was saved
                if($this->BS_RENDERERMODEL->save($this->BS_RENDERERENTITY) !== false)
                {
                    //return an API response
                    $this->BS_RESPONSE->send_json_response(
                        '
                        <div>
                            <span class="text-success">Account Created Successfully! </span><br/>
                            <span class="text-info">Your Login Information</span><br/>
                            <span>----------------------------------------------</span><br/>
                            <span class="text-info"><strong>Profile ID: </strong> '.$profile_id.'</span><br/>
                            <span class="text-info"><strong>Login Password: </strong> '.$profile_pswrd. '</span><br/>
                            <span class=" bs-color-code"><strong>NOTE:</strong> Your Login Information has also been sent to your provided email, you can change your password anytime after your first login.</span>
                        </div>
                        ',
                        true,
                        false
                    );
                }
                else
                {
                    //return the errores that occourse
                    $errors = null;
                    //loop through errors
                    foreach($this->BS_RENDERERMODEL->errors() as $from => $err){
                        $errors .= $err;
                    }

                    $this->BS_RESPONSE->send_json_response($errors, false, true);
                }

            }
            else
            {
                //return a response to the API
                $this->BS_RESPONSE->send_json_response('Invalid Form Inputs', false, true);
            }
         }
         else
         {
             $this->BS_RESPONSE->send_json_response('Invalid Request.', false, true);
         }
    }
}
