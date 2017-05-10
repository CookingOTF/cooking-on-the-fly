<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
	protected $loginPage = 'auth.login';
	protected $registerPage = 'auth.register';
	protected $authenticatePage = 'auth.authenticate';
}
