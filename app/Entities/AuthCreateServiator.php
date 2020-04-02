<?php
namespace App\Entities;

use CodeIgniter\Entity;

/**
 * Rendere Entity class.
 */
class AuthCreateServiator extends Entity 
{
    
    public function setPassword(string $pswd)
    {
        $this->attributes['client_pass_key']    = password_hash($pswd, PASSWORD_DEFAULT);

    return $this;
    }
    
}
