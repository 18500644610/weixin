<?php

namespace App\Http\Controllers;

use App\User;
use Config;
use App\Http\Controllers\Controller;

class AdviceController extends Controller
{
   /**
    * 常见问题
    */
   public function commonquestion(){
     return view('commonquestion');
   }
   /**
    * 咨询解答
    */
   public function answer()
   {
     return  view('answer');
   }
   /**
    * 我的提问
    */
   public function myanswer()
   {
      return view('myanswer');
   }
   /**
    * 我要提问
    */
   public function tiwen()
   {
      return view('tiwen');
   }
   /**
    * 修改密码
    */
   public function change()
   {
    return view('changepsw');
   }
}