<?php

namespace App\Controllers\API;

use App\Controllers\BaseController;


class API_Authentication extends BaseController
{
    /** Request reponse instance */

    /** Renderer model */
    protected $BS_RENDERERMODEL;
    /** Renderer entity */
    protected $BS_RENDERERENTITY;
    /** Signup model */
    protected $BS_SIGNUPMODEL;
    /** Signup entity */
    protected $BS_SIGNUPENTITY;

    /** [OTHERS] */
    /** ------------ */
    /** [The http xhr resposne library] */
    protected $BS_RESPONSE;
    /** [The Validation library] */
    protected $BS_AUTH_VALIDATOR;
    /** [The Time library] */
    protected $BS_TIMER;
    /** [The helper class] */
    protected $BS_HELPER;
    /** [Personel Assistance] */
    protected $PA;

    /**
     * Configure the class
     */
    public function __construct()
    {
        /** Instanciate the response instance. */
        $this->BS_RESPONSE = \Config\Services::bs_http_response();
        /** Render Model */
        $this->BS_RENDERERMODEL = new \App\Models\AuthCreateServiatorModel();
        /** signup */
        $this->BS_SIGNUPMODEL = new \App\Models\UserModel();
        /** Working with entity of the model */
        $this->BS_RENDERERENTITY = new \App\Entities\AuthCreateServiator();
        /**SIGNUP */
        $this->BS_SIGNUPENTITY = new \App\Entities\UsersEntity();
       
        /** instanciate the validation class */
        $this->BS_AUTH_VALIDATOR = \Config\Services::validation();
        $this->PA = \Config\Services::assistant();

        /**Helpers */
        helper('text');
    }

    /**
     * The request for creating a serviator is restricted to only and ajax request with a
     * request method of post onl.
     */
    public function bs_api_create_serviator()
    {
       

        if ($this->request->isAJAX()) {
            //retrieve the form inputs
            $FormInputs = $this->request->getPost([
                'client_firstname',
                'client_lastname',
                'client_country_code',
                'client_phone_number',
                'client_country_nationality',
                'client_country_region',
                'client_occupation',
                'client_gender',
                'client_business_brand',
                'client_business_email',
                'client_business_office_address',
                'client_service_sub_plan',
                'client_service_category',

            ], FILTER_SANITIZE_STRING);
            
            //check that the form data was submitted successfully
            if (!empty($FormInputs)) {
                //now retrive the service category and type from the inputs
                $serviceCate = explode(': ', $FormInputs['client_service_category'])[0]; //category
                $serviceType = explode(': ', $FormInputs['client_service_category'])[1]; //type

                //Generate the client login details to be emailed and displayed to the client
                $profile_id = random_string('numberic',8);
                $profile_pswrd = random_string('alnum', 8);
                //rewrite the index client_service_category => value
                
               
                $FormInputs['client_service_category'] = $serviceCate;
                //add teh service type
                $FormInputs['client_service_type'] = $serviceType;
                $FormInputs['client_elapse_duration'] = $this->PA->bs_parseDateTime();
                $FormInputs['client_profile_id'] = $profile_id;
                $FormInputs['client_pass_key'] = password_hash($profile_pswrd, PASSWORD_DEFAULT);
                
                //fill the renderer entity data with the form inputs
                $this->BS_RENDERERENTITY->fill($FormInputs);
                //save the renderer entity data to data base and check if it was saved
                if ($this->BS_RENDERERMODEL->save($this->BS_RENDERERENTITY) !== false) {

                    //TODO: Email client the login details and return api response.
                    // [START: EMAIL]
                    
                    
                    // [END: EMAIL]
                    //return an API response
                    $this->BS_RESPONSE->send_json_response(
                        '
                        <div>
                            <span class="text-success">Account Created Successfully! </span><br/>
                            <span class="text-info">Your Login Information</span><br/>
                            <span>----------------------------------------------</span><br/>
                            <span class="text-info"><strong>Profile ID: </strong> ' . $profile_id . '</span><br/>
                            <span class="text-info"><strong>Login Password: </strong> ' . $profile_pswrd . '</span><br/>
                            <span class=" bs-color-code"><strong>NOTE:</strong> Your Login Information has also been sent to your provided email, you can change your password anytime after your first login.</span>
                            <a href="'.base_url('/dash/ng/rendar/board').'" role="button" class="btn btn-sm btn-success">I Have Copied My login Infomation</a>
                        </div>
                        ',
                        true,
                        false
                    );
                } else {
                    //return the errores that occourse
                    $errors = null;
                    //loop through errors
                    foreach ($this->BS_RENDERERMODEL->errors() as $from => $err) {
                        $errors .= $err;
                    }

                    $this->BS_RESPONSE->send_json_response($errors, false, true);
                }

            } else {
                //return a response to the API
                $this->BS_RESPONSE->send_json_response('Invalid Form Inputs', false, true);
            }
        } else {
            $this->BS_RESPONSE->send_json_response('Invalid Request.', false, true);
        }
    }

