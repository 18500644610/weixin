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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
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
							<span class="book-tit">申请类型</span>
							<input type="text" name="name" id="application" placeholder="请选择您的申请类型" disabled="disabled" />
						</div>
						<div class="checkshow">
							<h4 class="ta-center">申请类型</h4>
							<p class="checked" id="huan">缓交学费</p>
							<p class="checkeddai">助学贷款</p>
							<p class="checkedjiao">免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="name" id="name" placeholder="请输入姓名" />
									<div class="sex">
										<label class="sex-check">男</label>
										<label class="sex-check1">女</label>
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="name" id="minzu" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="name" id="phone" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="name" id="year" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="name" id="cart" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="name" id="tel" placeholder="请填写您的手机联系号码" />
								</li>
								<!-- <li>
									<div class="show-btn">
										<span class="book-tit">户籍类型</span>
										<input type="text" name="name" id="hu" placeholder="请选择您的户籍类型" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<h4 class="ta-center">户籍类型</h4>
										<p class="checked">是</p>
										<p>否</p>
										<span class="close">关闭</span>
									</div>
								</li> -->
								<li>
									<div class="show-btn">
										<span class="book-tit">政治面貌</span>
										<input type="text" name="name" id="politics" placeholder="请选择您的政治面貌" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<p class="checked" id="q">群众</p>
										<p class="checkedt">团员</p>
										<p class="checkedd">党员</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="name" id="xiangxi" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" name="name" id="family1" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" id="guan1" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" id="work1" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" id="money1" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" name="name" id="family2" placeholder="请填写家庭成员2的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" id="guan2" placeholder="请填写您与家庭成员2的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" id="work2" placeholder="请填写家庭成员2的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" id="money2" placeholder="请填写家庭成员2的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员3</span>
									<input type="text" name="name" id="family3" placeholder="请填写家庭成员3的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" id="guan3" placeholder="请填写您与家庭成员3的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" id="work3" placeholder="请填写家庭成员3的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" id="money3" placeholder="请填写家庭成员3的年收入情况" class="house-input" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
				<span style="display:block;text-align:center;" id="span"></span>
					<a href="javascript:void(0)" class="ta-center db" id="submit">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>

</html>
<script src="js/jquery-1.5.2.min.js"></script>
<script>
$(function(){	
  $('#submit').click(function(){ 
   var name=$('#name').val();
   var sex=$('.sex-check').html();
   $('.sex-check1').click(function(){
  	var sex=$(this).html();
  })
   var application=$('#application').val();
   var minzu=$('#minzu').val();
   var phone=$('#phone').val();
   var year=$('#year').val();
   var cart=$('#cart').val();
   var tel=$('#tel').val();
   var politics=$('#politics').val();
   var xiangxi=$('#xiangxi').val();
   var family1=$('#family1').val();
   var family2=$('#family2').val();
   var family3=$('#family3').val();
   var guan1=$('#guan1').val();
   var guan2=$('#guan2').val();
   var guan3=$('#guan3').val();
   var work1=$('#work1').val();
   var work2=$('#work2').val();
   var work3=$('#work3').val();
   var money1=$('#money1').val();
   var money2=$('#money2').val();
   var money3=$('#money3').val();
   	$.ajax({
    type : "post",
    url : "http://www.laravel.com/green",
    data:{name:name,application:application,sex:sex,minzu:minzu,phone:phone,year:year,cart:cart,tel:tel,dy:politics,
    	xiangxi:xiangxi,family1:family1,family2:family2,family3:family3,guan1:guan1,guan2:guan2,guan3:guan3,work1:work1,work2:work2,work3:work3,
        money1:money1,money2:money2,money3:money3
    },
    dataType : "jsonp",
    jsonp: "callback",
    jsonpCallback:"success_jsonpCallback",
    success : function(json){
    	$("#span").html(json);
    },
    error:function(){
        alert('fail');
    }
  });
  })
})

</script>

<?php
classa.inc: class A {
 var $one = 1; 
	 function show_one() { 
	 	echo $this->one; 
	 } 
 }
page1.php: 
include("classa.inc");
 $a = new A;
 $s = serialize($a); 

 $fp = fopen("store", "w"); 
 fwrite($fp, $s); 
 fclose($fp);
// page2.php: // 为了正常解序列化需要这一行 
include("classa.inc");
 $s = implode("", @file("store"));
 $a = unserialize($s); 
 $a->show_one();
?>