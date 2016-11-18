<?php namespace App\Http\Controllers;
use App\Test;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class TestController extends Controller {

    /**
     * [index description]
     * @Author    Liujingwei
     * @DateTime  2016-10-09
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [description]
     */
	public function index()
	{
	   $article = new Test();

	  $article->title = 'ssssss'; 

	  $article->save();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	  $arr1=array('黑色','白色','红色');
	  $arr2=array('40','41','42');
	  $arr3=array('帆布鞋','运动鞋','皮鞋');
	  $arr4=array('阿迪达斯','耐克','乔丹');
	  $array=array();
	  foreach ($arr1 as $v) {
	  	foreach ($arr2 as $v1) {
	  		foreach ($arr3 as $v2) {
	  			foreach ($arr4 as $v3) {
	  	  $array[]=array('c'=>$v,'x'=>$v1,'z'=>$v2,'p'=>$v3);
	   }
	  	
	   }
	  	
	   }
	  }
	  //echo print_r($array,true);
	  DB::table('sui')->insert($array);
	  
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	  $url="http://sports.baidu.com/";
	  $file=file_get_contents($url);
	  $reg='/<div class=\"b-left\">([^<]+)<\/div>/';
	 //$reg='#<li class="bold-item">.*<a href=(.*)>(.*)</a></li>#';
	  preg_match_all($reg,$file,$mat);
	  //$s=iconv('gbk','utf-8',$mat)
	  var_dump($mat);
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
