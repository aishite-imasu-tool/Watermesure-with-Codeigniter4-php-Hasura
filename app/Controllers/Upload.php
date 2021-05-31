<?php

namespace App\Controllers;

use Exception;

class Upload extends BaseController
{
    protected $mRequest;

    public function __construct()
    {
        $this->mRequest = service("request");
    }

    public function index()
    {
        $session = session();
        if($session->get('login_id')) {
            $param = [];
            return view('Upload/index', $param);
        } else {
            $param = ['api' => '/watermeasure/public/top'];
            return view('Login/index', $param);
        }
    }

    public function addUsersInFile()
    {
        $fileName = $this->mRequest->getVar("data");
        if(isset($fileName)) {
            $paramsUsers = json_decode($fileName, true);
            for($i=0; $i<=count($paramsUsers); $i++) {
                $this->UploadModel->addUsersInFileUpload($paramsUsers[$i]);
            }
            
        }
    }

}