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

    protected function getLocalVars($vars)
    {
        $ignore = ['GLOBALS', '_SERVER', '_GET', '_POST', '_FILES', '_REQUEST', '_SESSION', '_ENV', '_COOKIE', 'php_errormsg', 'HTTP_RAW_POST_DATA', 'http_response_header', 'argc', 'argv'];

        foreach ($ignore as $name) {
            if (isset($vars[$name])) {
                unset($vars[$name]);
            }
        }

        return $vars;
    }

    protected function view($path, $vars)
    {
        return view($path, $this->getLocalVars($vars))
    }
}
