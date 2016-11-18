<?php

namespace App\Http\Controllers;

use App\User;
use Config;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   /**
    * 首页展示
    * @return [type] [description]
    */
    public function index()
    {
        // $value = Config::get('url');
        // $url=$value['url'];
        //轮播图片 调用接口
        $images_url = "http://www.laravel.com/images?token=f9dd740972e3d2a3e4604ba19efd268e&format=json";
        //echo $images_url;die;
        $images_str = file_get_contents($images_url);
        //json数据转换为数组
        $images_arr = json_decode($images_str,true);
        //取出图片数组
        $image=$images_arr['data'];
        //调用新闻展示 接口
        $news_url = "http://www.laravel.com/news?token=f9dd740972e3d2a3e4604ba19efd268e&format=json";
        $news_str = file_get_contents($news_url);
        //json数据转换为数组
        $news_arr = json_decode($news_str,true);
        //取出图片数组
        $news=$news_arr['data'];
        //首页
        return view('index/index',['images_arr'=>$image,'news_arr'=>$news]);
        // return view('index/index');
    }
    /**
     * 用户个人中心
     */
    public function usercenter()
    {
        return view('user/user-center');
    }
    /**
     * 个人信息
     */
    public function userinfo()
    {
        return view('user/user-info');
    }
    /**
     * 宿舍预定
     */
    public function dorm()
    {
        return view('dorm-book');
    }
    /**
     * 报道单
     * @return [type] [description]
     */
    public function reportcard()
    {
        return view('reportcard');
    }
    public function upload()
    {
        if(!file_exists($_FILES['upload_file']['name'])){ 
            move_uploaded_file($_FILES['upload_file']['tmp_name'],iconv('utf-8','gb2312',$_FILES['upload_file']['name']));
         //输出图片文件<img>标签
            echo "<textarea><img src='{$_FILES['upload_file']['name']}'/></textarea>";
        }
    }
    /**
     * 登录
     * @return [type] [description]
     */
    public function login()
    {
       return view('index/login');
    }
}