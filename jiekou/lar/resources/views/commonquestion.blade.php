<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>常见问题</title>
	<body style="background: #eee;">
		<div class="header">
				<span>常见问题</span>
				<a href="ask.html" class="back"><i class="iconfont icon-left"></i></a>
			</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="answer-box">
			<ul class="answer-content" id="ul">

			</ul>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>
      <script type="text/javascript" src="js/rem.js"></script>
	</body>
</html>
<script type="text/javascript">
	$(function(){
		$.ajax({
			    type : "get",
			    url : "http://www.laravel.com/commonquestion",
			    dataType : "jsonp",
			    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
			    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
			    success : function(json){
			    	var str = '';
			    	$.each(json,function(name,value){
			    		str += '<a href="{{url('/uploaDate')}}?id='+value['id']+'"><li class="answer-list"><h3 class="list-tit">'+value['name']+'</h3><p class="list-txt">'+value['content']+'</p></li></a>';
			    	})
			    	$('#ul').html(str);
			    },
			    
			  });

	})
</script>
