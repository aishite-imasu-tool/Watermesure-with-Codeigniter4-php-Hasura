<?php

namespace App\Controllers;

use Exception;

class UploadCompleted extends BaseController
{

    public function index()
    {
        $session = session();
        if($session->get('login_id')) {
            $param = [];
            return view('UploadCompleted/index', $param);
        } else {
            $param = ['api' => '/watermeasure/public/top'];
            return view('Login/index', $param);
        }
    }
}