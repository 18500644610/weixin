<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>用户登录</title>
	</head>
	<body>
		<div class="header">
			<span>修改密码</span>
			<a href="{{url('usercenter')}}" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<ul class="login-box">
			<li>
		        <input type="password" name="name" placeholder="旧密码" id="old"/>
			</li>
			<li>
		        <input type="password" name="name" placeholder="新密码" id="new"/>
			</li>
			<li>
		        <input type="password" name="name" placeholder="确认密码" id="confirm"/>
			</li>
		</ul>
		</div>
		<div class="confirm">
			<a  id="submit">提交</a>
		</div>
	</body>
<script src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.md5.js"></script>	
<script type="text/javascript" src="js/jquerysession.js"></script>	
    <script type="text/javascript" src="js/rem.js"></script>
    <script>
        $(document).on('click','#submit',function(){
            var old=$.md5($('#old').val());
            var newpwd=$('#new').val();
            var confirm=$('#confirm').val();
            var id = $.session.get('uid');
            alert(id)
            if(confirm==newpwd){
                var password=$.md5(newpwd)
                if(old==password){
                    alert("新旧密码一致")
                }else{
                    $.ajax({
                        type: "GET",
                        url: "http://www.laravel.com/change",
                        data: {old:old,password:password,id:id},
                        dataType: "jsonp",
                        //cache: true,
                        jsonp: "callback",
                        jsonpCallback: "success_jsonpCallback",
                        success: function (msg) {
                            if(msg['msg']==0){
                                alert(msg['result'])
                            }else{
                                location.href = "{{url('/')}}";
                            }
                        },
                        error:function(){
                            alert("You have lost")
                        }
                    });
                }
            }else{
                alert("密码与确认密码必须一致");
            }


        })
    </script>
</html>
