<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>我的提问</title>

		<body>
			<div class="header">
				<span>我的提问</span>
				<a href="{{ url('/ask') }}" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<div class="myanswer-box">
						<ul class="myanswer" id="ul">
							<!-- <a href="#">
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li>
							</a> -->
						</ul>
					</div>
				</div>
			</div>

			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>

</html>
<!-- <script src="js/jquery-1.5.2.min.js"></script> -->
<script type="text/javascript" src="js/ajax.js"></script>	
<script>
$(function(){
$.ajax({
	    type : "get",
	    url :"http://www.laravel.com/myanswer",
	    dataType : "jsonp",
	    cache:true,
	    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
	    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
	    success : function(json){
	    	var str = '';
	    	$.each(json,function(name,value){
	    		str += '<a href="{{ url('/myuploaDate')}}?id='+value['id']+'"><li><span class="route-icon"><i class="iconfont icon-zixun"></i></span><span class="route-word">'+value['tiwen']+'</span><span class="goin">'+value['time']+'</span></li></a>';
	    	})
	    	$('#ul').html(str);
	    },
	    error:function(){
	        alert('fail');
	    }
	  });

})
</script>