<?php
namespace App\Models;

use CodeIgniter\Model;


/**
 * Create a renderer's account model
 */
class AuthCreateServiatorModel extends Model 
{
    protected $table = 'bs_clients';
    protected $primaryKey = 'client_id';
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
        'client_reg_date',
        'client_elapse_duration',
        'client_ranking',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $returnType = 'App\Entities\AuthCreateServiator';
    protected $useTimestamps = true;
    protected $validationRules = [
        'client_business_email' => 'required|valid_email|is_unique[bs_clients.client_business_email]'
    ];
    protected $validationMessages = [
        'client_business_email' => [
            'is_unique' => '<span class="text-danger">Sorry This email hass already been taken. Please Choose another.</span><br/>'
        ]
    ];
}
