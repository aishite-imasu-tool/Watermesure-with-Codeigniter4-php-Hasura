<?php

namespace App\Controllers;

use Exception;

class Test extends BaseController
{

    public function index()
    {
        $param = [];
        return view('Test/index', $param);
    }
}
