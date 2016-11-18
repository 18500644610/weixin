<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SelfhelpController extends Controller
{
    /**
     * 自助入学
     * @return [type] [description]
     */
    public function index()
    {
        return view('entrance'); 
    }
    /**
     * 用户个人中心
     * @return [type] [description]
     */
    public function usercenter()
    {
        return view('data/ask');
    }
    /**
     * 到校路线
     * @return [type] [description]
     */
    public function route()
    {
        return view('route');
    }

    public function json($data)
    {
        return json_decode($data,ture);
    }
}