<?php 

namespace App\Controllers\Request;

use App\Controllers;

class ServicesList extends \App\Controllers\BaseController 
{
    /**
     * Loads the default service listing 
     *
     * @return void
     */ 
    public function index()
    {

        //title page 
        $header['title'] = 'Service Listing';
        $header['description'] = 'Request the best service on bitmoService';
        $navbar['active'] = 's';

        echo view('includes/main/header', $header);
        echo view('includes/main/navbar', $navbar);
        echo view('main/bs_services/services');
        echo view('includes/main/footer');
    }

    public function getServiceByLabel(string $label)
    {
        $activeLabel['activeLabel'] = $this->request->getGet('load');
        if(preg_match('/[A-Za-z]/', $label) !== false)
        {
            //title page 
            $header['title'] = 'Service Listing > Label: '.$label;
            $header['description'] = 'Request the best service on bitmoService';
            $navbar['active'] = 's';

            echo view('includes/main/header', $header);
            echo view('includes/main/navbar', $navbar);
            echo view('main/bs_services/services', $activeLabel);
            echo view('includes/main/footer');
        }
        
    }
}
