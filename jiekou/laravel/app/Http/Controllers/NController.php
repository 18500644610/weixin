<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\CommonController;
use DB;
use Cookie;
use Session;
use Illuminate\Http\Request;

class NController extends CommonController {
  public function login(Request $request){

  	if($request->input('uname')){
  	  $uname=$request->input('uname');
  	  $pwd=$request->input('pwd');
  	  $res=DB::table('user1')->where('uname',$uname)->where('pwd',$pwd)->first();
  	  //var_dump($res);die;
  	  if($res){
  	  	Session::set('type',$res['r_id']);
  	  	Session::set('name',$res['uname']);
  	  	Session::set('id',$res['id']);
  		//echo 1;die;
  	  	if($res['r_id']==3){
  	  	$list=DB::table('shen')->where('name',$res['uname'])->get();
  	  	//var_dump($list);die;
  	  	$i=1;
  	  	foreach ($list as $key=>$v) {
  	  	  $list[$key]['s_id']=$i;
  	  	  //echo $v['s_id'];die;
  	  	  $i++;
  	  	}
  	  	//var_dump($list);die;
  	  	if(!$list){
  	  	  return view('n.shen');	
  	  	}	
  	  	}else if($res['r_id']==2){
  	  	 $list=DB::table('shen')->where('type','0')->get();
  	  	}else{
  	  	  $list=DB::table('shen')->where('type','1')->get();	
  	  	}
  	  	return view('n.list')->with('list',$list);
  	  }
  	}
  	return view('n.login');
  }
  public function index(){
  	return view('n.shen');
  }
  public function insert(Request $request){
   $data=$request->all();
   unset($data['_token']);
   $data['name']=Session::get('name');
   $data['time']=time();
   $data['time1']=strtotime($data['time1']);
   $data['time2']=strtotime($data['time2']);
   DB::table('shen')->insert($data);
   $list=DB::table('shen')->where('name',Session::get('name'))->get();
   $i=1;
  	  	foreach ($list as $key=>$v) {
  	  	  $list[$key]['s_id']=$i;
  	  	  //echo $v['s_id'];die;
  	  	  $i++;
  	  	}
   return view('n.list')->with('list',$list);
  }
  public function ton(Request $request){
  	$id=$request->input('id');
  	DB::table('shen')->where('s_id',$id)->update(['type1'=>'1','type'=>'1']);
    $list=DB::table('shen')->where('type','0')->get();
    return view('n.list')->with('list',$list);
  }
  public function buton(Request $request){
  	$id=$request->input('id');
    $list=DB::table('shen')->where('type','0')->get();
    return view('n.list')->with('list',$list);
  }
  public function lton(Request $request){
  	$id=$request->input('id');
  	DB::table('shen')->where('s_id',$id)->update(['type2'=>'1','type'=>'2']);
    $list=DB::table('shen')->where('type','1')->get();
    //var_dump($list);die;
    return view('n.list')->with('list',$list);
  }
  public function lbuton(Request $request){
  	$id=$request->input('id');
    $list=DB::table('shen')->where('type','1')->get();
    return view('n.list')->with('list',$list);
  }
}	