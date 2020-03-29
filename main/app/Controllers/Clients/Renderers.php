<?php 

namespace App\Controllers\Clients;

use App\Controllers;

/**
 * [BS RENDERES]: This class load the BS servitors portfolios
 */
class Renderers extends \App\Controllers\BaseController
{
    
    /**
     * renderers portfolios
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
        echo view('main/bs_clients/servitors');
        echo view('includes/main/footer');
    }
}
