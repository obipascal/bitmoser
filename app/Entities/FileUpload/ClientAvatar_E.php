<?php

namespace App\Entities\FileUpload;
/** imports */
use CodeIgniter\Entity;
class ClientAvatar_E extends Entity 
{
    
    public function setAvatarUploaderId(string $id)
    {
        $this->attributes['avatar_uploader_id'] = $id;
        return $this;
    }
}
