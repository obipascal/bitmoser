<?php

namespace App\Controllers\Authentication;

use App\Controllers;

class Authentication extends \App\Controllers\BaseController 
{
    
    protected $BS_SES;
    protected $_AUTH_USER_IS_ACTIVE;

    public function __construct()
    {
        $this->BS_SES = \Config\Services::session();
        // initialize the user session vars
        $config = [
            'bs_user_is_active' => false,
        ];

        $this->BS_SES->set($config);

        //get the active state of the user
        $this->_AUTH_USER_IS_ACTIVE = $this->BS_SES->bs_user_is_active;
    }

    /**
     * Load the login template if the user is not active 
     */
    public function bs_login()
    {
        if(!$this->_AUTH_USER_IS_ACTIVE)
        {
            //show the login template form
            $header['title'] = 'Account Login';
            $activeUser['is_active'] = $this->_AUTH_USER_IS_ACTIVE;

            echo view('includes/main/header', $header);
            echo view('main/bs_auth/auth_login', $activeUser);
            echo view('includes/main/footer');
        }
    }

    /**
     * Load signup template
     */
    public function bs_signup()
    {
        $header['title'] = 'Account Sign Up';
        $activeUser['is_active'] = $this->_AUTH_USER_IS_ACTIVE;

        echo view('includes/main/header', $header);
        echo view('main/bs_auth/auth_signup', $activeUser);
        echo view('includes/main/footer');
        
    }

    /**
     * Load the password recovering template
     * - This template is only loaded when the user is !active 
     */
    public function bs_recover_fpswrd()
    {
        if (!$this->_AUTH_USER_IS_ACTIVE) {
            //show the Recover password template form
            $header['title'] = 'Account Recover Password';

            echo view('includes/main/header', $header);
            echo view('main/bs_auth/auth_fpswrd');
            echo view('includes/main/footer');
        }
    }

    
}
