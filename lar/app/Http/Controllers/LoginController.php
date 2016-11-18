<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * 登录
     * @return [type] [description]
     */
    public function login()
    {
        return view('index/login');
    }
}