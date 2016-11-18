<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use DB;
use PHPExcel;
use Illuminate\Http\Request;

class FirstController extends Controller {
  /**
   * 登录
   */
  public function login(Request $request){
    //接值 
        
        $callback = $_GET['callback'];
        $name = $request->get('username');
        $pwd = $request->get('pwd');
        $sign = $request->get('sign');
        $str = "pwd=".$pwd."&username=".$name;
        $sign1 = md5($str);
        if($sign == $sign1 ){
             
             $arr = DB::table('users')->where('username',$name)->where('pwd',$pwd)->first();
            if($arr){
                $token='';
                $token = $name."wang";
                $arr['token'] = $token;
                //var_dump($arr);
                return $callback.'('.json_encode($arr).')';
            }else{
                return false;
            }
        }else{
            return false;
        }
  }
  /**
   * 修改密码
   */
   public function change(Request $request)
    {
        $old = $request->get('old');
        $pwd = $request->get('password');
        $uid = $request->get('id');
        $callback = $_GET['callback'];
        if($callback) {
             $same = DB::table('users')->where('uid',$uid)->first();
            if($same){
                $result = DB::table('users')->where('uid',$uid)->update(['pwd'=>$pwd]);
                return  $callback.'('.json_encode($result).')';
            }else{
                $result=array('msg'=>0,'result'=>"旧密码不对");
                return  $callback.'('.json_encode($result).')';
            }
        }

    }
  /**
   * 轮播图
   */
  public function images(Request $request){
    $token=$request->get('token');
    $format=$request->get('format');
    //验证token
    if($token=='f9dd740972e3d2a3e4604ba19efd268e'){
     //查询数据库
     $res=DB::table('images')->get();
     $str=Response::show('200','成功',$res,$format);
     return json_encode($str);die;
    }else{
      $str=Response::show('400','token:error');
     return $str;die;
    }
  }
  /**
   * 新闻
   */
  public function news(Request $request){
    $token=$request->get('token');
    $format=$request->get('format');
    //验证token
    if($token=='f9dd740972e3d2a3e4604ba19efd268e'){
     //查询数据库
     $res=DB::table('news')->get();
     $str=Response::show('200','成功',$res,$format);
     return $str;die;
    }
  }
  /**
   * 绿色通道
   */
  public function green(Request $request){
    $data=$request->input();
    $callback = $_GET['callback'];
    echo Response::ins('green',$data,$callback);
  }
  /**
   * 个人信息
   */
  public function selfmessage(Request $request){
   $data=$request->input();
    $callback = $_GET['callback'];
    // print_r($callback);die;
    echo $callback.'('.Response::ins('userinfo',$data,$callback).')';
  }
  /**
   * 宿舍预定
   */
  public function drom(Request $request){
   $data=$request->input();
    $callback = $_GET['callback'];
    echo $callback.'('.Response::ins('dormbook',$data,$callback).')';
  }
  /**
   * 抵校登记
   */
  public function arrive(Request $request){
   $data=$request->input();
    $callback = $_GET['callback'];
    echo Response::ins('arrive',$data,$callback);
  }
  /**
   * 推迟报到
   */
  public function delay(Request $request){
    $data=$request->input();
    $callback = $_GET['callback'];
    echo Response::ins('delay',$data,$callback);
  }
  /**
   * 我的提问
   */
  public function myanswer(Request $request){
    $callback = $_GET['callback'];
        $table = 'tiwen';
        echo Response::tableselect($table,$callback);
  }
  /**
   * 我的提问 详情页面 查询
   */
  public function myuploaDate(Request $request){
   $id = $request->get('id');
    $id = array('id'=>$id);
    $callback = $_GET['callback'];
    $table = 'tiwen';
    echo Response::tablegetid($id,$table,$callback);
  }
  /**
   * 常见问题 查询
   */
  public function commonquestion()
    {
        $callback = $_GET['callback'];
        $table = 'question';
        echo Response::tableselect($table,$callback);
    }
  /**
   * 常见问题 详情页面 查询
   */
  public function uploaDate(Request $request){
     $id = $request->get('id');
        $id = array('id'=>$id);
        $callback = $_GET['callback'];
        $table = 'question';
        echo Response::tablegetid($id,$table,$callback);
  }
  /**
   * 我要提问
   */
  public function tiwen(Request $request)
    {
        $time = date('Y-m-d H:i:s',time());
        $data = $request->input();
        $data['time'] = $time;
        $callback = $_GET['callback'];
        $table ='tiwen';
        echo Response::ins($table,$data,$callback);
    }
}
