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
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="{{ url('/ask')}}" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea id="tiwen" maxlength="100"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
				<button id="tijiao">提交</button>
			</div>
			</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>
</html>
<script>
	$('#tijiao').click(function(){
		var tiwen = $('#tiwen').val();
		//var time = new Date();
		//alert(time)
		$.ajax({
			    type : "get",
			    url : "http://www.laravel.com/tiwen",
			    dataType : "jsonp",
			    data:{tiwen:tiwen},
			    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
			    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
			    success : function(json){
			    	 location.href="{{url('/ask')}}";
			    },
			  });
	})
</script>