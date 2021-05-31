<?php

namespace App\Controllers;

use Exception;

class Login extends BaseController
{
    protected $mRequest;

    public function __construct()
    {
        $this->mRequest = service("request");
    }

    public function index()
    {
        $param = ['api' => '/watermeasure/public/top'];
        return view('Login/index', $param);
    }

    public function checklogin()
    {
        $login_id = $this->mRequest->getVar("login_id");
        $password = $this->mRequest->getVar("password");

        $params = array( 'login_id' => $login_id,
                        'password' => $password,
                    );
        if(isset($login_id) && isset($password))
        {
            $result = $this->LoginModel->checkLogin($params);
            if(isset($result)) {
                $this->session->set($result);
                $param = [];
                return view('Login/index', $param);
            }
        }

    }

    public function logout()
    {
		$user = $this->session->get('login_id');
        if (isset($user)) {
            session_unset();
		}
        $param = ['api' => '/watermeasure/public/top'];
        return view('Login/index', $param);
    }
}
