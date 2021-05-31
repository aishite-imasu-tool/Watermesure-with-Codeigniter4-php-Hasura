<?php

namespace App\Controllers;

use Exception;

class CsvTest extends BaseController
{

    public function index()
    {
        $param = [];
        return view('CsvTest/index', $param);
    }
}