<?php

namespace App\Controllers\Authentication;

use App\Controllers;

class AuthRender extends \App\Controllers\BaseController 
{

    /** Rendereres authentication config */
    protected $BS_SES;
    protected $_AUTH_BSR_CLIENT_IS_ACTIVE;

    /** BS PA */
    protected $PA;

    public function __construct()
    {
        //lIBRARIES
        $this->BS_SES = \Config\Services::session();
        $this->PA = \Config\Services::assistant();
        // initialize the user session vars
        $config = [
            'bsr_client_is_active' => false,
        ];

        $this->BS_SES->set($config);

        //get the active state of the user
        $this->_AUTH_BSR_CLIENT_IS_ACTIVE = $this->BS_SES->bsr_client_is_active;
    }

    public function index()
    {
        //TODO: use the next var to redirect user to his/her previous
        // activity if the next is given, else redirect to dashboard after registeration or 
        $next['next'] = $this->request->getGet('next');

        //load the views
        /** Header info */
        $header['title'] = 'Select a subcription plan';
        $header['description'] = 'Select a subscription plan and start rendering services now.';
        $acitvetab['active'] = 'rs';

        echo view('includes/main/header', $header);
        echo view('includes/main/navbar', $acitvetab);
        echo view('main/bs_sub/plans', $next);
        echo view('includes/main/footer');

    }

    public function create(string $subPlan)
    {
        
        //TODO: use the next var to redirect user to his/her previous
        // activity if the next is given, else redirect to dashboard after registeration or 
        $data['next'] = $this->request->getGet('next');
        $data['service_listing'] = $this->PA->bs_assist_GetRendererList();
        $data['plan'] = !empty($subPlan) ? $subPlan : '';
        
        //load the views
        /** Header info */
        $header['title'] = 'Create Service Rendering Account';
        $header['description'] = 'Create Service Rendering Account';
        $acitvetab['active'] = 'rs';
        
        echo view('includes/main/header', $header);
        echo view('includes/main/navbar', $acitvetab);
        echo view('main/bs_auth/auth_render', $data);
        echo view('includes/main/footer');
    }
}
