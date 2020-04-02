<?php
namespace App\Controllers\Clients;

use App\Controllers\BaseController;


class Dashboard extends BaseController
{

    /**
     * Personal assistant instance
     */
    protected $PA;

    /**
     * Session instance
     */
    protected $BS_SES;

    /**
     * rander instance
     */
    protected $BS_Rendar;

    /**
     * Instanciate the libraries and helpers here in constructor
     */
    public function __construct()
    {
        $this->PA = \Config\Services::assistant();
        $this->BS_SES = \Config\Services::session();
        $this->BS_Rendar = \Config\Services::bs_rendar();
    }

    /**
     * Index server as the default template to load when this controller is called.
     *
     * @allowed: Signedin clients only!
     * @return void
     */
    public function index()
    {
        /**
         * First load the template without restriction
         */
        // TODO: Implement restriction to only loggedin clients only

        // check that user is loggedin
        if ($this->BS_SES->bs_rendar_isActive) {
            // title bar
            $userName['title'] = $this->BS_SES->bs_rendar_firstName;

            // Navbar user info
            $navBarInfo['ID'] = $this->BS_SES->bs_rendar_publicID;
            $navBarInfo['profileName'] = $this->BS_SES->bs_rendar_firstName;

            
            // load the dasbhoard
            echo view('clients/includes/header');
            echo view('clients/includes/navbar');
            echo view('clients/includes/sidebar');
            echo view('clients/dashboard');
            echo view('clients/includes/footer');
        } else {
            // load login form
            $header['title'] = '.::Login Rendar Accoun';
            echo view('clients/auth/auth_login', $header);
        }
    }
}
