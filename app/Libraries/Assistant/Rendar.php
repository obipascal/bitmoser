<?php
namespace App\Libraries\Assistant;

class Rendar  
{
    /**Session instance */
    protected $BS_SESSION;

    public function __construct()
    {
        $this->BS_SESSION = \Config\Services::session();
    }

    /**
     * Retrieve the active user details
     *
     * @return object/bool user details/false if user is not logged in
     */
    public function getUser()
    {   //is user loggedin
        if($this->BS_SESSION->bs_rendar_is_active)
        {   //active user to be returned
            $activeUser = [];
            //loop to retrieve the session data
            foreach ($_SESSION as $key => $value) {
                if(isset($key))
                {
                    $activeUser[$key] = $value;
                }
            }

            //return the session data as and object
            return json_decode(json_encode($activeUser));


        }
        else
        {
            return false;
        }
    }
}
