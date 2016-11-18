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
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="user-center.html" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img src="img/take-photo.png" id="img0">
					    <input type="file" name="file0" id="file0" multiple="multiple" />
				</span>
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" name="name" id="name" placeholder="请输入姓名" /> 
			    <div class="sex">
			    	<label class="sex-check">男</label>
			    	<label class="sex-check1">女</label>
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="name" id="email" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="name" id="phone" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" name="name" id="tel" placeholder="请填写您的家庭主机号码" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" name="name" id="mphone" placeholder="请填写您的家庭移动电话号码" />  
			</li>
			<!-- <li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
			        <input type="text" name="name"  placeholder="请选择户口是否迁移" disabled="disabled" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="checked">是</p>
		        	<p>否</p>
		        </div>
			</li> -->
			<!-- <li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="checked">群众</p>
		        	<p>团员</p>
		        	<p>党员</p>
		        </div>
			</li>
 -->		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="name" id="people" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="name" id="guan" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="name" id="people1" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="name" id="guan1" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<!-- <li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" name="name" placeholder="所在地地址" disabled="disabled"/> 
			    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li> -->
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="name" id="xiangxi" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
		<span style="display:block;text-align:center;" id="span"></span>
				<a href="dorm" class="ta-center db" id="submit" >下一步</a>
		</div>
  <script src="js/jquery-1.10.2.min.js"></script>

   <script type="text/javascript" src="js/basic.js"></script>	
  <script type="text/javascript" src="js/rem.js"></script>	
	</body>
</html>
<script src="js/jquery-1.5.2.min.js"></script>
  <script src="json.js"></script>
<script>
	$('#submit').click(function(){
	    var sex = $('.sex-check').html();
	  	// alert(sex);
	   $('.sex-check1').click(function(){
	  	var sex=$(this).html();
	  });
	   var name=$('#name').val();
	   var email=$('#email').val();
	   var phone=$('#phone').val();
	   var tel=$('#tel').val();
	   var mphone=$('#mphone').val();
	   var people=$('#people').val();
	   var people1=$('#people1').val();
	   var guan=$('#guan').val();
	   var guan1=$('#guan1').val();
	   var xiangxi=$('#xiangxi').val();
	   var data = {sex:sex,name:name,email:email,phone:phone,tel:tel,mphone:mphone,people:people,people1:people1,guan:guan,guan1:guan1,
    	xiangxi:xiangxi};
	   var arr = json('userinfo',data);
		
	})
 $("#file0").change(function(){
        var objUrl = getObjectURL(this.files[0]) ;
        console.log("objUrl = "+objUrl) ;
        if (objUrl) {
            $("#img0").attr("src", objUrl) ;
        }
    }) ;
    function getObjectURL(file) {
        var url = null ;
        if (window.createObjectURL!=undefined) { // basic
            url = window.createObjectURL(file) ;
        } else if (window.URL!=undefined) { // mozilla(firefox)
            url = window.URL.createObjectURL(file) ;
        } else if (window.webkitURL!=undefined) { // webkit or chrome
            url = window.webkitURL.createObjectURL(file) ;
        }
        return url ;
    }
</script>
