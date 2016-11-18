<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class LiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	   // $res=DB::table('book')->get();
	   // var_dump($res);die;
	   return view('li.login');
	}
    
	/**
	 * Show the form for creating a new resource. 
	 *
	 * @return Response
	 */
	public function login(Request $request)
	{
		$n=$request->input('uname');
		//echo $n;die;
		$privateKeyFilePath = 'key/rsa_private_key.pem';
		//$ss=file_get_contents($privateKeyFilePath);
		//var_dump($ss);die;
		$privateKey = openssl_pkey_get_private(file_get_contents($privateKeyFilePath));      
		$encryptData='';
		if (openssl_private_decrypt($n, $encryptData, $privateKey)) {    
		   $s=rawurldecode($encryptData);
		}
		$sn=explode(',',$s); 
		//var_dump($sn);die;
	  	$uname=$sn['0'];
	  	$pwd=md5($sn['1']);
        $res=DB::table('user2')->where('username',$uname)->where('pwd',$pwd)->first();
        return $res;
	}
	public function shuzu(){
	  $arr=DB::table('book')->get();
	  return $arr;
	}
	public function log(){
	$res=DB::table('del')->get();
	 $p=array();
	 foreach($res as $v){
	  $body=json_decode($v['body'],true);
	  $p[]=array('id'=>$v['id'],'uname'=>$v['uname'],'time1'=>date('Y-m-d H:i:s',$v['time1']),'body'=>$body);
	 }
	 return json_encode($p);
	}
	public function huan(){
     $id=$_GET['id'];
     $res=DB::table('del')->where('id',$id)->get();
     $re=json_decode($res['0']['body'],true);
     $data=array();
     $data['b_name']=$re['0']['b_name'];
     $data['introduction']=$re['0']['introduction'];
     $data['author']=$re['0']['author'];
     $data['price']=$re['0']['price'];
     DB::table('book')->insert($data);
     DB::table('del')->where('id',$id)->delete();
     return $id;
	}
	/**
	 * [del description]
	 * @Author    Liujingwei
	 * @DateTime  2016-10-11
	 * @copyright [copyright]
	 * @license   [license]
	 * @version   [version]  
	 * @return    [type]      [description]
	 */
	public function del(){
	 $id=$_GET['id'];
	 $uname=$_GET['uname'];
	 $data=array();
     $time=time();
	 // $uname=$_COOKIE['uname'];
     $arr=DB::table('book')->where('b_id',$id)->get();
	 $arr=json_encode($arr);
   
	 // //var_dump($arr);die;
	 // $del=new Del;
	 // $del->uname=$uname;
	 $data['time1']=$time;
	 $data['uname']=$uname;
	 $data['body']=$arr;
	 DB::table('del')->insert($data);
	 DB::table('book')->where('b_id',$id)->delete();
	 return $id;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}