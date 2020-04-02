<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * The user model for communicating the database.
 */
class UserModel extends Model 
{
    /** [Model table] */
    protected $table = 'bs_users';

    /** [model primary key] */
    protected $primaryKey = 'user_id';

    /** [model allowed table fieds] */
    protected $allowedFields = [
        'user_profile_id',
        'user_username',
        'user_password',
        'user_surname',
        'user_firstname',
        'user_lastname',
        'user_phone_number'
    ];

    /** [model return type: Use the Entity of this model to make things easier t manipulate] */
    protected $returnType = 'App\Entities\UserEntity';
    /** [weither the model table uses a timestamps: default true cause there special columns names using the timespams] */
    protected $useTimestamps = true;
    /**[during model update(database insertion): this are the validation rule required before data is inserted into model.] */
    protected $validationRules = [
        'user_username' => 'required|valid_email|is_unique[bs_users.user_username]',
        'user_profile_id' => 'required|is_unique[bs_users.user_profile_id]'
    ];
    /** the message associated with the rules above */
    protected $validationMessages = [
        'user_username' => [
            'is_unique' => '<span class="text-danger">Sorry This email / username has already been taken. Please Choose another.</span><br/>'
        ],
        'user_profile_id' => [
            'is_unique' => '<span class="text-danger">Invalid profile id generated #E501: User ID Conflict</span>'
        ]
    ];

    
}
