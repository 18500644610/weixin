<?php namespace App\Http\Controllers;

use App\Http\Requests;
//use App\Http\Response;
use App\Http\Controllers\Open;
use App\Http\Controllers\Controller;
use DB;
use Cookie;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	   if($request->input('uname') && $request->input('pwd')){
	   	$uname=$request->input('uname');
	   	$pwd=$request->input('pwd');
	     $res=DB::table('user1')->where('uname',$uname)->where('pwd',$pwd)->where('type',0)->get();
	     if($res){
	     	return view('upload')->with('id',$res[0]['id']);
	     }
	   }
	   return view('login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function qq()
	{
	  $open=new Open();
	  $code=$_GET['code'];
	  $q=$open->me($code);
	  $data['uname']=$q['name'];
	  $data['pwd']=$q['uniq'];
	   	$res=DB::table('user1')->insert($data);
	   return view('login1');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function upload(Request $request)
	{
	  if($request->input('pwd')){              
	  $pwd=$request->input('pwd');
	  $id=$request->input('id');
	   	$res=DB::table('user1')->where('id',$id)->increment('pwd',$pwd);
	   	$res=DB::table('user1')->where('id',$id)->increment('type',1);
	  return view('sui');
	}else{
		return view('upload');
	}	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request)
	{
	  if($request->input('uname')){
	  $uname=$request->input('uname');
	  $pwd=$request->input('pwd');
	  $data=array();
	  $data['uname']=$uname;
	  $data['pwd']=$pwd;
	   	$res=DB::table('user1')->insert($data);
	  return view('login');
	}else{
		return view('s');
	}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
	  return view('upload');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
	  // $response = Response::make('Hello World');
   //    $response->withCookie(Cookie::make('name', 'value', $minutes));
      Cookie::queue('name', 'hello world');
      echo $value = Cookie::get('name');;  
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
	  
	}

}
