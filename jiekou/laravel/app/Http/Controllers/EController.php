<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use PHPExcel;
use Illuminate\Http\Request;

class EController extends Controller {
  public function index(){
  	return view('e.login');
  }
  /**
   * [login description]
   * @Author    Liujingwei
   * @DateTime  2016-10-27
   * @copyright [copyright]
   * @license   [license]
   * @version   [version]
   * @param     Request     $request [description]
   * @return    [type]               [description]
   * 登录
   */
  public function login(){
    
  }
  
  /**
   * [jk description]
   * @Author    Liujingwei
   * @DateTime  2016-10-27
   * @copyright [copyright]
   * @license   [license]
   * @version   [version]
   * @return    [type]      [description]
   * 登录接口
   */
  public function jk(Request $request){
   $token=$request->input('t');
    //token 解密
    $privateKeyFilePath = 'key/rsa_private_key.pem';
	 $privateKey = openssl_pkey_get_private(file_get_contents($privateKeyFilePath));     
     $encryptData='';
	 if (openssl_private_decrypt($token, $encryptData, $privateKey)) {    
		   $s=rawurldecode($encryptData);
	}
   $people=explode(',',$s);
   $res=DB::table('admin')->where('uname',$people['0'])->where('pwd',$people[1])->get();
   if($res){
   	return json_encode($res);
   }else{ 
   	return 0;
   }
  }
}	