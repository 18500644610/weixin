<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use DB;
/**
* 
*/
header("content-type:text/html;charset=utf8");
class CommonController extends Controller
{
	 public function __construct()
	{
	   //parent::__construct();
	   if(!Session::get('id')){
       
	   }
	   if($this->ss()=='false'){
        echo '没有权限';die;
       }
	}
	public function ss(){
	  $id=Session::get('id');
	  $res=DB::select("SELECT node.controller,node.action FROM user1,r_node,node WHERE user1.id=$id and user1.r_id=r_node.r_id and r_node.n_id=node.n_id");
	  $action = \Route::current()->getActionName();
	   list($class, $method) = explode('@', $action);
	    $class = substr(strrchr($class,'\\'),1);

	  $data=['controller' => $class, 'method' => $method];
	  //var_dump($data);die;
	  foreach ($res as $v) {
	  	if($data['controller']==$v['controller'] && $data['method']==$v['action']){
	  	  echo true;
	  	}else{
	  	  echo false;
	  	}
	  }
	}
}