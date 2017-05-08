<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends BaseController
{
    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return 'dashboard';
    }
}
