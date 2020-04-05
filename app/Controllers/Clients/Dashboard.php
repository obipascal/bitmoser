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
     * HTTP Response instance
     */
    protected $Response;

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
        $this->Response = \Config\Services::bs_http_response();

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
                $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;

                //sidebar
                $sideBar['active'] = 'board';

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
                echo view('clients/includes/sidebar', $sideBar);
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
     * Services route
     *
     * @return void
     */
    public function services()
    {
        //make sure rendar is login 
        if($this->BS_SES->bs_rendar_isActive)
        {
            
            if(is_null($this->request->getGet('logout')))
            {
                // title bar
                $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Services';

                // Navbar user info
                $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                //sidebar
                $sideBar['active'] = 'services';

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

                /** [The view] */
                                
                    echo view('clients/includes/header', $header);
                    echo view('clients/includes/navbar', $navBar);
                    echo view('clients/includes/sidebar', $sideBar);
                    echo view('clients/services/create');
                    echo view('clients/includes/footer', $footer);
                /** [End] */
            }
            else
            {
                //logout user
                $this->BS_SES->destroy();

                return redirect()->to(base_url().'/dash/ng/rendar/board');

            }
             
        }
        else {
           return redirect()->to(base_url().'/dash/ng/rendar/board');
        }
    }

    /**
     * Request route
     *
     * @return void
     */
    public function request()
    {
        //make sure rendar is login 
        if($this->BS_SES->bs_rendar_isActive)
        {
            
            if(is_null($this->request->getGet('logout')))
            {
                /**Route between accept request and new request */
                switch ($this->request->getGet('view')) {
                    case 'accept':
                        //show the accept template
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Confirm Accepted Request';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'request';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/request/accepted');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                    case 'new':
                            //show the newly request from clients
                            // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > New Request';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'request';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/request/request');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                    
                    default:
                        //be default show the nwe request 
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > New Request';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'request';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/request/request');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                }
            }
            else
            {
                //logout user
                $this->BS_SES->destroy();

                return redirect()->to(base_url().'/dash/ng/rendar/board');

            }
             
        }
        else {
           return redirect()->to(base_url().'/dash/ng/rendar/board');
        }
    }

    /**
     * Wallet route
     *
     * @return void
     */
    public function wallet()
    {
        //make sure rendar is login 
        if($this->BS_SES->bs_rendar_isActive)
        {
            
            if(is_null($this->request->getGet('logout')))
            {
                switch ($this->request->getGet('view')) {
                    case 'withdraw':
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Withdrawal';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'wallet';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/e-wallet/withdrawal');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                    case 'balance':
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Wallet';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'wallet';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/e-wallet/wallet');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                    case 'transacts':
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Transactions History';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'wallet';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/e-wallet/transactions');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                    
                    default:
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Wallet';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'wallet';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/e-wallet/wallet');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                }
            }
            else
            {
                //logout user
                $this->BS_SES->destroy();

                return redirect()->to(base_url().'/dash/ng/rendar/board');

            }
             
        }
        else {
           return redirect()->to(base_url().'/dash/ng/rendar/board');
        }
    }

    /**
     * Account route
     *
     * @return void
     */
    public function account()
    {
        //make sure rendar is login 
        if($this->BS_SES->bs_rendar_isActive)
        {
            
            if(is_null($this->request->getGet('logout')))
            {
               switch ($this->request->getGet('view')) {
                   case 'settings':
                       // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Settings';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'account';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/account/settings');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                       break;
                    case 'account':
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Account';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'account';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/account/view');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                        break;
                   
                   default:
                        // title bar
                        $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Account';

                        // Navbar user info
                        $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                        $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                        $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                        $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                        //sidebar
                        $sideBar['active'] = 'account';

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

                        /** [The view] */
                                        
                            echo view('clients/includes/header', $header);
                            echo view('clients/includes/navbar', $navBar);
                            echo view('clients/includes/sidebar', $sideBar);
                            echo view('clients/account/view');
                            echo view('clients/includes/footer', $footer);
                        /** [End] */
                       break;
               }
            }
            else
            {
                //logout user
                $this->BS_SES->destroy();

                return redirect()->to(base_url().'/dash/ng/rendar/board');

            }
             
        }
        else {
           return redirect()->to(base_url().'/dash/ng/rendar/board');
        }
    }

    /**
     * Notification route
     *
     * @return void
     */
    public function notification()
    {
        //make sure rendar is login 
        if($this->BS_SES->bs_rendar_isActive)
        {
            
            if(is_null($this->request->getGet('logout')))
            {
                // title bar
                $header['title'] = $this->BS_SES->bs_rendar_firstName . ' > Notification > Inbox';

                // Navbar user info
                $navBar['ID'] = $this->BS_SES->bs_rendar_publicID;
                $navBar['profileName'] = $this->BS_SES->bs_rendar_firstName;
                $navBar['gender'] = $this->BS_SES->bs_rendar_gender;
                $navBar['avatar'] = $this->BS_SES->bs_rendar_avatar;
                //sidebar
                $sideBar['active'] = '';

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

                /** [The view] */
                                
                    echo view('clients/includes/header', $header);
                    echo view('clients/includes/navbar', $navBar);
                    echo view('clients/includes/sidebar', $sideBar);
                    echo view('clients/notifications');
                    echo view('clients/includes/footer', $footer);
                /** [End] */
            }
            else
            {
                //logout user
                $this->BS_SES->destroy();

                return redirect()->to(base_url().'/dash/ng/rendar/board');

            }
             
        }
        else {
           return redirect()->to(base_url().'/dash/ng/rendar/board');
        }
    }

    /**
     * Update the last login status of the rendar.
     *
     * @return void
     */
    public function lastLogin(){

        if($this->request->isAJAX())
        {
            //make sure rendar is login 
            if ($this->BS_SES->bs_rendar_isActive)
            {
                $lastLogin = $this->BS_SES->bs_rendar_last_loggedin;
                //resovle the last login
                if(!(empty($lastLogin) && is_null($lastLogin)))
                {
                    $lastlog = Time::parse($lastLogin, 'Africa/Lagos', 'en_GB');
                    $humaniz = $lastlog->humanize();

                    //return the last login status
                    $this->Response->send_json_response($humaniz, true, false);
                }
                else
                {
                    //return and error
                    $this->Response->send_json_response('Invalid Last login date!', false, true);
                }
            }
            else
            {   //goto login
                redirect()->to(base_url().'/dash/ng/rendar/board');
            }
        }
        else
        {
            
            //response with a invlid request 
            $this->Response->send_json_response('Invalid Request Type', false, true);
        }
    }


}