<?php
namespace App\Models\Rendar;

use CodeIgniter\Model;


/**
 * Create a renderer's account model
 */
class ReadRendar_M extends Model 
{
    /** [model table] */
    protected $table = 'bs_clients';
    /** [model primary key: used for identifying each rows in model table] */
    protected $primaryKey = 'client_profile_id';
    /** [model allowed fields in model table for manipulation] */
    protected $allowedFields = [
        'client_profile_id',
        'client_pass_key',
        'client_surname',
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
        'client_service_type',
        'client_elapse_duration',
        'client_ranking',
        'client_last_loggedin',
        'client_first_loggedin',
        'client_loggedin_count',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    /** [model return type: Use the Entity of this model to make things easier t manipulate] */
    protected $returnType = 'object';
    /** [weither the model table uses a timestamps: default true cause there special columns names using the timespams] */
    protected $useTimestamps = true;
    /**[during model update(database insertion): this are the validation rule required before data is inserted into model.] */
    protected $validationRules = [
        'client_business_email' => 'required|valid_email|is_unique[bs_clients.client_business_email]'
    ];
    /** the message associated with the rules above */
    protected $validationMessages = [
        'client_business_email' => [
            'is_unique' => '<span class="text-danger">Sorry This email has already been taken. Please Choose another.</span><br/>'
        ]
    ];


    /**
     * Get client last login information during login 
     *
     * @param string $id
     * @return object
     */
    public function getLoginStatus(string $id)
    {
        
        if(!empty($id))
        {   //retrieve the client provided the id is valid
            $client= $this->find($id);
            //check if there is a clientwith given id
            if(!empty($user))
            {
                $loginInfo['last_login'] = $client->client_last_loggedin;
                $loginInfo['first_login'] = $client->client_first_loggedin;
                $loginInfo['login_count'] = $client->client_loggedin_count;

                //return data as an object
                return json_decode(json_encode($loginInfo));
            }
            else
            {
                //there is no client found with the given id
                return null;
            }
        }
        else
        {
            return null;
        }
    }
}
