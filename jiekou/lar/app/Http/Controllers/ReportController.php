<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    /**
     * 自动报道
     * @return [type] [description]
     */
    public function selfreport()
    {
        return view('report/self-report');
    }
    /**
     * 绿色通道
     * @return [type] [description]
     */
    public function green()
    {
        return view('report/green');
    }
    /**
     * 抵校等级
     * @return [type] [description]
     */
    public function arrive()
    {
        return view('report/arrive');
    }
    /**
     * 推迟报道
     * @return [type] [description]
     */
    public function delay()
    {
        return view('report/delay');
    }    
}