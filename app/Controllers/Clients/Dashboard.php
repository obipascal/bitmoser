<?php
namespace App\Controllers\Clients;

/** Imports */
use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

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

        // $this->BS_SES->destroy();

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

            if(is_null($this->request->getGet('logout')))
            {
                // title bar
                $header['title'] = $this->BS_SES->bs_rendar_firstName;

                // Navbar user info
                $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;

                //footer
                $footer['scripts'] = '';
                
                //resolve first login message and last login  on dashboard
                $firstLogin = $this->BS_SES->bs_rendar_first_loggedin;
                $loginCount = $this->BS_SES->bs_rendar_loggedin_count;
                $lastLogin = $this->BS_SES->bs_rendar_last_loggedin;            
                
                if(!(empty($firstLogin) && empty($loginCount) && is_null($firstLogin) && is_null($loginCount)))
                {
                    //resovle last login
                    if($firstLogin && (int)$loginCount === 0)
                    {
                        
                        $navBar['firstLogin'] = true;

                    }
                    else
                    {
                        $navBar['firstLogin'] = false;
                    }
                }
                else
                {
                    $footer['scripts'] = '<script> BS.alert({title: "Error Retrieving client data", body: "Unable to parse client information", type: "danger"});</script>';
                }
                
                //resovle the last login
                if(!(empty($lastLogin) && is_null($lastLogin)))
                {
                    $lastlog = Time::parse($lastLogin, 'Africa/Lagos', 'en_GB');
                    $humaniz = $lastlog->humanize();

                    $navBar['lastLogin'] = $humaniz;
                }


                
                // load the dasbhoard
                echo view('clients/includes/header', $header);
                echo view('clients/includes/navbar', $navBar);
                echo view('clients/includes/sidebar');
                echo view('clients/dashboard');
                echo view('clients/includes/footer', $footer);
            }
            else
            {
                //logout user
                $this->BS_SES->destroy();

                return redirect()->to(base_url().'/dash/ng/rendar/board');

            }
            
        } else {
            // load login form
            $header['title'] = '.::Login Rendar Accoun';
            echo view('clients/auth/auth_login', $header);
        }

        
    }

    /**
     * Logout Rendar from dashboard
     *
     * @return void
     */
    private function logout()
    {
        //make sure rendar is loggedin before destorying the session
        if($this->BS_SES->bs_rendar_isActive)
        {
            //now check that user clicks on logout
            $logout = $this->request->getGet('logout');

            if($logout)
            {
                //if the value coded is intact that's true destory session vars
                $this->BS_SES->destroy();
                
                

            }

            if(!$this->BS_SES->bs_rendar_isActive || !isset($this->BS_SES->bs_rendar_isActive))
            {
                redirect();
            }
            
        }
        else
        {
            //go-to login

            redirect();
        }
    }
}