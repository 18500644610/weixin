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
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
				<a href="{{ url('/') }}" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit delay">推迟报到类型</span>
							<input type="text" name="name" placeholder="请选择" id="delayed" disabled="disabled" class="delayinput"/>
						</div>
						<div class="checkshow">
							<h4 class="ta-center">推迟报到类型</h4>
							<p class="checked" id="compassionate">事假</p>
							<p class="checkedk">病假</p>
							<p class="checkedf">服兵役</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" name="name" id="name" class="delayinput" placeholder="请填写您的姓名" />
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" name="name" id="studycard" class="delayinput" placeholder="请填写您的考生号"/>
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" name="name" id="college" class="delayinput" placeholder="请填写您所在的学院" />
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" name="name" id="major" class="delayinput" placeholder="请填写您的专业" />
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" name="name" id="idcard" class="delayinput" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit delay">推迟报到时间</span>
									<input type="text" name="name" id="lasttime" class="delayinput" placeholder="请填选择" />
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea id="reason"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="step-btn">
					<a href="javascript:void(0)" id="tijiao" class="ta-center db">提交</a>
			</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>
<script type="text/javascript">
$("#tijiao").click(function(){
	   var name=$('#name').val();
	   var delayed=$('#delayed').val();
	   var studycard=$('#studycard').val();
	   var college=$('#college').val();
	   var major=$('#major').val();
	   var idcard=$('#idcard').val();
	   var lasttime=$('#lasttime').val();
	   var reason=$('#reason').val();
	   $.ajax({
		    type : "get",
		    url : "http://www.laravel.com/delay",
		    data:{name:name,delayed:delayed,studycard:studycard,college:college,major:major,idcard:idcard,lasttime:lasttime,reason:reason},
		    dataType : "jsonp",
		    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
		    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
		    success : function(json){
		    	//$("#span").html(json);
		    	location.href="{{url('/')}}";
		    },
		    error:function(){
		        alert('fail');
		    }
		  });
})
$('#compassionate').click(function(){
	var delayed=$(this).html();
$('#delayed').val(delayed);
})

$('.checkedk').click(function(){
	var delayed=$(this).html();
$('#delayed').val(delayed);
})

$('.checkedf').click(function(){
	var delayed=$(this).html();
$('#delayed').val(delayed);
})
</script>