    /**
     * Create  a new user account
     *
     * @return void
     */
    public function bs_api_signup()
    {
        //always check that the request is xhr request
        if ($this->request->isAJAX()) {

            //retrieve form data from the request
            $SignupFormInput = $this->request->getPost([
                'user_username',
                'user_confirm_password',
                'user_password',
                'user_surname',
                'user_firstname',
                'user_lastname',
                'user_phone_number',
            ]);

            /**
             * run the validation
             * -------------------
             * 1. to make sure the data valid and are provided base on the rule provided
             * 2. check if they are not valid then: return the error message to the user
             * 3. else: procceed.
             */

             //to provent previous error reporting from a run validation call, this is required
             $this->BS_AUTH_VALIDATOR->reset();

             //check if the form inputs passes the test for validity
             if(!$this->BS_AUTH_VALIDATOR->run($SignupFormInput, 'bs_createUserAccountRules'))
             {
                // test fails
                //TODO: [setp 2]: return error message to the user

                $errors = null;
                foreach ($this->BS_AUTH_VALIDATOR->getErrors() as $e => $Emsg) {
                    $errors .= '<span class="text-danger">'.$Emsg.'</span>';
                }

                //return the errors 
                $this->BS_RESPONSE->send_json_response($errors, false, true);
             }
             else
             {
                 //TODO: [step 3]: procceed
                
                 /**
                  * [Procceed]
                  * ----------
                  [Start: begin]
                  * 1. Generate a unique user profile id,
                  * 2. Hash the user provided password,
                  * 3. delete the confirm password and push 1,2 above to SignupFormInputs array,
                  * 4. call and fill the model entity with the signupFormInputs.
                  * 5. Save the data to the model(database):
                        a. check that the model was save:
                            i. if model is saved:
                            ii.    goto[step: 6]
                            iii. else:
                            iv.    return errors to user.
                  * 6. Return a success message.
                  [End: exit]
                  */
                  
                  //TODO: [step: 1]
                  $userProfileId = random_string('alnum', 8);
                  //TODO: [step: 2]
                  $hasedPswrd = password_hash($SignupFormInput['user_password'], PASSWORD_DEFAULT);
                  //TODO: [step: 3]
                  unset($SignupFormInput['user_confirm_password']);
                  $SignupFormInput['user_profile_id'] = $userProfileId;
                  $SignupFormInput['user_password'] = $hasedPswrd;
                  //TODO: [step: 4]
                  $this->BS_SIGNUPENTITY->fill($SignupFormInput);
                  //TODO: [Step: 5.a[i]]
                  if($this->BS_SIGNUPMODEL->save($SignupFormInput))
                  {
                        //TODO: [step: 5.a[ii]]
                        $this->BS_RESPONSE->send_json_response('<span class="text-success">Sign Up Successfully!</span>', true, false, true, base_url());

                        /**
                         * New Features to be added
                         * ------------------------
                         * sign in user after registeration is completed and start the use session
                         */

                  }
                  else
                  {
                      //TODO: [step: 5.a[iv]]

                      $error = null;

                      foreach($this->BS_SIGNUPMODEL->errors() as $SmdErr => $e){

                        $error .= $e;
                      }

                      $this->BS_RESPONSE->send_json_response($error, false, true);
                  }

             }
        } else {
            //return an api response for the requested url
            $this->BS_RESPONSE->send_json_response('Invalid Request!', false, true);
        }
    }
}