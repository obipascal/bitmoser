<?php

namespace App\Controllers\Clients\API;

use App\Controllers\BaseController;

class FileUploader extends BaseController
{
    /**Write to client avatar model */
    protected $WriteClientFileModel;
    /** Write client avatar model entity */
    protected $ClientFileEntity;
    /** Read client avatar model */
    protected $ReadClientFileModel;
    /** Write to user avatar model */
    protected $WriteUserFileModel;
    /** Read user avatar model */
    protected $ReadUserFileModel;
    /**Write user avatar model entity */
    protected $UserFileEntity;
    /** Session instance */
    protected $Session;
    /** Response instance */
    protected $Response;
    /** BS Assistant */
    protected $PA;
    
    public function __construct()
    {   /** Instanciate class properties */

        /**Start:  Client instance */
            $this->ReadClientFileModel = new \App\Models\FileUpload\Avatar\ReadClientAvatar_M();
            //--
            $this->WriteClientFileModel = new  \App\Models\FileUpload\Avatar\WriteClientAvatar_M();
            //--
            $this->ClientFileEntity = new \App\Entities\FileUpload\ClientAvatar_E();
        /**End: Client instance  */
        /**Start: Others */
            //--
            $this->Session  = \Config\Services::session();
            $this->Response = \Config\Services::bs_http_response();
            $this->PA = \Config\Services::assistant();
            //--Helpers
            helper('filesystem');
        /**End: Others  */
        
        /**Start: User Instance */
            //TODO: instanciate user instances

        /**End: User Instance */
    }


    public function uploadClientAvatar()
    {
        //check that the user is active in session 
        if($this->Session->bs_rendar_isActive)
        {
            //user is active in session
            
            // the get user id
            $clientId = $this->Session->bs_rendar_publicID;

            $file = $this->request->getFile('qqfile');

            //new file name 
            $newName = $file->getRandomName();

            //allowed extentions
            $allowedExt = ['jpg', 'jpeg', 'png'];

            //extention
            $ext = $file->guessExtension();

            //upload path
            $uploadPath = 'frontendUploads/avatars/clients';

            //make sure the file 

            if(array_keys($allowedExt, $ext))
            {
                //procceed to save file

                //move the file and store the file information to database
               if($file->isValid() && !$file->hasMoved())
               {
                   

                    //if the file has been moved proccess the file data and store it's information to database
                    if(!$file->hasMoved())
                    {
                        
                        //make sure client has not uploaded file to server b4. If has then delete the file and update column
                        $hasUploadB4 = $this->ReadClientFileModel->clientHasUploadedB4($clientId);
                        if(!(empty($hasUploadB4) && is_null($hasUploadB4)) && is_string($hasUploadB4))
                        {
                            //delete the file 
                            
                            if(unlink($uploadPath.'/'.$hasUploadB4))
                            {
                                //move file
                                $file->move($uploadPath, $newName);

                                //instanciate the file reader
                                $uploadfile = new \CodeIgniter\Files\File($uploadPath.'/'.$newName);
                                //initialize the database columns
                                $updateRecord['avatar_name'] = $uploadfile->getFilename();
                                $updateRecord['avatar_size'] = $uploadfile->getSizeByUnit('mb');
                                $updateRecord['avatar_extension'] = $uploadfile->getExtension();
                                $updateRecord['avatar_mimetype'] = $uploadfile->getMimeType();
                                $updateRecord['avatar_post_upload'] = $this->PA->bs_parseDateTime();
                                

                                //update the files columns using the read model
                                
                                $this->ReadClientFileModel->update($clientId, $updateRecord);

                                //write the uploaded file to session 
                                $this->Session->set('bs_rendar_avatar', $newName);
                                //Return succes and file link to be previewed
                                $fp = base_url().'/frontendUploads/avatars/clients/';
                                $this->Response->send_json_uploadfile_response($fp.$newName, true, false, false, true, 'reload');
                            }
                            else
                            {
                                log_message('critical', 'Unable to delete client previous file ClientID: '.$clientId);
                                
                                $this->Response->send_json_uploadfile_response('Unable to update file. If this error parses please contact '. mailto('support@bitmoservice.com', 'Support'), false, true,true);
                            }
                        }
                        else
                        {
                            //move file
                            $file->move($uploadPath, $newName);
                            //instanciate the file reader
                            $uploadfile = new \CodeIgniter\Files\File($uploadPath.'/'.$newName);
                            //initialize the database columns
                            
                            $fileDB['avatar_name'] = $uploadfile->getFilename();
                            $fileDB['avatar_size'] = $uploadfile->getSizeByUnit('mb');
                            $fileDB['avatar_extension'] = $uploadfile->getExtension();
                            $fileDB['avatar_mimetype'] = $uploadfile->getMimeType();
                            $fileDB['avatar_post_upload'] = $this->PA->bs_parseDateTime();
                            $fileDB['avatar_uploader_id'] = $clientId;
                            //update the files c    olumn
                            $this->ClientFileEntity->fill($fileDB);
                            $this->WriteClientFileModel->save($this->ClientFileEntity);

                            //write the uploaded file to session 
                            $this->Session->set('bs_rendar_avatar', $fileDB['avatar_name']);
                            //return success
                            $fp = base_url().'/frontendUploads/avatars/clients/';
                            $this->Response->send_json_uploadfile_response($fp.$newName, true, false, false, true, 'reload');
                        }
                    }
                    else
                    {
                        //unable to move file 
                        $this->Response->send_json_uploadfile_response('Unable to upload file', false, true);
                    }
               }
               else
               {
                   //log error to log file and return an error
                   $clientErrorInfo = [
                    'ClientID: '.$clientId.'',

                   ];

                   log_message('error', 'Invalid file upload operation from client. ClientInfo:= '.implode(',', $clientErrorInfo));

                   $this->Response->send_json_uploadfile_response('Invalid file uploaded', false, true, false);
               }

                
            }
            else
            {
                //return an error
                $this->Response->send_json_uploadfile_response('Invalid File extension.', false, true, false);
            }

        }
        else
        {
            //prevent the file upload and return a error messation
            $this->Response->send_json_uploadfile_response('Session has expired.', false, true, false, true, 'reload');
        }
    }
}
