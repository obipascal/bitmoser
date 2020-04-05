<?php
namespace App\Models\FileUpload\Avatar;

use CodeIgniter\Model;

class WriteClientAvatar_M extends Model 
{
    protected $table = 'bs_clients_avatars';
    protected $primaryKey = 'avatar_id';
    protected $allowedFields = [
        'avatar_name',
        'avatar_size',
        'avatar_mimetype',
        'avatar_extension',
        'avatar_uploader_id',
        'avatar_post_upload',
    ];
    protected $useTimestamps = true;
    protected $returnType = 'App\Entities\FileUpload\ClientAvatar_E';

    
}
