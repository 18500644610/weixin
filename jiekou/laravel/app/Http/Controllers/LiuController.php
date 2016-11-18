<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Illuminate\Http\Request;

class LiuController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		if($request->input('uname')){
	   	$name=$request->input('uname');
	    $pwd=$request->input('pwd');
	    //登录表单验证
		
	   	$res=Db::table('user1')->where('uname',$name)->where('pwd',$pwd)->get();
	   	if($res){
         return redirect('/show1');
	   	}
	    }
	  return view('index');
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function add(Request $request)
	{
	  // $name=$request->input('uname');
	  // $pwd=$request->input('pwd');
	  if($request->hasFile('myfile')){
	  	$validator = Validator::make($request->all(), [
		  'uname' => 'required|alpha_num',  //只允许数字和字母
		]);
		//表单验证失败提示
		if ($validator->fails()) {
		  echo '重新输入';die;
		}
        $file = $request->file('myfile');
		$clientName = $file -> getClientOriginalName();
		$tmpName = $file ->getFileName(); // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.
		$realPath = $file -> getRealPath();  //这个表示的是缓存在tmp文件夹下的文件的绝对路径
		$entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
		//$mimeTye = file -> getMimeType('image/jpeg');//大家对mimeType应该不陌生了. 我得到的结果是 image/jpeg.
		$newName = md5(date('ymdhis').$clientName);
		$path = $file -> move(base_path().'/public/uploads',$newName);
		$data['file']='./uploads/'.$newName;
		//$data['name']=$name;
		DB::table('photo')->insert($data);
		$res=DB::table('photo')->get();
		return view('photo.list')->with('res',$res);
	  }  
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if($request->input('sname')){
	   	$sname=$request->input('sname');
	    $price=$request->input('price');
	   	$data=array();
	   	$count=count($sname);
	   	for($i=0;$i<$count;$i++){
        $data[$i]['sname']=$sname[$i];
        $data[$i]['price']=$price[$i];
	   	}
	   	$res=DB::table('shop')->insert($data);
	   	if($res){
         return redirect('/show1');
	   	}
	    }
	  return view('insert');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
	  // $posts = DB::table('shop')->simplePaginate(3);
   //  return view('show',['posts'=>$posts]);
		$shop=DB::table('shop')->paginate(3);
	  return view('show')->with('shop',$shop);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function del(Request $request)
	{
	   $id=$request->input('id');
	   $res=DB::table('shop')->where('id',$id)->delete();
	   if($res){
	   	return $id;
	   }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function upload(Request $request)
	{
	  $price=$request->input('val');
	  $id=$request->input('id');
	  $res=DB::table('shop')->increment('price',$price);
	  return 1;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function dd(Request $request)
	{
	  $id=$request->input('id');
	  $id1=explode(',',$id);
	  foreach ($id1 as $value) {
	   	DB::table('shop')->where('id',$value)->delete();
	  }
	   return json_encode($id1); 
	}

}
