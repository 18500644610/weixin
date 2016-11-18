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
  <link rel="stylesheet" type="text/css" href="js/GooCalendar.css"/>
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
			<a href="{{ url('/') }}" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
			    <input type="text" name="name" placeholder="请选择您到达学校的交通工具" id="jiaotong" /> 
		   </div>
		    <span class="goin"><i class="iconfont icon-right"></i></span>
		    <div class="checkshow">
	        	<p class="checked" id="aircraft">飞机</p>
	        	<p class="checkedtrain">火车</p>
	        	<p class="checkedcar">汽车</p>
	        	<span class="close">关闭</span>
	       </div>
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" name="name" placeholder="请选择您目的地的站点位置" id="jiezhan" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" name="name" placeholder="请填写您的出发时间" id="bagintime" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" name="name" placeholder="请选择您的预计到达时间" id="endtime" />  
		        <span class="goin"><i class="iconfont icon-right" id="error_time"></i></span>
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>
			        <input type="text" name="name" placeholder="请选择是否有人陪同" id="is_pei" />  
		        </div>
		        
	       </div>
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" name="name" placeholder="请填写您的陪同人数" id="pei_num" />  
			</li>
		</ul>
		<div class="step-btn">
			    <a href="{{url('/dorm')}}">上一步</a>
				<a href="javascript:void(0)" id="tijiao">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
	</body>
</html>
<script  type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script  type="text/javascript" src="js/GooFunc.js"></script>
<script  type="text/javascript" src="js/GooCalendar.js"></script>
<script src="json.js"></script>
<script type="text/javascript">
//到达时间
var property2={
	divId:"demo2",//日历控件最外层DIV的ID
	needTime:true,//是否需要显示精确到秒的时间选择器，即输出时间中是否需要精确到小时：分：秒 默认为FALSE可不填
	yearRange:[1970,2030],//可选年份的范围,数组第一个为开始年份，第二个为结束年份,如[1970,2030],可不填
	week:['日','一','二','三','四','五','六'],//数组，设定了周日至周六的显示格式,可不填
	month:['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],//数组，设定了12个月份的显示格式,可不填
	format:"yyyy-MM-dd hh:mm:ss"
	/*设定日期的输出格式,可不填*/
};
//出发时间
var property={
	divId:"demo2",//日历控件最外层DIV的ID
	needTime:true,//是否需要显示精确到秒的时间选择器，即输出时间中是否需要精确到小时：分：秒 默认为FALSE可不填
	yearRange:[1970,2030],//可选年份的范围,数组第一个为开始年份，第二个为结束年份,如[1970,2030],可不填
	week:['日','一','二','三','四','五','六'],//数组，设定了周日至周六的显示格式,可不填
	month:['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],//数组，设定了12个月份的显示格式,可不填
	format:"yyyy-MM-dd hh:mm:ss"
	/*设定日期的输出格式,可不填*/
};
	$(document).ready(function(){
	  	canva1=$.createGooCalendar("bagintime",property);
		canva2=$.createGooCalendar("endtime",property2);
	});
	$(function(){
	  $("#tijiao").click(function(){//{{url('/reportcard')}}
			   var jiezhan=$('#jiezhan').val();
			   var jiaotong=$('#jiaotong').val();
			   //var bagintime=$('#bagintime').val();
			   //var endtime=$('#endtime').val();
			   var is_pei=$('#is_pei').val();
			   var pei_num=$('#pei_num').val();
			   var bagintime = $.myTime.DateToUnix($("#bagintime").val());
				var endtime =  $.myTime.DateToUnix($("#endtime").val());
				if(endtime - bagintime <0)
				{
					$("#error_time").html("<font color='red'>到达时间有误！</font>");
					return false;
				}
			   $.ajax({
				    type : "get",
				    url : "http://www.laravel.com/arrive",
				    data:{jiaotong:jiaotong,jiezhan:jiezhan,bagintime:bagintime,endtime:endtime,is_pei:is_pei,pei_num:pei_num},
				    dataType : "jsonp",
				    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
				    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
				    success : function(json){
				    	//$("#span").html(json);
				    	location.href="{{url('/reportcard')}}";
				    },
				    error:function(){
				        alert('fail');
				    }
				  });
		})
  	$.extend({
    myTime: {
        /**              
         * 日期 转换为 Unix时间戳
         * @param <string> 2014-01-01 20:20:20  日期格式              
         * @return <int>        unix时间戳(秒)              
         */
        DateToUnix: function(string) {
            var f = string.split(' ', 2);
            var d = (f[0] ? f[0] : '').split('-', 3);
            var t = (f[1] ? f[1] : '').split(':', 3);
            return (new Date(
                    parseInt(d[0], 10) || null,
                    (parseInt(d[1], 10) || 1) - 1,
                    parseInt(d[2], 10) || null,
                    parseInt(t[0], 10) || null,
                    parseInt(t[1], 10) || null,
                    parseInt(t[2], 10) || null
                    )).getTime() / 1000;
        }
    }
	});
})
$('#aircraft').click(function(){
	var traffic=$(this).html();
$('#traffic').val(traffic);
})

$('.checkedtrain').click(function(){
	var traffic=$(this).html();
$('#traffic').val(traffic);
})

$('.checkedcar').click(function(){
	var traffic=$(this).html();
$('#traffic').val(traffic);
})
</script>