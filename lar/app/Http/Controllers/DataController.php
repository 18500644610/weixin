<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    /**
     * 入学须知
     * @return [type] [description]
     */
    public function mustknow()
    {
        return view('data/mustknow');
    }
    /**
     * 通知报告
     * @return [type] [description]
     */
    public function notice()
    {
        return view('data/notice');
    }
    /**
     * 资料下载
     * @return [type] [description]
     */
    public function data()
    {
        return view('data/data');
    }
    /**
     * 咨询报告
     * @return [type] [description]
     */
    public function ask()
    {
        return view('data/ask');
    }
    /**
     * 我的提问 详情
     * @return [type] [description]
     */
    public function myuploaDate()
    {
      return view('myuploaDate');
    }
    /**
     * 常见问题 详情
     * @return [type] [description]
     */
    public function uploaDate()
    {
      return view('uploaDate');
    }
}