<?php
namespace App\Controllers\Clients\API;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;
class Authentication extends BaseController
{

    protected $BS_Ses;

    protected $BS_Response;

    protected $BS_ReadRendarModal;

    protected $BS_WriteRendarModal;

    protected $BS_RendarEntity;

    protected $PA;

    public function __construct()
    {
        $this->BS_Ses = \Config\Services::session();
        $this->BS_Response = \Config\Services::bs_http_response();
        $this->BS_RendarEntity = new \App\Entities\Clients\Rendar_E();
        $this->BS_ReadRendarModal = new \App\Models\Clients\Rendar\ReadRendar_M();
        $this->BS_WriteRendarModal = new \App\Models\Clients\Rendar\Write_Rendar_M();
        $this->PA = \Config\Services::assistant();
    }

    public function handleLoginForm()
    {
        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            // retrieve form data
            $formInput = $this->request->getPost([
                'auth_client_id',
                'auth_client_security_key'
            ]);
            //get client
            $client = $this->BS_ReadRendarModal->find($formInput['auth_client_id']);

            if (! empty($client)) {

                // TODO: Proper security checking and session starting take place here

                // errors
                $error = [];
                $isOk = false;

                // verify password
                $v_psw = password_verify($formInput['auth_client_security_key'], $client->client_pass_key);

                if ($v_psw) {
                    $isOk = true;
                } else {
                    array_push($error, '<span class="text-danger">Invalid Password!</span><br/>');
                }

                // prepare session vars and start an active session
                if (! $isOk) {
                    $this->BS_Response->send_json_response(implode('', $error), false, true);
                    // $this->BS_Response->send_json_response($client, false, true);
                } else {                   
                    
                    $this->BS_RendarEntity = $this->BS_WriteRendarModal->find($client->client_profile_id);
                    /** //TODO: [START: UPDATE THE LOGIN STATUS OF THE CLIENT] */

                        //retrieve the status
                        $prevLoginStatus = $this->BS_ReadRendarModal->getLoginStatus($client->client_profile_id);
                        
                        if(!(empty($prevLoginStatus)  || is_null($prevLoginStatus)))
                        {
                            //check the first_login:bool and login_count:int

                            if($prevLoginStatus->first_login && (int)$prevLoginStatus->login_count === 0)
                            {
                                // this is client first login

                                //generate new client login status and save it
                                $this->BS_RendarEntity->client_first_loggedin  = false; 
                                $this->BS_RendarEntity->client_loggedin_count = (int)$prevLoginStatus->login_count + 1;
                                $this->BS_RendarEntity->client_last_loggedin = $this->PA->bs_parseDateTime();

                                //save the status
                                
                                $this->BS_WriteRendarModal->save($this->BS_RendarEntity);
                            }
                            else
                            {
                                //this is client second or third login

                                //generate new client login status and save it
                                $this->BS_RendarEntity->client_first_loggedin  = false; 
                                $this->BS_RendarEntity->client_loggedin_count = (int)$prevLoginStatus->login_count + 1;
                                $this->BS_RendarEntity->client_last_loggedin = $this->PA->bs_parseDateTime();

                                //save the status
                                $this->BS_WriteRendarModal->save($this->BS_RendarEntity);                             
                                
                            }

                            //re-fetch client with the login infos
                            $client = $this->BS_ReadRendarModal->find($client->client_profile_id);

                            // destory any active session. to start a new one.
                            
                            // password was verified okay
                            /** //TODO: [START: CLIENT SESSION] */
                                $session_vars['bs_rendar_isActive'] = TRUE;
                                $session_vars['bs_rendar_id'] = $client->client_id;
                                $session_vars['bs_rendar_publicID'] = $client->client_profile_id;
                                $session_vars['bs_rendar_sessionPSW'] = $client->client_pass_key;
                                $session_vars['bs_rendar_surname'] = $client->client_surname;
                                $session_vars['bs_rendar_firstName'] = $client->client_firstname;
                                $session_vars['bs_rendar_lastName'] = $client->client_lastname;
                                $session_vars['bs_rendar_shortName'] = ! is_null($client->client_surname) || ! empty($client->client_surname) ? $client->client_surname : $client->client_firstname;
                                $session_vars['bs_rendar_fullName'] = ! is_null($client->client_surname) || ! empty($client->client_surname) ? $client->client_surname . ', ' . $client->client_firstname . ' ' . $client->client_lastname : 'Not Set';
                                $session_vars['bs_rendar_countryCode'] = $client->client_country_code;
                                $session_vars['bs_rendar_phoneNumber'] = $client->client_phone_number;
                                $session_vars['bs_rendar_countryNationality'] = $client->client_country_nationality;
                                $session_vars['bs_rendar_countryRegion'] = $client->client_country_region;
                                $session_vars['bs_rendar_occupation'] = $client->client_occupation;
                                $session_vars['bs_rendar_businessBrand'] = $client->client_business_brand;
                                $session_vars['bs_rendar_businessEmail'] = $client->client_business_email;
                                $session_vars['bs_rendar_businessOfficeAddress'] = $client->client_business_office_address;
                                $session_vars['bs_rendar_serviceSubPlan'] = $client->client_service_sub_plan;
                                $session_vars['bs_rendar_serviceCategory'] = $client->client_service_category;
                                $session_vars['bs_rendar_serviceType'] = $client->client_service_type;
                                $session_vars['bs_rendar_registeredOn'] = $client->created_at;
                                $session_vars['bs_rendar_durationStayed'] = $client->client_elapse_duration;
                                $session_vars['bs_rendar_ranking'] = $client->client_ranking;
                                $session_vars['bs_rendar_last_loggedin'] = $client->client_last_loggedin;
                                $session_vars['bs_rendar_first_loggedin'] = $client->client_first_loggedin;
                                $session_vars['bs_rendar_loggedin_count'] = $client->client_loggedin_count;

                                // init session
                                $this->BS_Ses->set($session_vars);

                                if ($this->BS_Ses->bs_rendar_isActive) {
                                    $this->BS_Response->send_json_response('LoggedIn! Redirecting to dashboard.', true, false, true, base_url().'/dash/ng/rendar/board');
                                } else {
                                    $this->BS_Response->send_json_response('<span class="text-danger">Unable to proccess your session. Please contact ' . mailto('support@bitmoservice.com', 'Support') . ' concerning this error for more info.</span>', false, true);
                                }
                            /**[END: CLIENT SESSION] */
                        }
                        else
                        {
                            $this->BS_Response->send_json_response('Unable to retrieve login status', false, true);
                        }
                    /** [END: UPDATE THE LOGIN STATUS OF THE CLIENT] */
                    
                }
            } else {
                $this->BS_Response->send_json_response('<span class="text-danger">Invalid Client ID.</span>', false, true);
            }
        } else {
            echo $this->BS_Response->send_json_response('Invalid Reqeust', false, true);
        }
    }
}
