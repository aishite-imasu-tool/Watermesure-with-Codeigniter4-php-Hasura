<?php

namespace App\Controllers;

use Exception;

class Chart extends BaseController
{

    public function index()
    {
        $param = [];
        return view('Chart/index', $param);
    }
}
