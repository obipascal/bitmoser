<?php
namespace App\Models\FileUpload\Avatar;

use CodeIgniter\Model;

class ReadClientAvatar_M extends Model
{
    protected $table = 'bs_clients_avatars';
    protected $primaryKey = 'avatar_uploader_id';
    protected $allowedFields = [
        'avatar_name',
        'avatar_size',
        'avatar_mimetype',
        'avatar_extension',
        'avatar_uploader_id',
        'avatar_post_upload',
    ];
    protected $useTimestamps = true;
    protected $returnType = 'object';

    /** check that the client attempting to upload file does has and existing file on server
     * so to delete the file and update the uploaded one 
      */

    public function clientHasUploadedB4(string $clientId)
    {
        if(!empty($clientId))
        {
            $data = $this->find($clientId);

            if(!(empty($data) && is_null($data)))
            {
                return json_decode(json_encode($data))->avatar_name;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return null;
        }
    }
}


